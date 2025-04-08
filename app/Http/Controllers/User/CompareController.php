<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CompareController extends Controller
{
    public function AddToCompare(Request $request, $product_id)
    {

        // 
    } // End Method 


    public function AllCompare()
    {
        return view('frontend.compare.view_compare');
    } // End Method 


    public function GetCompareProduct()
    {

        // 
    } // End Method

    public function CompareRemove($id)
    {

        // 
    } // End Method

}
