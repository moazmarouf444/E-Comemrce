<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function editShippingMethods($type){
            if($type == 'free')
                $shippingMethod = Setting::where('key','free_shipping_cost')->first();
            elseif($type == 'inner')
                $shippingMethod = Setting::where('key','local_shipping_cost')->first();
            elseif($type == 'outer')
                $shippingMethod = Setting::where('key','outer_shipping_cost')->first();
            else
                $shippingMethod = Setting::where('key','free_shipping_cost')->first();
            return view('admin.settings.shipping.edit',compact('shippingMethod'));
    }

    public function updateShippingMethods(Request $request,$id){

    }
}
