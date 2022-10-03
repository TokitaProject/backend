<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class TokoController extends Controller
{
    public function store(Request $request) {
        $validasi = Validator::make($request->all(), [
            'name' => 'required',
            'userId' => 'required',
            'kota' => 'required'
        ]);

        if ($validasi -> fails()) {
            return $this->error($validasi->validasi->errors->frist());
        }

        $toko = Toko::create($request->all());
        return $this->success($toko);
    }


    public function cekToko($id)
    {
        $user = User::where('id', $id)->with('toko')->first();
        if ($user) {
            return $this->success($user);
        }else{
            return $this->error("User tidak ditemukan");
        }
    }


    public function success($data, $message = "success")
    {
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function error($message)
    {
        return response()->json([
            'code' => 400,
            'message' => $message
        ], 400);
    }
}
