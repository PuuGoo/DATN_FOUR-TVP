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
        $categories = Category::all();
        return view('index', compact('categories'));
    } // End Method 

    public function UserProfileStore(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('user_images', 'public');
        } else {
            $imagePath = null;
        }

        $user = Auth::user();

        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($imagePath) {
            $user->photo = $imagePath;
        }

        $user->save();

        return redirect()->route('user.profile.page');
    }

    public function UserLogout(Request $request)
    {
        // 
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    } // End Method 

    public function UserUpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {  // Use Hash facade here
            return back()->withErrors(['old_password' => 'The provided old password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);  // Use Hash facade here
        $user->save();

        return back()->with('success', 'Password updated successfully.');
    }
}