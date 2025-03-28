<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Compare;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;




class CompareController extends Controller
{
    public function AddToCompare(Request $request, $product_id)
    {
        $user_id = Auth::id();
        $exists = Compare::where('user_id', $user_id)->where('product_id', $product_id)->exists();


        if (!$exists) {
            Compare::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
            ]);
        }
        //return view('frontend.compare.view_compare', compact('products'));
        return response()->json([
            'message' => 'Sản phẩm đã được thêm vào danh sách so sánh!'
        ]);
        // 
    } // End Method 


    public function AllCompare()
    {
        $compareItems = Compare::with('product')->where('user_id', Auth::id())->get();
        return view('frontend.compare.view_compare', compact('compareItems'));
    } // End Method 

    //lấy danh sách sản phẩm so sánh
    public function GetCompareProduct()
    {
        $compare = Compare::with('product')->where('user_id', Auth::id())->latest()->get();
        // dd($compare); 
        return response()->json($compare);
        // 
    } // End Method

    public function CompareRemove($id)
    {
        $compare = Compare::where('user_id', Auth::id())->where('id', $id)->first();
    
        if ($compare) {
            $compare->delete();
            return redirect()->back()->with('success', 'Product removed from comparison.');
        }
    
        return redirect()->back()->with('error', 'Product not found.');
    }
    


}
