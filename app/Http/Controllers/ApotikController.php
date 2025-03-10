<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apotik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApotikController extends Controller
{
    public function create_apotik(Request $request)
    {
        $validator = Validator::make(request()->all(), [

            'nama_apotik' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }

        $apotik = Apotik::create(
            [
                'nama_apotik' => strtoupper(request('nama_apotik')),
                'alamat' => request('alamat'),
                'no_hp' => request('no_hp'),
            ]
        );

        $update_data = User::find(Auth::user()->id);

        $update_data->apotik_id = $apotik->id;

        $update_data->save();


        if ($apotik) {
            if (preg_match('/api/', $request->server('REQUEST_URI'))) {
                return response()->json(['message' => 'Berhasil']);

            } else {
                return redirect()->back();
                
            }
        } else {
            return response()->json(['message' => 'Gagal!']);
        }
    }
}