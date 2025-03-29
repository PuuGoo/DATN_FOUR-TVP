<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Coupon; //
use Carbon\Carbon; //
use Illuminate\Support\Facades\Session; //
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
        // $cart = session()->get('cart', []);
        $carts = Cart::content();
        // dd($cart); // Kiểm tra dữ liệu giỏ hàng
        return view('frontend.mycart.view_mycart', compact('carts'));
    } // End Method


    public function GetCartProduct()
    {

        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal

        ));
    } // End Method


    public function CartRemove($rowId)
    {
        Cart::remove($rowId);

        if (Session::has('coupon')) {
            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name', $coupon_name)->first();

            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round(Cart::total() * $coupon->coupon_discount / 100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount / 100)
            ]);
        }


        return response()->json(['success' => 'Successfully Remove From Cart']);
    } // End Method


    public function CartDecrement($rowId)
    {

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty - 1);

        if (Session::has('coupon')) {
            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name', $coupon_name)->first();

            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round(Cart::total() * $coupon->coupon_discount / 100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount / 100)
            ]);
        }


        return response()->json('Decrement');
    } // End Method


    public function CartIncrement($rowId)
    {

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty + 1);

        if (Session::has('coupon')) {
            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name', $coupon_name)->first();

            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round(Cart::total() * $coupon->coupon_discount / 100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount / 100)
            ]);
        }

        return response()->json('Increment');
    } // End Method



    public function CouponApply(Request $request){

        $coupon = Coupon::where('coupon_name',$request->coupon_name)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first();

        if ($coupon) {
            Session::put('coupon',[
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100 )
            ]);

            return response()->json(array(
                'validity' => true,
                'success' => 'Coupon Applied Successfully'

            ));


        } else{
            return response()->json(['error' => 'Invalid Coupon']);
        }

    }// End Method


    public function CouponCalculation(){

        if (Session::has('coupon')) {

            return response()->json(array(
             'subtotal' => Cart::total(),
             'coupon_name' => session()->get('coupon')['coupon_name'],
             'coupon_discount' => session()->get('coupon')['coupon_discount'],
             'discount_amount' => session()->get('coupon')['discount_amount'],
             'total_amount' => session()->get('coupon')['total_amount'],
            ));
        }else{
            return response()->json(array(
                'total' => Cart::total(),
            ));
        }
    }// End Method

    public function CouponRemove(){

        Session::forget('coupon');
        return response()->json(['success' => 'Coupon Remove Successfully']);

    }// End Method


    public function CheckoutCreate()
    {
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();
        return view('frontend.checkout.checkout_view', compact('carts', 'cartQty', 'cartTotal'));
        // 
    } // End Method


}
