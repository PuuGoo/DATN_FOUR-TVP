<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\multi_imgs;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{

   public function Index()
   {
      $categories = Category::all();
      $banners = Banner::all();
      $products = Product::inRandomOrder()->limit(10)->get();
      return view('frontend.index', compact('categories', 'banners', 'products'));
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
      // print_r($arrvalue);
      // echo "</pre>";
      // echo "<pre>";
      // print_r($arrvalue);
      // echo "</pre>";

      // Tìm sản phẩm theo ID và Slug
      $product = Product::where('id', $id)->first();

      if (!$product) {
          abort(404); // Nếu không tìm thấy sản phẩm, trả về lỗi 404
      }

      return view('frontend.product.product_details', compact('arrvalue', 'product'));
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
      $product = DB::table('products')->where('id', $id)->first();


      
      return response()->json(array(
         'ms' => 'thanh cong',
         'status' => 200,
         'data' => [$product, 'variants' => $option_variant],
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
      $sortOrder = $request->input('sort', 'asc'); // Sắp xếp mặc định tăng dần
      $selectedLimit = $request->input('limit', 15); // Lấy giới hạn từ request
      $page = (int) $request->input('page', 1); // Lấy số trang hiện tại

      // Nếu "All" được chọn, ta đặt limit rất lớn để lấy hết sản phẩm nhưng vẫn phân trang
      if ($selectedLimit === 'all') {
         $selectedLimit = PHP_INT_MAX; // Lấy toàn bộ sản phẩm nhưng vẫn chia trang
      } else {
         $selectedLimit = (int) $selectedLimit; // Ép kiểu về số nguyên
         if ($selectedLimit <= 0) {
            $selectedLimit = 15; // Mặc định là 15
         }
      }

      // Lấy danh sách danh mục và tên danh mục hiện tại
      $categories = Category::all();
      $category_name = Category::where('id', $id)->value('category_name');

      // Lấy danh sách sản phẩm theo danh mục
      $query = Product::where('category_id', $id);

      // Kiểm tra và áp dụng sắp xếp theo giá
      if (in_array($sortOrder, ['asc', 'desc'])) {
         $query->orderByRaw("CAST(IFNULL(discount_price, 0) AS UNSIGNED) $sortOrder");
      }

      // Tổng số sản phẩm trong danh mục
      $product_category_number = $query->count();

      // Tránh lỗi nếu không có sản phẩm
      if ($product_category_number == 0) {
         return view('frontend.product.category_view', compact(
            'categories',
            'category_name',
            'product_category_number'
         ));
      }

      // Nếu giới hạn là 1, thì chỉ hiển thị đúng 1 sản phẩm và không hiện trang khác
      if ($selectedLimit == 1) {
         $product_category = $query->paginate(1)->appends(['sort' => $sortOrder, 'limit' => $selectedLimit]);
         $total_pages = 1; // Chỉ có 1 trang duy nhất
      } else {
         $limit = 15; // Luôn hiển thị 15 sản phẩm mỗi trang
         $product_category = $query->paginate($limit)->appends(['sort' => $sortOrder, 'limit' => $selectedLimit]);
         $total_pages = $product_category->lastPage();
      }

      return view('frontend.product.category_view', compact(
         'categories',
         'product_category',
         'category_name',
         'product_category_number',
         'total_pages'
      ));
   }



   public function ProductViewAjax($id)
   {
      $product = Product::with('category','brand')->findOrFail($id);
      $multi_images = multi_imgs::where('id', $id)->get();
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
      $arrvalue = [];
      for ($i=0; $i < count($variants_value); $i++) { 
         # code...
         $a[] = explode(', ', $variants_value[$i]->variant_value);
         $arrvalue[] = [$variants_value[$i]->variant_name, array_values(array_unique($a[$i]))];
      }

        return response()->json(array( 
         'ms' => 'thanh cong',
         'status' => 200,
         'data' => ['product' => $product, 'multi_images' => $multi_images, 'option_variant' => $option_variant, 'showvariant' => $arrvalue]
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
