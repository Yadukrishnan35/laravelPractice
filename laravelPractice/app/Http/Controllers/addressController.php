<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\User;
use Illuminate\Http\Request;

class addressController extends Controller
{
    public function createAddress($user_id) {
        
        // $input=$request->all();
        // address::create($input);
        $user=User::find($user_id);
        return view('users.addAddress',compact('user'));
        
       

    }

    public function saveAddress() {
        $user_id = request('user_id');
        $address = request('address');
        $city = request('city');
        $postcode = request('postcode');
        $state = request('state');
        $user = address::create([
            'user_id'=>$user_id,
            'address_line1'=>$address,
            'city'=>$city,
            'post_code'=>$postcode,
            'state'=>$state
        ]);

        
        
        return redirect()->route('users.userFullDetail');


    }
}

