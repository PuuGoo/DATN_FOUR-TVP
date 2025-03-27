<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminDashboard()
    {

        return view('admin.index');
    } // End Mehtod

    public function InactiveVendor()
    {
        $inactiveVendors = User::where('role','vendor')->where('status', 'inactive')->get();
        return view('backend.vendor.inactive_vendor', compact('inactiveVendors'));
    } // End Method


    public function ActiveVendor()
    {
        $activeVendors = User::where('role','vendor')->where('status', 'active')->get();
        return view('backend.vendor.active_vendor', compact('activeVendors'));
    } // End Method

    public function InactiveVendorDetails($id)
    {
        $vendor = User::findOrFail($id);
        return view('backend.vendor.inactive_vendor_details', compact('vendor'));
    } // End Method


    public function ActiveVendorDetails($id)
    {
        $vendor = User::where('role', 'vendor')->findOrFail($id);
        return view('backend.vendor.active_vendor_details', compact('vendor'));
    } // End Method


    public function UpdateVendorStatus($id)
    {

        $vendor = User::where('id', $id)->first();
        $vendor->status = $vendor->status == 'active' ? 'inactive' : 'active';
        $vendor->save();

        $path = $vendor->status == 'Active' ? 'active.vendor' : 'inactive.vendor';
        return redirect()->route($path)->with('success', 'Vendor status updated successfully.');
    } // End Method


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
