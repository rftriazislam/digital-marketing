<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function signup(Request $request)
    {

        $validatedData =   $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|unique:users',
            'country' => 'required',
            'state' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|min:6',
        ]);
        $validatedData['password'] = bcrypt($request->password);
        if ($request->refered_id) {
            $validatedData['refered_id'] = $request->refered_id;
        }


        $user = User::create($validatedData);
        if ($user) {
            return response()->json(['sucsess' => true, 'message' => 'Information save successfully'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'something error']);
        }
        // $accessToken = $user->createToken('authToken')->accessToken;

    }

    public function signin(Request $request)
    {

        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['user' => auth()->user(), 'token' => $accessToken]);
    }
}