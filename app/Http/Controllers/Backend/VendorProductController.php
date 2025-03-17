<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VendorProductController extends Controller
{
    public function VendorAllProduct()
    {
        return view('vendor.backend.product.vendor_product_all');
    } // End Method 

    public function VendorAddProduct()
    {

        return view('vendor.backend.product.vendor_product_add');
    } // End Method 



    public function VendorStoreProduct(Request $request)
    {


        // 
    } // End Method 

    public function VendorEditProduct($id)
    {

        return view('vendor.backend.product.vendor_product_edit');
    } // End Method 



    public function VendorUpdateProduct(Request $request)
    {
        // 
    } // End Method 


    public function VendorUpdateProductThabnail(Request $request)
    {

        // 
    } // End Method 


    //Vendor Multi Image Update 
    public function VendorUpdateProductmultiImage(Request $request)
    {

        // 
    } // End Method 


    public function VendorMultiimgDelete($id)
    {
        // 
    } // End Method 


    public function VendorProductInactive($id)
    {

        // 
    } // End Method 


    public function VendorProductActive($id)
    {

        // 
    } // End Method 


    public function VendorProductDelete($id)
    {
        // 
    } // End Method 


}
