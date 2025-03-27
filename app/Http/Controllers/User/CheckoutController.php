<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\OderItem;
use App\Models\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
class CheckoutController extends Controller
{




    public function CheckoutStore(Request $request)
    {

        $order = new Order();

        $order->user_id = Auth::id();
        // $order->coupon_id = 1;
        $order->name = 'vinh';
        $order->email = 'v@gmail.com';
        $order->phone = 02151551;
        // $order->address = 1;
        // $order->notes = 1;
        // $order->payment_method = 1;
        // $order->transaction_id = 1;
        $order->amount = Cart::count();
        // $order->discount_amount = 1;
        $order->order_number = (int) Str::random(10);
        $order->invoice_no = Str::random(30);
        $order->date = Carbon::now()->toDateString();

        $order->save();

        $order_id = $order->id;

        

        


        // echo $order_id;

        $carts = Cart::content();


        foreach ($carts as $i) {
            $order_item = new OderItem();

            $order_item->order_id = $order_id;
            $order_item->infor_option_id = $i->options->idinfors;
            $order_item->product_id = $i->id;
            $order_item->qty = $i->qty;
            $order_item->price = $i->price;
            $order_item->save();

            echo "id thông tin variant: " . $i->options->idinfors . "<br>";
        }

        // echo '<pre>';
        // print_r($carts);
        // echo '</pre>';

        // echo  Auth::id();
        // // $totalamout = 0;
        // echo "sl sản phẩm: ". Cart::count() . "<br>";

        // foreach ($carts as $i) {
        //     echo "Tên sản phẩm: " . $i->name . "<br>";
        // }
        return redirect()->route('return.order.page');
        

    }
}
