<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class IndexController extends Controller
{

   public function Index()
   {
      return view('frontend.index');
   } // End Method 


   public function ProductDetails($id, $slug)
   {


      return view('frontend.product.product_details');
   } // End Method 


   public function VendorDetails($id)
   {

      return view('frontend.vendor.vendor_details');
   } // End Method 


   public function VendorAll()
   {

      return view('frontend.vendor.vendor_all');
   } // End Method 


   public function CatWiseProduct(Request $request, $id, $slug)
   {
      return view('frontend.product.category_view');
   } // End Method 



   public function ProductViewAjax($id)
   {
      //
   } // End Method 


   public function ProductSearch(Request $request)
   {
      return view('frontend.product.search');
   } // End Method 


   public function SearchProduct(Request $request)
   {
      return view('frontend.product.search_product');
   } // End Method 


}
