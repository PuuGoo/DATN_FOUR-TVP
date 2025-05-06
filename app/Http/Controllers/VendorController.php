<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
 
use App\Notifications\VendorRegNotification;
use Illuminate\Support\Facades\Notification;

 
class VendorController extends Controller
{
    public function VendorDashboard(){

        return view('vendor.index');

    } // End Mehtod 

  public function VendorLogin(){
        return view('vendor.vendor_login');
    } // End Mehtod 



public function VendorDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/vendor/login');
    } // End Mehtod 



public function VendorProfile(){

        $id = Auth::user()->id;
        $vendorData = User::find($id);
        return view('vendor.vendor_profile_view',compact('vendorData'));

    } // End Mehtod 


     public function VendorProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address; 
        $data->vendor_join = $request->vendor_join; 
        $data->vendor_short_info = $request->vendor_short_info; 


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/vendor_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/vendor_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Vendor Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Mehtod 



  public function VendorChangePassword(){
        return view('vendor.vendor_change_password');
    } // End Mehtod 



public function VendorUpdatePassword(Request $request){
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



    public function BecomeVendor(){
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
