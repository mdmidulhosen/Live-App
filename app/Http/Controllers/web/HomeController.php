<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\HomeBlock;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\Vendor;
use App\Services\Helpers\Converter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use Converter;
    public function HomePage(){

        $categories = Category::get();
        $homeBlocks = HomeBlock::with('items')->get();
        $customList = [];

        return view('web.pages.Home', [
            'homeBlocks' => $homeBlocks,
            'categories' => $categories
        ]);
    }

    public function vendorList()
    {
        $vendors = Vendor::where('status', 'Approved')->paginate(6);
        return view('web.pages.VendorList', ['vendors' => $vendors]);
    }

    public function vendorDetails($url)
    {
        $vendor = Vendor::where('shop_url', $url)->first();
        $products = Product::with('vendor')->where('vendor_id', $vendor->id)->
            where('status', 'Approved')->where('existence', 'Active')->paginate(6);
        return view('web.pages.VendorDetails', ['vendor' => $vendor, 'products' => $products]);
    }

    public function privacyPolicyPage()
    {
        return view('web.pages.PrivacyPolicy');
    }

    public function termsAndConditionPage()
    {
        return view('web.pages.TermsConditions');
    }

    public function aboutUsPage()
    {
        return view('web.pages.AboutUs');
    }

    public function mobileError()
    {
        return view('admin.MobileError');
    }
}
