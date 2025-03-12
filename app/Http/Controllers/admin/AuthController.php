<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Fromlogin(){
        return view('admin.auth.login');
    }
    public function login(Request $request){

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->intended('admin/product');
        }else{
            return redirect('login');
        }
    }
    public function fromregister(){
        return view('admin.auth.register');
    }
    public function register(Request $request){
//    dd($request);
        $params = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'bạn chưa nhập tên người dùng',
            'email.required' => 'bạn chưa nhập email',
            'email.email'=>'dữ liệu bắt buộc phải nhập là email',
            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'số lượng mật khẩu phải lớn hơn 6 ký tự'
        ]);
//        $params = $request->all();

        User::create($params);

        return redirect('login');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
