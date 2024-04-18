<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudUserController extends Controller
{
    // Home
    public function home()
    {
        return view('crud.home');
    }
    
    // Login
    public function login()
    {
        return view('crud.login');
    }
    public function authUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('list')
                ->withSuccess('Đăng nhập thành công');
        }

        return redirect("login")->withSuccess('Đăng nhập không thành công');
    }
}
