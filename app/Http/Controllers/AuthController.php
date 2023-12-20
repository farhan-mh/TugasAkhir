<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
         // Validasi input
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users|max:255',
        'password' => 'required|min:8',
    ]);

    // Cek apakah validasi berhasil
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }
    

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success', 'Register successfully');
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            return redirect('/home2')->with('success', 'Login Success'); //   redirect('/manggil route')
        }
        return back()->with('error', 'Error Email or Password')->withInput(); // whitInput-> kembali dengan data yg sudah di input sebelumnya |harus- value="{{ old('email') }}"
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login2');
    }

}
