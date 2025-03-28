<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\Seo;
use Intervention\Image\Facades\Image;


class SiteSettingController extends Controller
{
    public function SiteSetting()
    {
        $siteSetting = SiteSetting::create([
            'logo' => 'default_logo.png',
            'support_phone' => '0123456789',
            'phone_one' => '0987654321',
            'email' => 'example@example.com',
            'company_address' => '123 Street Name',
            'facebook' => 'https://facebook.com/example',
            'zalo' => 'https://zalo.me/example',
            'youtube' => 'https://youtube.com/example',
            'copyright' => 'Copyright © 2025',
        ]);
        
        // Hoặc cập nhật dữ liệu
        $siteSetting = SiteSetting::find(1);
        $siteSetting->update([
            'support_phone' => '1111111111',
            'email' => 'new@example.com',
        ]);
        
    
        return view('backend.setting.setting_update', compact('siteSetting'));
    }
    // End Method 

    //////////// Seo Setting /////////////

 public function SeoSetting(){
        return view('backend.seo.seo_update');
    } // End Method 
    public function editSiteSetting()
    {
        $siteSetting = SiteSetting::first(); // Hoặc tìm dữ liệu phù hợp
        return view('backend.setting.setting_edit', compact('siteSetting'));
    }
    public function UpdateSiteSetting(Request $request, $id)
{
    $siteSetting = SiteSetting::find($id);

    if (!$siteSetting) {
        return redirect()->back()->with('error', 'Site Setting not found!');
    }

    // Validate input fields
    $request->validate([
        'support_phone' => 'nullable|string|max:255',
        'phone_one' => 'nullable|string|max:255',
        'email' => 'nullable|email|max:255',
        'company_address' => 'nullable|string|max:255',
        'facebook' => 'nullable|url|max:255',
        'twitter' => 'nullable|url|max:255',
        'youtube' => 'nullable|url|max:255',
        'copyright' => 'nullable|string|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Update site setting fields
    $siteSetting->support_phone = $request->support_phone;
    $siteSetting->phone_one = $request->phone_one;
    $siteSetting->email = $request->email;
    $siteSetting->company_address = $request->company_address;
    $siteSetting->facebook = $request->facebook;
    $siteSetting->twitter = $request->twitter;
    $siteSetting->youtube = $request->youtube;
    $siteSetting->copyright = $request->copyright;

    // Handle logo upload
    if ($request->file('logo')) {
        $logo = $request->file('logo');
        $name_gen = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
        $save_path = 'upload/logo/';
        $logo->move(public_path($save_path), $name_gen);
        $siteSetting->logo = $save_path . $name_gen;
    }

    $siteSetting->save();

    return redirect()->back()->with('success', 'Site Setting updated successfully!');
}

    
}
 