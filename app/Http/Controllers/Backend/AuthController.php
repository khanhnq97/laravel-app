<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function index(){
       return view('backend.auth.login');
    }

    public function login(AuthRequest $requset){
        $credentials = [
            'email' => $requset->input('email'),
            'password'=> $requset->input('password'),
        ];
        if(Auth::attempt($credentials)) {
            $requset->session()->regenerate();
            return redirect()->route('dashboard.index')->with('success', 'Đăng nhập thành công');
        } else {
            return redirect()->route('auth.admin')->with('error', 'Email hoặc mật khẩu không chính xác');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.admin');
    }
}
