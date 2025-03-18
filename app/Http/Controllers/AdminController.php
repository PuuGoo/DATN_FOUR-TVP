<?php

namespace App\Http\Controllers;



class AdminController extends Controller
{
    public function AdminDashboard()
    {

        return view('admin.index');
    } // End Mehtod

    public function InactiveVendor()
    {

        return view('backend.vendor.inactive_vendor');
    } // End Method


    public function ActiveVendor()
    {

        return view('backend.vendor.active_vendor');
    } // End Method

    public function InactiveVendorDetails($id)
    {

        return view('backend.vendor.inactive_vendor_details');
    } // End Method


    public function ActiveVendorDetails($id)
    {

        return view('backend.vendor.active_vendor_details');
    } // End Method


    public function UpdateVendorStatus($id)
    {
        // 
    }


    public function AllAdmin()
    {
        return view('backend.admin.all_admin');
    } // End Method


    public function AddAdmin()
    {
        return view('backend.admin.add_admin');
    } // End Method

    public function AdminLogin()
    {
        return view('admin.admin_login');
    } // End Mehtod 
}
