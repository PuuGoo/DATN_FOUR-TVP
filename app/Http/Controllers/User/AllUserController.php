<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AllUserController extends Controller
{
    public function UserAccount()
    {
        $userDetail = Auth::user();
        return view('frontend.userdashboard.account_details', compact('userDetail'));
    } // End Method 


    public function UserChangePassword()
    {
        return view('frontend.userdashboard.user_change_password');
    } // End Method 


    public function UserOrderPage()
    {

        return view('frontend.userdashboard.user_order_page');
    } // End Method 


    public function UserOrderDetails($order_id)
    {



        return view('frontend.order.order_details');
    } // End Method 


    public function UserOrderInvoice($order_id)
    {
        // 

    } // End Method 



    public function ReturnOrder(Request $request, $order_id)
    {

        // 

    } // End Method 


    public function ReturnOrderPage()
    {

        return view('frontend.order.return_order_view');
    } // End Method 


    public function UserTrackOrder()
    {
        return view('frontend.userdashboard.user_track_order');
    } // End Method 

    public function OrderTracking(Request $request)
    {

        $invoice = $request->code;

        $track = Order::where('invoice_no',$invoice)->first();

        if ($track) {
           return view('frontend.traking.track_order',compact('track'));

        } else{

            $notification = array(
            'message' => 'Invoice Code Is Invalid',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification); 

        }

    } // End Method 

}
