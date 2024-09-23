<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Attempt to find the admin by email
        $admin = Admin::where('email', $request->email)->first();

        // Check if the admin exists and the password matches
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Create a token (optional: if you are using token-based auth like Passport or Sanctum)
            $token = $admin->createToken('admin_token')->plainTextToken;

            return response()->json([
                'status' => 'success',
                'message' => 'Login successful',
                'token' => $token,
                'admin' => [
                    'name' => $admin->name,
                    'email' => $admin->email,
                    'image_url' => $admin->image_url,
                ]
            ], 200);
        }

        // If login fails
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials',
        ], 401);
    }

    /**
     * Admin logout.
     */
    public function logout(Request $request)
    {
        // Revoke the token that was used to authenticate the request
        $request->user()->tokens()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Logout successful',
        ], 200);
    }
}
