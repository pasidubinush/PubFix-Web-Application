<?php

namespace App\Http\Controllers\Worker;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\WorkerLoginRequest;
use App\Http\Requests\Worker\WorkerRegistrationRequest;
use App\Models\Category;
use App\Models\Handyman;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class WorkerAuthController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (Auth::check()) {
            return Auth::user()->isHandyman()
                ? redirect()->route('worker.dashboard')
                : redirect()->route('home');
        }

        return view('worker.sign_in_up', [
            'mode' => 'login',
            'categories' => Category::query()->orderBy('name')->get(),
        ]);
    }

    public function showRegistration(): View|RedirectResponse
    {
        if (Auth::check()) {
            return Auth::user()->isHandyman()
                ? redirect()->route('worker.dashboard')
                : redirect()->route('home');
        }

        return view('worker.sign_in_up', [
            'mode' => 'signup',
            'categories' => Category::query()->orderBy('name')->get(),
        ]);
    }

    public function login(WorkerLoginRequest $request): RedirectResponse
    {
        $user = User::where('email', $request->validated('email'))->first();

        if (! $user || ! $user->isHandyman() || ! Hash::check($request->validated('password'), $user->password)) {
            return back()
                ->withInput($request->safe()->only(['email']))
                ->withErrors(['email' => 'These credentials do not match a Worker account.']);
        }

        Auth::login($user, $request->boolean('remember'));
        $request->session()->regenerate();

        return redirect()->intended(route('worker.dashboard'))
            ->with('success', 'Welcome back, '.$user->name.'!');
    }

    public function register(WorkerRegistrationRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $user = DB::transaction(function () use ($validated): User {
            $user = User::create([
                'name' => $validated['first_name'].' '.$validated['last_name'],
                'email' => $validated['email'],
                'password' => $validated['password'],
                'phone' => $validated['phone'] ?? null,
                'zip_code' => $validated['zip_code'],
                'role' => UserRole::Handyman,
            ]);

            Handyman::create([
                'user_id' => $user->id,
                'category_id' => $validated['category_id'],
                'hourly_rate' => $validated['hourly_rate'],
                'city' => $validated['city'],
                'available' => true,
            ]);

            return $user;
        });

        return redirect()->route('worker.sign-in')
            ->with('success', 'Your Worker account has been created. Please sign in.');
    }
}