<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // NOTE GET /
    /* -------------------------------------------------------------------------- */
    /*                                 LAMAN LOGIN                                */
    /* -------------------------------------------------------------------------- */
    public function loginView()
    {
        return view('auth');
    }

    // NOTE POST /auth/login
    /* -------------------------------------------------------------------------- */
    /*                                PROSES LOGIN                                */
    /* -------------------------------------------------------------------------- */
    public function login(Request $request)
    {
        // SECTION rules
        $rules = [
            'password'  => 'min:6'
        ];
        // !SECTION rules
        // SECTION pesan validasi
        $messages = [
            'password.min'      => 'Password harus mengandung setidaknya 6 karakter',
        ];
        // !SECTION pesan validasi
        // NOTE proses validasi
        $validator = Validator::make($request->all(), $rules, $messages);
        // SECTION jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        // !SECTION jika validasi gagal
        // SECTION remember me
        if ($request->has('remember')) {
            $remember = true;
        } else {
            $remember = false;
        }
        // !SECTION remember me
        // NOTE ambil data user
        $user = DB::table('users')->where('username', $request->username)->first();
        // SECTION kalau username tidak terdaftar
        if (!$user) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Username tidak terdaftar, saha maneh?']);
        }
        // !SECTION kalau username tidak terdaftar
        // SECTION data otentifikasi
        $data = [
            'email'     => $user->email,
            'password'  => $request->password,
        ];
        // !SECTION data otentifikasi
        // NOTE proses otentifikasi
        Auth::attempt($data);

        if (Auth::check()) {
            // SECTION kalau otentifikasi berhasil
            return redirect()->to('/');
            // !SECTION kalau otentifikasi berhasil
        } else {
            // SECTION kalau otentifikasi gagal
            return redirect()->back()->withInput()->withErrors(['error' => 'Password Salah, baleg sia teh']);
            // !SECTION kalau otentifikasi gagal
        }
    }
}
