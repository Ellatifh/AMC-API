<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);

        if($validation->fails()) {
            return $this->error("invalid parametres",400,$validation->errors());
        }

        $attr = $request->All();

        $user = User::create([
            'name' => $attr['name'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email']
        ]);

        return $this->success([
            'token' => $user->createToken('API Token')->plainTextToken,
            "token_type" => "bearer"
        ]);
    }

    public function login(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        if($validation->fails()) {
            return $this->error("invalid parametres",400,$validation->errors());
        }

        $attr = $request->All();

        if (!Auth::attempt($attr)) {
            return $this->error('Credentials not match', 401);
        }

        return $this->success([
            'token' => auth()->user()->createToken('API Token')->plainTextToken,
            "token_type" => "bearer"
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}