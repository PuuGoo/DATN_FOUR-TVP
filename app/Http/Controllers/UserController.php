<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;  // Add this line to import Hash facade

class UserController extends Controller
{
    public function UserDashboard()
    {
        $id = Auth::user()->id;
        $userData = User::find($id);
        $userdetail = Auth::user();
        $categories = Category::all();
        return view('index', compact('categories', 'userdetail', 'userData'));
    } // End Method 

    // Quang thanh update user profile
    public function UserProfileStore(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
    
        // Xử lý file ảnh
        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data->photo = $filename;
        }
    
        $data->save();

        // Thông báo thành công
        $notification = [
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success',
        ];

        // Cập nhật thông tin người dùng
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email, // Có thể bỏ nếu không muốn cho phép thay đổi email
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        // Xử lý upload ảnh
        if ($request->hasFile('photo')) {
            // Xóa ảnh cũ nếu có
            if ($user->photo && file_exists(public_path('upload/user_images/' . $user->photo))) {
                unlink(public_path('upload/user_images/' . $user->photo));
            }

            // Lưu ảnh mới
            $file = $request->file('photo');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $user->photo = $filename;
            $user->save();
        }

        return redirect()->back()->with([
            $notification,
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        ]);
    }

    // Quang thanh logout
    public function UserLogout(Request $request)
    {
        // 
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('login')->with($notification);
    } // End Method 

    public function UserUpdatePassword(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Lấy user hiện tại
        $user = Auth::user();

        // Kiểm tra mật khẩu cũ
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Cập nhật mật khẩu mới
        User::where('id', $user->id)->update([
            'password' => Hash::make($request->new_password)
        ]);


        return back()->with("status", " Password Changed Successfully");
    }
}