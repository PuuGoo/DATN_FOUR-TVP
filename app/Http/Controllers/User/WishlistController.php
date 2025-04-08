<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WishlistController extends Controller
{
    public function AddToWishList(Request $request, $product_id)
    {
               // Kiểm tra người dùng đã đăng nhập chưa

            if (!Auth::check()) {
                return response()->json(['error' => 'Bạn cần đăng nhập để thêm vào Wishlist'], 401);
            }

            // Kiểm tra sản phẩm có tồn tại không
            $product = Product::find($product_id);
            if (!$product) {
                return response()->json(['error' => 'Sản phẩm không tồn tại'], 404);
            }

            // Kiểm tra sản phẩm đã có trong Wishlist chưa
            $wishlistExists = Wishlist::where('user_id', Auth::id())
                ->where('product_id', $product_id)
                ->exists();

            if ($wishlistExists) {
                return response()->json(['message' => 'Sản phẩm đã có trong Wishlist']);
            }

            // Thêm sản phẩm vào Wishlist
            Wishlist::create([
                'user_id' => Auth::id(),
                'product_id' => $product_id,
                'created_at' => Carbon::now(),
            ]);

            return response()->json(['message' => 'Đã thêm sản phẩm vào Wishlist']);

    } // End Method


    public function AllWishlist()
    {

        return view('frontend.wishlist.view_wishlist');
    } // End Method 


    public function GetWishlistProduct()
    {
        $wishlistItems = Wishlist::where('user_id',3)->with('product')->get();

        return response()->json([
            'wishlist' => $wishlistItems
        ]);
    } // End Method


    public function WishlistRemove($id)
    {
        $wishlistItem = Wishlist::where('user_id', Auth::id())->where('product_id', $id)->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            return response()->json(['message' => 'Đã xóa sản phẩm khỏi Wishlist']);
        }

        return response()->json(['error' => 'Sản phẩm không tồn tại trong Wishlist'], 404);
    } // End Method


}
