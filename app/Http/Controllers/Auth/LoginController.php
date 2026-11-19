<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Show the customer sign-in form.
     */
    public function create(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('customer-signin');
    }

    /**
     * Authenticate the customer and start their session.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        $remember = (bool) $request->remember;

        if (! Auth::attempt($credentials, $remember)) {
            $userExists = \App\Models\User::where('email', $request->email)->exists();
            $errorMessage = $userExists
                ? 'Invalid password entered. Please double-check your password and try again.'
                : 'Invalid email or password. No customer account exists with this email address.';

            return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => $errorMessage]);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('home'))
            ->with('success', 'Welcome back, ' . Auth::user()->name . '!');
    }

    /**
     * Sign the customer out and clear their session.
     */
    public function destroy(): RedirectResponse
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'You have been signed out.');
    }
}
