<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class ReviewController extends Controller
{
    public function PendingReview()
    {

        return view('backend.review.pending_review');
    } // End Method 

    public function ReviewApprove($id)
    {

        // 
    } // End Method 


    public function PublishReview()
    {

        return view('backend.review.publish_review');
    } // End Method 

    public function ReviewDelete($id)
    {

        // 
    } // End Method 


    public function VendorAllReview()
    {
        $vendorId = Auth::id(); // Lấy ID của vendor
        $reviews = Review::where('vendor_id', $vendorId)->with('product', 'user')->latest()->get();
        return view('vendor.backend.review.approve_review', compact('reviews'));
    }



}
