<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\InviteCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Generate unique invite code
        $inviteCode = $this->generateInviteCode();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'invite_code' => $inviteCode,
            'password' => Hash::make($request->password),
        ]);

        // Optionally, you can save the invite code in a separate table
        InviteCode::create([
            'code' => $inviteCode,
            'used' => true, // Mark it as used because it's being assigned to a user
        ]);

        // Send email verification link
        $user->sendEmailVerificationNotification();

        return response()->json(['message' => 'Registration successful! Please verify your email.'], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
            'remember_me' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        if ($user->email_verified_at == null) {
            return response()->json(['error' => 'Email not verified'], 403);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['token' => $token, 'remember' => $request->remember_me], 200);
    }

    private function generateInviteCode()
    {
        do {
            $code = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8)); // Generate a random 8-character code
        } while (InviteCode::where('code', $code)->exists()); // Ensure the code is unique

        return $code;
    }
}
