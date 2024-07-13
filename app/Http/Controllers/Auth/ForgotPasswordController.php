<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /**
     * Show the forgot password form.
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle the password reset email request.
     */
    public function store(Request $request)
    {
        // Logic to send password reset link

        return back()->with('status', 'Un email de réinitialisation de mot de passe a été envoyé.');
    }
}
