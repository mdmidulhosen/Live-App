<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderIndexPage()
    {
        $orders = Order::with('shipping', 'orderDetails')->paginate(10);

        return view('admin.pages.order.pages.IndexOrder', ['orders' => $orders]);
    }

    public function orderView($id)
    {
        $orders = Order::with('shipping','customers')->where('id', $id)->get();

        $orderDetails = OrderDetails::with('products')->where('order_id',$id)->get();

        return view('admin.pages.order.pages.ViewOrder', ['orders' => $orders, 'orderDetails' => $orderDetails]);


    }

    public function orderStatus(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->update();
        return redirect()->back()->with('success', 'Successfully Changed Status');
    }

}
