<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{

    public function dashboardPage()
    {
        $vendor = Vendor::where('owner_id', session()->get('user')->id)->first();
        $vendorId = $vendor->id;

        $todayOrder = Order::where('vendor_id', $vendorId)->whereDate('created_at', Carbon::today())->count();
        $currentMonthOrders = Order::where('vendor_id', $vendorId)->whereMonth('created_at', Carbon::now()->month)->count();

        $totalOrderDeliver = Order::where('vendor_id', $vendorId)->where('delivery_status', 'Delivered')->count();
        $totalPendingOrder = Order::where('vendor_id', $vendorId)->where('status', 'Pending')->count();

        $latestOrder = Order::where('vendor_id', $vendorId)->latest()->take(3)->get();

        return view('vendor.pages.dashboard.Dashboard', [
            'todayOrder' => $todayOrder,
            'currentMonthOrders' => $currentMonthOrders,
            'totalOrderDeliver'  => $totalOrderDeliver,
            'totalPendingOrder'  => $totalPendingOrder,
            'latestOrder'        => $latestOrder,
        ]);
    }
}
