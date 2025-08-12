<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\LoginModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show login page
    public function showLoginForm()
    {
        return view('frontend.login');
    }

    // Handle login
    public function login(Request $request)
{
    // Validate input first
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string|min:6',
    ]);

    // Fetch user by username
    $user = LoginModel::where('username', $request->username)->first();

    if (!$user) {
        // User not found
        return back()->withErrors(['username' => 'User not found'])->onlyInput('username');
    }

    // Check if the entered password matches the hashed password in DB
    if (!\Hash::check($request->password, $user->password)) {
        // Password does not match
        return back()->withErrors(['username' => 'Invalid password'])->onlyInput('username');
    }

    // Log the user in manually
    Auth::login($user);

    // Regenerate session to prevent fixation
    $request->session()->regenerate();

    // Redirect to intended page or dashboard
    return redirect()->intended('/dashboard');
}


    // Logout
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Logged out successfully.');
    }

    // Show registration page
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:login,username',
            'email'    => 'required|email|unique:login,email',
            'password' => 'required|string|min:6',
        ]);

        $user = LoginModel::create([
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect('/dashboard')->with('success', 'Account created successfully.');
    }
}

