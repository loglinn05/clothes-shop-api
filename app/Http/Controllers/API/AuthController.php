<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\API\User\StoreRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {}

    public function register(StoreRequest $request)
    {
        if ($request->validated()) {
            $user = User::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'tel' => $request->tel,
                'password' => Hash::make($request->password),
                'birthdate' => $request->birthdate,
                'address' => $request->address,
                'gender' => $request->gender
            ]);

            if (!$user) {
                return response()->json(['message' => 'Registration failed because of a server-side error.'], 500);
            } else {
                return response()->json(['message' => 'Registration succeeded.'], 200);
            }
        }
    }
}
