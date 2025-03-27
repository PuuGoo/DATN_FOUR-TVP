<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function AddToCart(Request $request, $id)
    {

        $product = Product::findOrFail($id);


        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        $cart = Cart::content();
        $rowId = null;

        foreach ($cart as $item) {
            if ($item->id == $id && $item->options->variant_pd == $request->variant_pd) {
                $rowId = $item->rowId;
                break;
            }
        }

        if ($rowId) {
            // Nếu đã có sản phẩm, tăng số lượng
            Cart::update($rowId, $item->qty + 1);
        } else {


        // $data = [
        //     'id' => $id,
        //     'name' => $product->product_name,
        //     'qty' => $request->qty,
        //     'price' => $request->price,
        //     'weight' => 1,
        //     'options' => [
        //         'image' => $product->product_thumnail,
        //         'variant_pd' => $request->variant_pd,
        //     ],
        // ];
        
            Cart::add([
                'id' => $id,
                'name' => $product->product_name,
                'qty' => $request->qty,
                'price' => $request->price,
                'weight' => 1,
                'options' => [
                    'idinfors' => $request->idinfors,
                    'image' => $product->product_thumnail,
                    'variant_pd' => $request->variant_pd,
                ],
            ]);
        }
        return response()->json(['success' => 'Successfully Added on Your Cart' ]);
        

        // return response()->json(array(
        //     'ms' => 'thanh cong',
        //     'status' => 201,
        //     'data' => $data,
        //  ));

    } // End Method


    public function AddToCartDetails(Request $request, $id)
    {
        // 
    } // End Method


    public function AddMiniCart()
    {
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,  
            'cartTotal' => $cartTotal

        ));
        // 
    } // End Method



    public function RemoveMiniCart($rowId){
        Cart::remove($rowId);
        return response()->json(['success' => 'Product Remove From Cart']);

    }// End Method


    public function MyCart()
    {
        return view('frontend.mycart.view_mycart');
    } // End Method


    public function GetCartProduct()
    {

        // 
    } // End Method


    public function CartRemove($rowId)
    {
        // 
    } // End Method


    public function CartDecrement($rowId)
    {

        // 
    } // End Method


    public function CartIncrement($rowId)
    {

        // 
    } // End Method



    public function CouponApply(Request $request)
    {

        // 
    } // End Method


    public function CouponCalculation()
    {

        // 
    } // End Method

    public function CouponRemove()
    {

        // 
    } // End Method


    public function CheckoutCreate()
    {

        return view('frontend.checkout.checkout_view');
        // 
    } // End Method


}
