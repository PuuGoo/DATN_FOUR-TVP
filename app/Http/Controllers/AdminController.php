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
        $inactiveVendors = User::where('role', 'vendor')->where('status', 'inactive')->get();
        return view('backend.vendor.inactive_vendor', compact('inactiveVendors'));
    } // End Method


    public function ActiveVendor()
    {
        $activeVendors = User::where('role', 'vendor')->where('status', 'active')->get();
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
        $admins = User::all();
        return view('backend.admin.all_admin', compact('admins'));
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
    public function AdminProfile($id)
    {
        $adminData = User::findOrFail($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }


    public function AdminProfileStore(Request $request, $id)
    {
        $data = User::findOrFail($id);
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

    // delete

    public function DeleteAdmin(Request $request)
    {
        $admin = User::findOrFail($request->id);

        if (!$admin) {
            return redirect()->back()->with('error', 'Can not find this account');
        }

        // Kiểm tra nếu user có role là SuperAdmin thì không cho xóa
        if ($admin->role === 'superadmin') {
            return redirect()->back()->with('error', 'You cannot delete a SuperAdmin account.');
        }

        $admin->delete();
        return redirect()->route('all.admin')->with('success', 'Delete Successfully!');
    }
    // add user

    public function StoreAdmin(Request $request)
    {
        $request->validate([
            'username' => 'nullable|string|unique:users,username',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:11',
            'address' => 'nullable|string',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,user,vendor'
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('all.admin')->with('success', 'Admin added successfully!');
    }
}