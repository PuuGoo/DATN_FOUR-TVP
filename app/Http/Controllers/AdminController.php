<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        $path = $vendor->status == 'active' ? 'active.vendor' : 'inactive.vendor';
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

    
    public function AdminDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } // End Mehtod 

    public function AdminProfile()
    {

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    } // End Mehtod 

    public function AdminProfileStore(Request $request)
    {

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Mehtod 

    public function AdminChangePassword()
    {
        return view('admin.admin_change_password');
    } // End Mehtod 

    public function AdminUpdatePassword(Request $request)
    {
        // Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return back()->with("status", " Password Changed Successfully");
    } // End Mehtod 
}
