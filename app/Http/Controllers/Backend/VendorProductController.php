<?php

namespace App\Http\Controllers\Backend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorProductController extends Controller
{
    public function VendorAllProduct()
{
    $products = Product::latest()->get(); // Lấy sản phẩm mới nhất
    dd($products); // Kiểm tra dữ liệu trước khi hiển thị
    return view('vendor.backend.product.vendor_product_all', compact('products'));
}


    public function VendorAddProduct()
    {
        return view('vendor.backend.product.vendor_product_add');
    }

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
