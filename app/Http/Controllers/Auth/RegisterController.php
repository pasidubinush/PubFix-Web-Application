<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Show the customer registration form.
     */
    public function create(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('customerRgistration');
    }

    /**
     * Store the new customer account and redirect to sign-in page.
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'zip_code' => $request->zip_code,
            'role' => UserRole::Customer,
        ]);

        return redirect()->route('customer.signin')
            ->with('success', 'Your customer account has been created successfully! Please sign in below.');
    }
}
