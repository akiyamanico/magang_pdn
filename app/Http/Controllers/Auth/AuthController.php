<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
  public function loginpage()
  {
    return view('frontend.auth.login');
  }

  public function login(LoginRequest $r)
  {
    if($r->validated()){
      if(Auth::guard('web')->attempt([
        'email'=> $r->email,
        'password'=> $r->password])){
          return redirect('home')->with('pesan','Logged In');
        }else{
          return back()->with('pesan','Email atau Password Salah!');
        }
    }
  }

  public function logout()
  {
    Auth::logout();
    return redirect('/loginpage');
  }

  public function daftar()
  {
    return view('frontend/auth/registration');
  }

  public function register(RegisterRequest $r)
  {
    if ($r->validated()) {
      User::create([
        'name' => $r->name,
        'email' => $r->email,
        'password' => Hash::make($r->password),
      ]);
      return redirect('/loginpage')->with('pesan', 'Registrasi Berhasil');
    }
  }

}

