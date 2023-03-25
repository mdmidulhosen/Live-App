<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Validator;

class CustomerProfilerController extends Controller
{
    public function updateProfile(Request $request)
    {

        $customer = User::where('id', session()->get('user')->id)->first();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->update();

        return redirect()->back()->with('success', 'Your Profile Updated Successfully');
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->with('error','Your Password can not reset submit correctly');
        }
        User::find(session()->get('user')->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->back()->with('success','Your Password has been reset');

    }
    public function createAddress(Request $request)
    {
        $address = new CustomerAddress();
        $address->customer_id = session()->get('user')->id;
        $address->name = $request->name;
        $address->email = $request->email;
        $address->phone = $request->phone;
        $address->division = $request->division;
        $address->district = $request->district;
        $address->city = $request->city;
        $address->zip = $request->zip;
        $address->address = $request->address;
        $address->save();

        return redirect()->back()->with('success', 'shipping address added successfully');

    }
    public function updateAddress(Request $request, $id)
    {
        $address = CustomerAddress::find($id);
        $address->customer_id = session()->get('user')->id;
        $address->name = $request->name;
        $address->email = $request->email;
        $address->phone = $request->phone;
        $address->division = $request->division;
        $address->district = $request->district;
        $address->city = $request->city;
        $address->zip = $request->zip;
        $address->address = $request->address;
        $address->update();

        return redirect()->back()->with('success', 'shipping address updated successfully');

    }

}
