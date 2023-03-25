<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Request;


class ProductController extends Controller
{
    public function productSingleView($slug)
    {
        $product = Product::with('categories', 'images','vendor')->where('slug',$slug)->first();

//        $productImages = ProductImage::where('id', $product->id)->get();

        return view('web.pages.productSingle',['product' => $product]);
    }


    public function  categoryProductsView($id, $slug)
    {

        $category = Category::where('slug', $slug)->first();

        if(Request::get('sort') == 'price_asc')
        {
            $products = ProductCategory::with('product')
                ->join('products', 'product_categories.product_id' ,'=', 'products.id')
                ->orderBy('products.current_selling_price', 'asc')
                ->where('category_id', $id)
                ->get();
        }elseif (Request::get('sort') == 'price_desc')
        {
            $products = ProductCategory::with('product')
                ->join('products', 'product_categories.product_id' ,'=', 'products.id')
                ->orderBy('products.current_selling_price', 'desc')
                ->where('category_id', $id)
                ->get();
        }elseif (Request::get('sort') == 'latest')
        {
            $products = ProductCategory::with('product')
                ->join('products', 'product_categories.product_id' ,'=', 'products.id')
                ->orderBy('products.created_at', 'desc')
                ->where('category_id', $id)
                ->get();
        }
        else{
            $products = ProductCategory::with('category','product')->where('category_id', $id)->get();
        }

        return view('web.pages.CategoryWiseProduct', ['products' => $products, 'category' => $category]);
    }

}
