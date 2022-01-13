<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile(){
        $admin = Admin::find(auth('admin')->user()->id);
        return view('admin.profile.edit',compact('admin'));
    }

    public function updateProfile(ProfileRequest $request){
        try{
            if($request->filled('password')){
                 $request->merge(['password' => bcrypt($request->password)]);
            }
          $admin =  Admin::find(auth('admin')->user()->id);
            unset($request['id']);
            unset($request['password_confirmation']);
          $admin->update($request->all());
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        }catch (\Exception $ex){
            return redirect()->back()->with(['error' => 'هناك خطا ما ']);
        }

    }
}
