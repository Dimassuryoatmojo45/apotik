<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiVendor;
use App\Models\DetailTransaksiModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TransaksiVendorController extends Controller
{
    public function create_stock(Request $request)
    {

        $validator = Validator::make(request()->all(), [
            'nama_obat' => 'required',
            'vendor_id' => 'required',
            'status_pembelian' => 'required',
            'isi_box' => 'required',
            'isi_perbox' => 'required',
            'isi_satuan' => 'required',
            'total_obat' => 'required',
            'harga_perbox' => 'required',
            'harga_perstripe' => 'required',
            'harga_persatuan' => 'required',
            'harga_total_pembelian' => 'required',
            'jenis_obat_id' => 'required'
        ]);

        $batch = DB::table('transaksi_vendor')
            ->where('nama_obat', request('nama_obat'))
            ->where('vendor_id', request('vendor_id'))
            ->count();

        $vendor = TransaksiVendor::create(
            [
                'nama_obat' => request('nama_obat'),
                'vendor_id' =>  request('vendor_id'),
                'status_pembelian_id' => request('status_pembelian'),
                'isi_box' => request('isi_box'),
                'isi_perbox' =>  request('isi_perbox'),
                'isi_satuan' =>  request('isi_satuan'),
                'total_obat' =>  request('total_obat'),
                'harga_perbox' =>  request('harga_perbox'), 
                'harga_per_stripe' =>  request('harga_perstripe'),
                'harga_per_satuan' =>  request('harga_persatuan'),
                'harga_total_pembelian' =>  request('harga_total_pembelian'),
                'batch' => $batch + 1
            ]

        );

        $detail_transaki = DetailTransaksiModel::create(
            [
                'id_transaksi' => $vendor->id,
                'nominal' => request('harga_total_pembelian')
            ]
        
        );

        if ($vendor && $detail_transaki) {
            if (preg_match('/api/', $request->server('REQUEST_URI'))) {
                return response()->json(['message' => 'Berhasil']);
            } else {
                return redirect()->back()->with('success', 'Form berhasil disubmit!');
            }
        } else {
            return response()->json(['message' => 'Pendaftaran Gagal!']);
        }
    }
}