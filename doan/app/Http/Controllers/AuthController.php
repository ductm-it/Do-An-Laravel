<?php

namespace App\Http\Controllers;
// use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;


class AuthController extends Controller
{
    public function logout()
    {
        // dd("sxxx");
        Auth::logout();
        return redirect('/admin');
    }
    public function logout2()
    {
        // dd("sxxx");
        Auth::logout();
        return redirect('/');
    }
    use AuthenticatesUsers;

    public  function login(Request $request)
    {

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials) && Auth::check()) {

            $userInfo = Auth::user();
            $userRole = $userInfo->role;

            if ($userRole == 'admin') {
                return redirect()->intended('admin');
            }else{
                Auth::logout();
                return view('adminpage.loginadmin')->with('successMsg', 'tk ko co quyen truy cap admin ');
            }
        } else {
            // return redirect()->intended('admin/login');
            // return redirect()->to('/admin/login')->with(['msg' =>'Đăng nhập bị lỗi']);
            return view('adminpage.loginadmin')->with('successMsg', 'Invalid username or password');
        }
    }
}
