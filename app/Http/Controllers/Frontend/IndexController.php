<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\multi_imgs;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{

   public function Index()
   {
      return view('frontend.index');
   } // End Method 


   public function ProductDetails($id, $slug)
   {

      $checkvariant = DB::table('infor_option')->where('idproduct', $id)->get();
      $arrvalue = [];

      if(!empty($checkvariant)){
         $variants_value = DB::table('variant_name')
               ->select(
                  'variant_name.name as variant_name',
                  'infor_option.idproduct',
                  DB::raw('GROUP_CONCAT(variant_attribute.value SEPARATOR ", ") as variant_value'),
               )
               ->join('variant_attribute', 'variant_name.id', '=', 'variant_attribute.idvariantname')
               ->join('variant_option', 'variant_attribute.id', '=', 'variant_option.varant_attribute_id')
               ->join('infor_option', 'variant_option.infor_option_id', '=', 'infor_option.id')
               ->where('infor_option.idproduct', $id) // Lọc theo sản phẩm
               ->groupBy('variant_name.name', 'infor_option.idproduct')
               ->orderByDesc('variant_name.name') // Sắp xếp giảm dần theo tên biến thể
               ->get();

         $a = [];
         for ($i=0; $i < count($variants_value); $i++) { 
            # code...
            $a[] = explode(', ', $variants_value[$i]->variant_value);
            $arrvalue[] = [$variants_value[$i]->variant_name, array_values(array_unique($a[$i]))];
         }
      }


      // echo "<pre>";
      // print_r($option_variant);
      // echo "</pre>";
      // echo "<pre>";
      // print_r($arrvalue);
      // echo "</pre>";


      return view('frontend.product.product_details', compact('arrvalue'));
   } // End Method 


   public function jsonvariantproduct($id){
      $option_variant = DB::table('variant_name')
      ->select(
          'infor_option.id as id_infor',
          'infor_option.idproduct',
          DB::raw('
              GROUP_CONCAT(
                  CONCAT(variant_name.name, " ")
                  ORDER BY variant_name.name DESC 
                  SEPARATOR ", "
              ) as variant_name
          '),
          DB::raw('
              GROUP_CONCAT(
                  CONCAT(variant_attribute.value)
                  ORDER BY variant_name.name DESC 
                  SEPARATOR ", "
              ) as variant_value
          '),
          'infor_option.price',
          'infor_option.quantity',
      )
      ->join('variant_attribute', 'variant_name.id', '=', 'variant_attribute.idvariantname')
      ->join('variant_option', 'variant_attribute.id', '=', 'variant_option.varant_attribute_id')
      ->join('infor_option', 'variant_option.infor_option_id', '=', 'infor_option.id')
      ->where('infor_option.idproduct', $id) // Lọc theo sản phẩm cụ thể
      ->groupBy('infor_option.id', 'infor_option.idproduct', 'infor_option.code', 'infor_option.price', 'infor_option.quantity')
      ->orderBy('infor_option.id') // Đảm bảo thứ tự sản phẩm
      ->get();

      return response()->json(array(
         'ms' => 'thanh cong',
         'status' => 200,
         'data' => $option_variant,
      ));
   }


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

      $product = Product::with('category','brand')->findOrFail($id);
      $multi_images = multi_imgs::where('id', $id)->get();
      $option_variant = DB::table('infor_option')
                ->select(
                    'infor_option.id as id_infor',
                    DB::raw("GROUP_CONCAT(variant_name.name, ': ', variant_attribute.value SEPARATOR ', ') as name_value"),
                    'infor_option.price as price',
                    'infor_option.quantity as quantity'
                )
                ->join('products', 'infor_option.idproduct', '=', 'products.id')
                ->join('variant_option', 'infor_option.id', '=', 'variant_option.infor_option_id')
                ->join('variant_attribute', 'variant_option.varant_attribute_id', '=', 'variant_attribute.id')
                ->join('variant_name', 'variant_attribute.idvariantname', '=', 'variant_name.id')
                ->where('products.id', $id)
                ->groupBy('infor_option.id')
                ->get();

        return response()->json(array( 
         'product' => $product,
         'multi_images' => $multi_images,
         'option_variant' => $option_variant,

      ));
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
