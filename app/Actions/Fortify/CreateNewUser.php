<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Apotik;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
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

        $apotik_id = $apotik->id;
        
        Validator::make($input, [
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
    
        // Jika validasi berhasil, buat pengguna baru
        $user = User::create([
            'nama_lengkap' => $input['nama_lengkap'],
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'apotik_id' => $apotik_id,
            'role_id' => 1
        ]);
    
        // Pengalihan setelah berhasil membuat pengguna baru
        return $user; 
    }
}