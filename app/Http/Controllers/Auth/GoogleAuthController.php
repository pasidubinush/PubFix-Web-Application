<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\View\View;

class GoogleAuthController extends Controller
{
    /**
     * Redirect the user to the Google authentication screen,
     * or show a local test sign-in helper if Google credentials are not yet set.
     */
    public function redirect(Request $request): RedirectResponse|View
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        $clientId = config('services.google.client_id');
        $clientSecret = config('services.google.client_secret');

        // If real Google OAuth credentials are not configured, offer local dev sign-in
        if (empty($clientId) || empty($clientSecret)) {
            return view('auth.google-dev');
        }

        $state = Str::random(40);
        $request->session()->put('google_oauth_state', $state);

        $query = http_build_query([
            'client_id' => $clientId,
            'redirect_uri' => config('services.google.redirect'),
            'response_type' => 'code',
            'scope' => 'openid profile email',
            'state' => $state,
            'prompt' => 'select_account',
        ]);

        return redirect('https://accounts.google.com/o/oauth2/v2/auth?' . $query);
    }

    /**
     * Handle the callback from Google OAuth.
     */
    public function callback(Request $request): RedirectResponse
    {
        $clientId = config('services.google.client_id');
        $clientSecret = config('services.google.client_secret');

        // Check if coming from the local dev helper
        if ($request->filled('dev_mode') && (empty($clientId) || empty($clientSecret))) {
            $email = $request->input('email', 'emily.rivera.google@gmail.com');
            $name = $request->input('name', 'Emily Rivera');
            $googleId = 'google_dev_' . substr(md5($email), 0, 16);
            $avatar = null;

            return $this->loginOrCreateCustomer($request, $googleId, $name, $email, $avatar);
        }

        // Real Google OAuth callback
        $code = $request->input('code');
        $state = $request->input('state');
        $savedState = $request->session()->pull('google_oauth_state');

        if (! $code || ! $state || $state !== $savedState) {
            return redirect()->route('login')
                ->withErrors(['email' => 'Google authentication failed or expired. Please try again.']);
        }

        $tokenResponse = Http::asForm()->post('https://oauth2.googleapis.com/token', [
            'code' => $code,
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'redirect_uri' => config('services.google.redirect'),
            'grant_type' => 'authorization_code',
        ]);

        if (! $tokenResponse->successful()) {
            return redirect()->route('login')
                ->withErrors(['email' => 'Unable to authenticate with Google.']);
        }

        $accessToken = $tokenResponse->json('access_token');

        $userResponse = Http::withToken($accessToken)
            ->get('https://www.googleapis.com/oauth2/v3/userinfo');

        if (! $userResponse->successful()) {
            return redirect()->route('login')
                ->withErrors(['email' => 'Failed to retrieve your Google profile.']);
        }

        $userData = $userResponse->json();
        $googleId = $userData['sub'] ?? null;
        $name = $userData['name'] ?? 'Google Customer';
        $email = $userData['email'] ?? null;
        $avatar = $userData['picture'] ?? null;

        if (! $email) {
            return redirect()->route('login')
                ->withErrors(['email' => 'No email address was returned by Google.']);
        }

        return $this->loginOrCreateCustomer($request, $googleId, $name, $email, $avatar);
    }

    /**
     * Find or create the customer and log them in.
     */
    protected function loginOrCreateCustomer(
        Request $request,
        ?string $googleId,
        string $name,
        string $email,
        ?string $avatar
    ): RedirectResponse {
        $user = User::where('google_id', $googleId)
            ->orWhere('email', $email)
            ->first();

        if ($user) {
            if ($googleId && empty($user->google_id)) {
                $user->google_id = $googleId;
            }
            if ($avatar && empty($user->avatar)) {
                $user->avatar = $avatar;
            }
            $user->save();
        } else {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'google_id' => $googleId,
                'avatar' => $avatar,
                'password' => Hash::make(Str::random(32)),
                'role' => UserRole::Customer,
                'zip_code' => '00700',
            ]);
        }

        Auth::login($user, remember: true);
        $request->session()->regenerate();

        return redirect()->route('home')
            ->with('success', 'Welcome, ' . $user->name . '! You have successfully signed in with Google.');
    }
}
