<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;


class VendorOrderController extends Controller
{
      // Hiển thị danh sách đơn hàng của vendor đăng nhập
      public function VendorOrder()
      {
          $orders = Order::where('user_id', Auth::id())->where('status', 'pending')->latest()->get();
          return view('vendor.backend.orders.pending_orders', compact('orders'));
      }
  
      // Hiển thị danh sách đơn hàng hoàn trả của vendor đăng nhập
      public function VendorReturnOrder()
      {
          $orders = Order::where('user_id', Auth::id())->where('status', 'return_requested')->latest()->get();
          return view('vendor.backend.orders.return_orders', compact('orders'));
      }
  
      // Hiển thị danh sách đơn hàng hoàn trả đã hoàn tất của vendor đăng nhập
      public function VendorCompleteReturnOrder()
      {
          $orders = Order::where('user_id', Auth::id())->where('status', 'delivered')->latest()->get();
          return view('vendor.backend.orders.complete_return_orders', compact('orders'));
      }
  
      // Hiển thị chi tiết đơn hàng, chỉ cho phép xem nếu là của vendor đó
      public function VendorOrderDetails($order_id)
      {
          $order = Order::where('user_id', Auth::id())->where('id', $order_id)->firstOrFail();
          return view('vendor.backend.orders.vendor_order_details', compact('order'));
      }



}
