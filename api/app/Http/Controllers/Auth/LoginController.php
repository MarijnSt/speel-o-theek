<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // validate input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        // check if email exists
        $user = User::where('email', $request['email'])->first();
        if (!$user) {
            throw ValidationException::withMessages([
                'email' => ['Email does not exist'],
            ]);
        }

        // try login
        $credentials = $request->only('email', 'password');
        
        if (!Auth::attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'password' => ['Wrong password'],
            ]);
        }

        $request->session()->regenerate();
    }

    public function logout (Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
    }
}
