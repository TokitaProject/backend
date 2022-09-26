<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller {

    public function login(Request $request) {   
        $validasi = Validator::make($request->all(),[
        'email' =>'required',
        'password' =>'required|min:6',
    ]);

    if ($validasi->fails()){
        return $this->errors($validasi->errors()->first());
    }

        $user = User::where('email', $request->email)->first();
        if($user){

            if (password_verify($request->password, $user->password)){
                return $this->success($user, "welcome " .$user->name);
            } else {
                return $this->errors("wrong password!");
            }
        }
        return $this->errors("user tidak ditemukan");
    }

    public function register(Request $request)
    {
        $validasi = Validator::make($request->all(),[
        'name' =>'required',
        'email' =>'required|unique:users',
        'phone' =>'required|unique:users',
        'password' =>'required|min:6',
    ]);

    
    if ($validasi->fails()){
        return $this->errors($validasi->errors()->first());
    }

    $user = User::create(array_merge($request->all(), [
        'password' => bcrypt($request->password)
    ]));
    if ($user) {
        return $this->success($user, 'welcome ' . $user->name);
    } else {
        return $this->errors("Something wrong!");
    }
    }
    
    public function success($data, $message = "success")
    {
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data'  => $data
        ], 200);
    }

    public function errors($message)
    {
        return response()->json([
            'code' => 400,
            'message' => $message
        ], 400);
    }
}
