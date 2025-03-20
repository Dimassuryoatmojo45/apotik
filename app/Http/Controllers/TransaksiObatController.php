<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\TransaksiObat;

class TransaksiObatController extends Controller
{
    public function create_obat(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'stock_id' => 'required',
            'harga_perbox' => 'required',
            'harga_perstip' => 'required',
            'harga_persatuan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }

        $obat = TransaksiObat::create(
            [
                'stock_id' => request('stock_id'),
                'harga_jual_per_box' => request('harga_perbox'),
                'harga_jual_per_stipe' => request('harga_perstip'),
                'harga_jual_per_satuan' => request('harga_persatuan')
            ]
        );

        if (preg_match('/api/', $request->server('REQUEST_URI'))) {
            return response()->json(['message' => 'Berhasil']);
        } else {
            return redirect()->back()->with('success', 'Form berhasil disubmit!');
        }
    }

    public function create_transaksi_obat(Request $request)
    {
        try {
            
            $data_obat = DB::table('obat')
                ->select(
                    'id',
                    'harga_jual_per_satuan'
                    )
                ->where('id', $request->obat_id)
                ->first();

            $id = DB::table('transaksi')->insertGetId([
                'apotik_id' => $request->apotik_id,
                'nama_admin' => $request->nama_admin,
                'total' => $data_obat->harga_jual_per_satuan * $request->kuantiti
            ]);

            DB::table('detail_transaksi')
            ->insert([
                'id_transaksi' => $id,
                'obat_id' => $request->obat_id,
                'kuantiti' => $request->kuantiti,
                'harga' => $data_obat->harga_jual_per_satuan
            ]);

            return redirect()->back()->with('success', 'Form berhasil disubmit!');

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th, 200);
        }
    }
}