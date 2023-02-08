<?php

namespace App\Http\Controllers;
use App\Services\UserService;
use Swagger\Annotations as SWG;
class UserController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->middleware('auth:api');
        $this->userService = $userService;
    }

    public function register(Request $request)
    {
        $user = $this->userService->register($request->all());
        $token = JWTAuth::fromUser($user);
        return response()->json(compact('token'));
    }

    public function login(Request $request)
    {
        $token = $this->jwtService->authenticate($request->input('email'), $request->input('password'));
        if (!$token) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        return response()->json(['token' => $token]);
    }
}
