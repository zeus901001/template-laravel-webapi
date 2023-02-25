<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Login action for administrator.
     */
    public function login(Request $request): void
    {
        response()->json(['success' => false]);
    }

    /**
     * Register action for administrator.
     */
    public function register(Request $request): void
    {
        response()->json(['success' => false]);
    }

    /**
     * Logout action for administrator.
     */
    public function logout(Request $request): void
    {
        response()->json(['success' => true]);
    }
}