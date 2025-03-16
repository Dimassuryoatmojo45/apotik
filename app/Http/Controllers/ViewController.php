<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ViewController extends Controller
{
    public function buat_apotik(Request $request){

        $user = Auth::user()->id;
        $dataApotik = DB::table('users as u')
            ->join('apotik as a','u.apotik_id','a.id')
            ->select(
                'u.id',
                'u.nama_lengkap',
                'a.nama_apotik',
                'a.no_hp',
                'a.alamat'
                )
            ->where('u.id', $user)
            ->get();

        if (preg_match('/api/', $request->server('REQUEST_URI'))) {

            $response = [
                'responseCode' => 200,
                'status' => true,
                'message' => 'Data found',
                'data' => [
                    'dataApotik' => $dataApotik
                ]
            ];

            return response()->json($response);

        } else {

            $data = [
                'dataApotik' => $dataApotik
            ];
            
            return view('buat_apotik', $data); 
        }
    }

    public function buat_vendor(Request $request){

        $user = Auth::user()->id;
        $dataVendor = DB::table('users as u')
            ->join('vendor as v','u.apotik_id','v.apotik_id')
            ->select(
                'v.nama_perusahaan',
                'v.alamat',
                'v.no_hp',
                'v.id'
                )
            ->where('u.id', $user)
            ->get();

        if (preg_match('/api/', $request->server('REQUEST_URI'))) {

            $response = [
                'responseCode' => 200,
                'status' => true,
                'message' => 'Data found',
                'data' => [
                    'dataVendor' => $dataVendor
                ]
            ];

            return response()->json($response);

        } else {

            $data = [
                'dataVendor' => $dataVendor
            ];
            
            return view('buat_vendor', $data);
        } 

    }

    public function buat_transaksi(Request $request){

        $user = Auth::user()->id;
        $dataVendor = DB::table('users as u')
            ->join('vendor as v','u.apotik_id','v.apotik_id')
            ->select(
                'v.nama_perusahaan',
                'v.alamat',
                'v.no_hp',
                'v.id'
                )
            ->where('u.id', $user)
            ->get();

        $dataJenisObat = DB::table('jenis_obat as jo')
            ->select(
                'jo.id',
                'jo.deskripsi'
                )
            ->get();

        $dataTransaksiVendor = DB::table('transaksi_vendor as tv')
            ->join('vendor as v','tv.vendor_id','v.id')
            ->join('jenis_obat as jo','tv.jenis_obat_id','jo.id')
            ->select(
                'tv.nama_obat',
                'v.nama_perusahaan',
                'jo.deskripsi',
                'tv.status_pembelian_id'
                )
            ->get();

        if (preg_match('/api/', $request->server('REQUEST_URI'))) {

            $response = [
                'responseCode' => 200,
                'status' => true,
                'message' => 'Data found',
                'data' => [
                    'dataVendor' => $dataVendor,
                    'dataJenisObat' => $dataJenisObat,
                    'dataTransaksiVendor' => $dataTransaksiVendor
                ]
            ];

            return response()->json($response);

        } else {

            $data = [
                'dataVendor' => $dataVendor,
                'dataJenisObat' => $dataJenisObat,
                'dataTransaksiVendor' => $dataTransaksiVendor
            ];
            
            return view('buat_transaksi_vendor', $data); 
        }
    }

    public function register_admin(Request $request){
        $user = Auth::user()->id;
        $apotik = Auth::user()->apotik_id;

        $data_admin = DB::table('users')
        ->where('apotik_id', $apotik)
        ->where('role_id', 2)
        ->get();

        $data = [
            'user' => $user,
            'data_admin' => $data_admin
        ];

        return view('auth.register_admin', $data);
    }
}