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
        
        Cart::add([

            'id' => $id,
            'name' => $request->product_name,
            'qty' => $request->quantity,
            'price' => $product->discount_price == NULL ? $product->selling_price : $product->discount_price,
            'weight' => 1,
            'options' => [
                'image' => $product->product_thambnail,
                'vendor' => $request->vendor,
                'variant_value' => $request->variant_value,
                'variant_price' => $request->variant_price,

            ],
        ]);
        return response()->json(['success' => 'Successfully Added on Your Cart' ]);
        // 

    } // End Method


    public function AddToCartDetails(Request $request, $id)
    {
        // 
    } // End Method


    public function AddMiniCart()
    {

        // 
    } // End Method



    public function RemoveMiniCart($rowId)
    {
        // 
    } // End Method


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

        // 
    } // End Method


}
