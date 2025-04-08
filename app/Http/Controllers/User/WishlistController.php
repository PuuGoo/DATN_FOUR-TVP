<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WishlistController extends Controller
{
    public function AddToWishList(Request $request, $product_id)
    {

        //    

    } // End Method 


    public function AllWishlist()
    {

        return view('frontend.wishlist.view_wishlist');
    } // End Method 


    public function GetWishlistProduct()
    {

        // 

    } // End Method


    public function WishlistRemove($id)
    {
        // 
    } // End Method


}
