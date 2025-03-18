<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



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
        // 
    } // End Mehtod 




}
