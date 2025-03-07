<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiVendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TransaksiVendorController extends Controller
{
    public function create_stock()
    {

        $validator = Validator::make(request()->all(), [
            'nama_obat' => 'required',
            'total_pembelian' => 'required',
            'jumlah_isi_perbox' => 'required',
            'satuan' => 'required',
            'batch' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json($validator->messages());
        }


        $vendor_id = DB::table('apotik')
            ->leftJoin('vendor', 'apotik.id', '=', 'vendor.apotik_id')
            ->select('vendor.id')
            ->first();

        $vendor = TransaksiVendor::create(
            [
                'nama_obat' => request('nama_obat'),
                'vendor_id' => $vendor_id->id,
                'status_pembelian_id' => 1,
                'total_pembelian' =>  request('total_pembelian'),
                'jumlah_isi_perbox' =>  request('jumlah_isi_perbox'),
                'satuan' =>  request('satuan'),
                'batch' =>  request('batch'),
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