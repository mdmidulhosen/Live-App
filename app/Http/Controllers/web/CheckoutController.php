<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\GuestCart;
use App\Models\Order;
use App\Models\OrderCommission;
use App\Models\OrderDetails;
use App\Models\Shipping;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Upazila;
use Illuminate\Support\Facades\Cookie;


class CheckoutController extends Controller
{


    public function checkoutPage()
    {

        if ( session()->get('user') == NUll)
        {
            return  redirect()->route('Customer.LoginPage', [
                'rdrto' => url()->full()
            ]);
        }else {

            $carts = Cart::with('product')->where('customer_id', session()->get('user')->id)->get();

            $divisions = Division::all();
            $districts = District::all();
            $upazilas = Upazila::all();

            return view('web.pages.Checkout',
                ['carts' => $carts,
                    'divisions' => $divisions,
                    'districts' => $districts,
                    'upazilas' => $upazilas]);
        }

    }

    public function customerPlaceOrder(Request $request)
    {

            $carts = Cart::with('product')->where('customer_id', session()->get('user')->id)->get();


            foreach ($carts as $cart)
            {
                $order = new Order();
                $order->order_number = mt_rand(1000000000, 9999999999);
                $order->subtotal = $cart->product->current_selling_price * $cart->quantity;
                $order->customer_id = session()->get('user')->id;
                $order->vendor_id = $cart->vendor_id;
                $order->save();

                $commission_rate = Vendor::where('id', $order->vendor_id)->first();
                $commissionAmount = $order->subtotal*($commission_rate->commission/100);
                $orderCommission = new OrderCommission();
                $orderCommission->order_id = $order->id;
                $orderCommission->vendor_id = $cart->vendor_id;
                $orderCommission->commission_amount = $commissionAmount;
                $orderCommission->save();

                $orderDetails = new OrderDetails();
                $orderDetails->order_id = $order->id;
                $orderDetails->product_id = $cart->product_id;
                $orderDetails->vendor_id = $cart->vendor_id;
                $orderDetails->quantity = $cart->quantity;
                $orderDetails->unit_price = $cart->product->current_selling_price;
                $orderDetails->subtotal = $cart->product->current_selling_price * $cart->quantity;
                $orderDetails->save();
                $cart->delete($cart->id);

                $shipping = new Shipping();

                $shipping->order_id = $order->id;
                $shipping->name = $request->name;
                $shipping->phone = $request->phone;
                $shipping->email = $request->email;
                $shipping->division = $request->division;
                $shipping->district = $request->district;
                $shipping->zip = $request->zip;
                $shipping->city = $request->city;
                $shipping->address = $request->address;
                $shipping->save();
            }


            return redirect()->route('Home')->with('success', 'Order place successfully');
        }

}
