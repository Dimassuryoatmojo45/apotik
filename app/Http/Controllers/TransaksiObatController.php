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
                'harga_jual_per_strip' => request('harga_perstip'),
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
            
            $transaksi_id = DB::table('transaksi')->insertGetId([
                'apotik_id' => $request->apotik_id,
                'nama_admin' => $request->nama_admin
            ]);

            $jumlah_transaksi = [];
            
            foreach ($request->transaksi as $key => $value) {
                $data_obat = DB::table('obat')
                    ->select(
                        'id',
                        'harga_jual_per_box',
                        'harga_jual_per_strip',
                        'harga_jual_per_satuan'
                        )
                    ->where('id', $value['obat_id'])
                    ->first();

                if (!$data_obat) {
                    dd("Data obat tidak ditemukan untuk ID: " . $value['obat_id']);
                }

                if ($value['satuan'] == 1) {
                    
                    DB::table('detail_transaksi')
                    ->insert([
                        'id_transaksi' => $transaksi_id,
                        'obat_id' => $value['obat_id'],
                        'kuantiti' => $value['kuantiti'],
                        'harga' => $data_obat->harga_jual_per_strip
                    ]);

                    array_push($jumlah_transaksi, $data_obat->harga_jual_per_strip * $value['kuantiti']);
                
                } elseif ($value['satuan'] == 2) {    
                    DB::table('detail_transaksi')
                    ->insert([
                        'id_transaksi' => $transaksi_id,
                        'obat_id' => $value['obat_id'],
                        'kuantiti' => $value['kuantiti'],
                        'harga' => $data_obat->harga_jual_per_satuan
                    ]);

                    array_push($jumlah_transaksi, $data_obat->harga_jual_per_satuan * $value['kuantiti']);
                }
            }

            $total = array_sum($jumlah_transaksi);

            DB::table('transaksi')->where('id', $transaksi_id)->update(['total' => $total]);

            if (preg_match('/api/', $request->server('REQUEST_URI'))) {
                return response()->json(['message' => 'Berhasil']);
            } else {
                return redirect()->back()->with('success', 'Form berhasil disubmit!');
            }

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th, 200);
        }
    }
}