<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


class VendorOrderController extends Controller
{
    public function VendorOrder()
    {


        return view('vendor.backend.orders.pending_orders');
    } // End Method 


    public function VendorReturnOrder()
    {


        return view('vendor.backend.orders.return_orders');
    } // End Method 

    public function VendorCompleteReturnOrder()
    {

        return view('vendor.backend.orders.complete_return_orders');
    } // End Method 

    public function VendorOrderDetails($order_id)
    {


        return view('vendor.backend.orders.vendor_order_details');
    } // End Method 



}
