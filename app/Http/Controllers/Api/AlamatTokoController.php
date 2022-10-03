<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\AlamatToko;

class AlamatTokoController extends Controller
{

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kodepost' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if ($validasi->fails()) {
            return $this->error($validasi->errors->frist());
        }

        $toko = AlamatToko::where('tokoId', $id)->where('isActive', true)->get();
        return $this->success($toko);
    }

    public function show($id) {
        $alamat = AlamatToko::where('tokoId', $id)->where('isActive', true)->get();
        return $this->success($alamat);
    }

    public function edit($id)
    {
        # code...
    }

    public function update(Request $request, $id) {
        $alamat = AlamatToko::where('id', $id)->first();
        if ($alamat) {
            $alamat->update($request->all());
            return $this->success($alamat);
        } else {
            return $this->error("Alamat tidak ditemukan");
        }
    }

    public function destroy($id)
    {
        $alamat = AlamatToko::where ('id',$id)->firts();
        if ($alamat) {
            $alamat->update([
                'isActive' => false
            ]);
            return $this->success($alamat, "Alamat berhasil dihapus");
        } else {
            return $this->error("alamat tidak ditemukan");
        }
    }

    public function errors($message)
    {
        return response()->json([
            'code' => 400,
            'message' => $message
        ], 400);
    }

    public function success($data,  $message = "succes")
    {
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data' => $data
        ]);
    }
}
