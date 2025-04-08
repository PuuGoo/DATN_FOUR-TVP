<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


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


        return view('vendor.backend.review.approve_review');
    } // End Method 





}
