<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use User;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $validatedData =   $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        $validatedData['password'] = bcrypt($request->password);


        // $user = User::create($validatedData);
        // $accessToken = $user->createToken('authToken')->accessToken;

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password)
        // ]);



        return response()->json(['name' => $validatedData], 200);
    }
}