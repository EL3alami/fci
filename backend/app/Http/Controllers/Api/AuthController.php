<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('Email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->PasswordHash)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    return response()->json([
        'SSN' => $user->SSN,
        'name' => $user->Full_Name,
        'role' => $user->Role
    ]);
}

}


