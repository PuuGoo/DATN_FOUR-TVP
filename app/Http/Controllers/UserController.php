<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function UserDashboard()
    {

        return view('index');
    } // End Method 

    public function UserProfileStore(Request $request)
    {

        // 

    } // End Mehtod 


    public function UserLogout(Request $request)
    {
        // 
    } // End Mehtod 


    public function UserUpdatePassword(Request $request)
    {
        // 
    } // End Mehtod 


}
