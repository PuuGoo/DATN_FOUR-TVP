<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function AddToCart(Request $request, $id)
    {

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
