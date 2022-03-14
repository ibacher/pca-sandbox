<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    function login(Request $request): Response
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        if (Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ])) {
            $user = Auth::guard('web')->user();
            $token = $user->createToken("PCA Sandbox Token")->accessToken;
            return response()->json([
                'user' => $user,
                'token' => $token,
                'message' => __("auth.success")
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'error' => __("auth.fail")
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    function logout(): Response
    {
        Auth::logout();
        return response()->noContent();
    }
}
