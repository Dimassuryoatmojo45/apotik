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

    public function buat_vendor(){

        $user = Auth::user();

        return view('buat_vendor');
    }
}