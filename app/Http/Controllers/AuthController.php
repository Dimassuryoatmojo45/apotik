<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\PasswordValidationRules;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'username' => ['required', function($attribute, $value, $fail) {
                if (empty($value)) {
                    $fail('The ' . $attribute . ' field is required.');
                }
            }],
            'password' => 'required|min:3',
        ]);

        try {
            // Attempt to authenticate the user
            if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
                $user = Auth::user();
                $token = $user->createToken('MyApp')->plainTextToken;
    
                return response()->json([
                    'token' => $token,
                    'user' => $user,
                ]);
            } else {
                return response()->json(['message' => 'Unauthorized'], 401);
            }
        } catch (\Exception $e) {
            // Log exception and return error response
            \Log::error('Login Error: ' . $e->getMessage());
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }

    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function register(Request $request)
    {
        $input = $request->all();

        $a = Validator::make($input, [
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // Create a new user
        $user = User::create([
            'nama_lengkap' => $input['nama_lengkap'],
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        // Generate API token for the user
        $token = $user->createToken('YourAppName')->plainTextToken;

        return response()->json([
            "token"=> "Bearer <access-token>",
            'user' => $user,
        ]);

    }

    /**
     * Destroy an authenticated session and revoke the user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            $request->user()->tokens()->delete();
            
            return response()->json(['status' => 'true', 'message' => 'Berhasil Logout', 'data' => []]);
        
        } catch (\Exception $e) {
            return response()->json(['status' => 'false', 'message' => $e->getMessage(),'data' => []], 500);
        
        }
    }

    public function register_admin(Request $request)
    {
        $input = $request->all();

        $apotik_id = DB::table('users')
            ->select('apotik_id')
            ->where('id', $input['id_owner'])
            ->first();

        $apotik = $apotik_id->apotik_id;

        $a = Validator::make($input, [
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // Create a new user
        $user = User::create([
            'nama_lengkap' => $input['nama_lengkap'],
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'apotik_id' => $apotik,
            'role_id' => 2
        ]);

        // Generate API token for the user
        $token = $user->createToken('YourAppName')->plainTextToken;

        if (preg_match('/api/', $request->server('REQUEST_URI'))) {
            return response()->json([
                "token"=> "Bearer <access-token>",
                'user' => $user,
            ]);
        } else {
            return redirect()->back(); 
        }

    }
}