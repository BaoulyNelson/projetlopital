<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function authenticated(Request $request, $user)
    {
        Log::info('User authenticated in controller', ['user' => $user]);
        if (method_exists($user, 'isAdmin')) {
            Log::info('isAdmin method exists in controller', ['isAdmin' => $user->isAdmin()]);
            if ($user->isAdmin()) {
                Log::info('User is admin in controller');
                return redirect()->route('dashboard.index');
            }
            Log::info('User is not admin in controller');
        } else {
            Log::info('isAdmin method does not exist in controller');
        }

        return redirect()->route('home');
    }
}
