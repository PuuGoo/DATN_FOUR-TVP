<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function VendorDashboard()
    {

        return view('vendor.index');
    } // End Mehtod 

    public function VendorLogin()
    {
        return view('vendor.vendor_login');
    } // End Mehtod 



    public function VendorDestroy(Request $request)
    {
        // 
    } // End Mehtod 



    public function VendorProfile()
    {

        return view('vendor.vendor_profile_view');
    } // End Mehtod 


    public function VendorProfileStore(Request $request)
    {

        // 
    } // End Mehtod 



    public function VendorChangePassword()
    {
        return view('vendor.vendor_change_password');
    } // End Mehtod 



    public function VendorUpdatePassword(Request $request)
    {
        // 
    } // End Mehtod 



    public function BecomeVendor()
    {
        return view('auth.become_vendor');
    } // End Mehtod 


    public function VendorRegister(Request $request)
    {
        $user = new User();
        // 
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ], [
            'name.required' => 'Vui lòng chọn thương hiệu.',
            'email.required' => 'Vui lòng chọn danh mục.',
            'password.required' => 'Tên sản phẩm không được để trống.',
            'password_confirmation.required' => 'Mã sản phẩm không được để trống.',
            'password_confirmation.same' => 'confirm password không giống với password.',
        ]);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->vendor_join = $request->vendor_join;
        $user->password = Hash::make($request->password);
        $user->role = 'vendor';
        $user->status = 'inactive';

        $user->save();


        $notification = array(
            'message' => 'Vendor Registered Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('vendor.login')->with($notification);
    } // End Mehtod 




}
