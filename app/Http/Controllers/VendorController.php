<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    public function create_vendor()
    {

        $validator = Validator::make(request()->all(), [

            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);


        if ($validator->fails()) {
            return response()->json($validator->messages());
        }
        $apotik_id = Auth::user()->apotik_id;

        $vendor = Vendor::create(
            [
                'nama_perusahaan' => request('nama_perusahaan'),
                'alamat' => request('alamat'),
                'no_hp' => request('no_hp'),
                'apotik_id' => $apotik_id
            ]
        );

        if ($vendor) {
            if (preg_match('/api/', $request->server('REQUEST_URI'))) {
                return response()->json(['message' => 'Berhasil']);

            } else {
                return redirect()->back();
            }

        } else {
            return response()->json(['message' => 'Pendaftaran Gagal!']);
        }
    }
}