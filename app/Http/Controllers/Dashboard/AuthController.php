<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function postLogin(LoginRequest $request){
        $remember_me = $request->has('remember_me') ? 'true' : 'false';
        if(auth()->guard('admin')->attempt(['email' => $request->input('email') ,'password'=> $request->input('password')],$remember_me)){
            return redirect()->route('admin.dashboard.index');
        }
        return redirect()->back()->with(['error' => 'هناك خطا في البيانات']);
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('admin.logout');
    }

}
