@extends('web.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/demo1.min.css')}}">
@endsection

@section('header')
    @include('web.includes.homeHeader')
@endsection

@section('content')

    <main class="main">
        <!-- Banner start -->

    @include('web.includes.banner')

    <!-- End of Banner  -->

        <div class="container">
            <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6" data-swiper-options="{
                        'slidesPerView': 1,
                        'loop': false,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 3
                            },
                            '1200': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                    <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                                <span class="icon-box-icon icon-shipping">
                                    <i class="w-icon-truck"></i>
                                </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                            <p class="text-default">For all orders over ৳15000 </p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                                <span class="icon-box-icon icon-payment">
                                    <i class="w-icon-bag"></i>
                                </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                            <p class="text-default">We ensure secure payment</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                                <span class="icon-box-icon icon-money">
                                    <i class="w-icon-money"></i>
                                </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                            <p class="text-default">Any back within 30 days</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                                <span class="icon-box-icon icon-chat">
                                    <i class="w-icon-chat"></i>
                                </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                            <p class="text-default">Call or email us 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Iocn Box Wrapper -->


            <!-- End of Deals Wrapper -->
        </div>

            <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
                <div class="container pb-2">
                    <h2 class="title justify-content-center pt-1 ls-normal mb-5">Top Categories Of The Month</h2>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme pg-show" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '768': {
                                            'slidesPerView': 5
                                        },
                                        '992': {
                                            'slidesPerView': 6
                                        }
                                    }
                                }">
                            <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                                @foreach($categories as $category)
                                <div
                                    class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                                    <a href="" class="category-media">
                                        <img src="{{asset('uploads/images/category/'.$category->image)}}" alt="Category"
                                             width="130" height="130" >
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">{{$category->title}}</h4>
                                        <a href="{{route('Category.ProductView', ['id'=>$category->id, 'slug'=>$category->slug])}}"
                                           class="btn btn-primary btn-link btn-underline">Shop
                                            Now</a>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </section>
    <!-- End of .category-section top-category -->

        <div class="container">

            <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                <div class="col-md-6 mb-4">
                    <div class="banner banner-fixed category-banner-1 br-xs">
                        <figure>
                            <img src="{{asset('front-end/assets/images/demos/demo1/categories/model2.jpg')}}" alt="Category Banner"
                                 width="610" height="200" style="background-color: #3B4B48;" />
                        </figure>
                        <div class="banner-content y-50 pt-1">
                            <h5 class="banner-subtitle font-weight-bold text-uppercase"></h5>
                            <h3 class="banner-title font-weight-bolder text-capitalize text-white"><br></h3>
                            <!-- <a href="shop-banner-sidebar.html"
                                class="btn btn-white btn-link btn-underline btn-icon-right">Shop Now<i
                                    class="w-icon-long-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="banner banner-fixed category-banner-2 br-xs">
                        <figure>
                            <img src="{{asset('front-end/assets/images/demos/demo1/categories/paharibg.jpeg')}}" alt="Category Banner"
                                 width="610" height="200" style="background-color: #E5E5E5;" />
                        </figure>
                        <div class="banner-content y-50 pt-1">
                            <h5 class="banner-subtitle font-weight-bold text-uppercase"></h5>
                            <h3 class="banner-title font-weight-bolder text-capitalize"><br></h3>
                            <!-- <a href="shop-banner-sidebar.html"
                                class="btn btn-dark btn-link btn-underline btn-icon-right">Shop Now<i
                                    class="w-icon-long-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Category Cosmetic Lifestyle -->


            @foreach($homeBlocks as $row)
                <div class="container">
                    <div class="product-wrapper-1 appear-animate mb-5">
                        <div class="title-link-wrapper pb-1 mb-4">
                            <h2 class="title ls-normal mb-0">{{$row->title}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-4 mb-4">
                                <div class="banner h-100 br-sm" style="background-image: url({{asset('uploads/images/section/'.$row->image)}});
                                    background-color: #ebeced;">
                                    <div class="banner-content content-top">
                                        <hr class="banner-divider bg-dark mb-2">
                                        <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                            New Arrivals<br> <span
                                                class="font-weight-normal text-capitalize">Collection</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Banner -->
                            <div class="col-lg-9 col-sm-8">
                                <div class="row ">
                                    @foreach($row->items as $item)
                                        <div class="product-col col-lg-3 col-sm-4 mb-4 mobile-view-product-width">
                                            <div class="product-wrap product text-center">
                                                <figure class="product-media">
                                                    <div class="discount-tag">
                                                        <span>-70%</span>
                                                    </div>
                                                    <a href="{{route('productSingleView', $item->product->slug)}}">
                                                        <img src="{{asset('uploads/images/products/'.$item->product->fImage->image)}}" alt="Product"
                                                             width="216" height="243" />
                                                    </a>
                                                </figure>
                                                <div class="product-action-vertical">
                                                    {{--                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"--}}
                                                    {{--                                                   title="Add to cart"></a>--}}
                                                    <a href="#" class="btn-product-icon  w-icon-heart addwishlist"
                                                       title="Add to wishlist" data-id="{{$item->product->id}}"></a>
                                                </div>

                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="{{route('productSingleView', $item->product->slug)}}">{{$item->product->title}}</a>
                                                    </h4>

                                                    <div class="product-price">
                                                        <ins class="new-price">{{$item->product->current_selling_price/100}}</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <!-- End of Product Wrapper 1 -->
            <!-- End of Product Wrapper 1 -->

        <div class="container">
            <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url('{{asset('front-end/assets/images/demos/demo1/sliders/onSale.jpg')}}');background-position: center center;
                background-repeat: no-repeat;
                background-color: #383839;">
                <div class="banner-content align-items-center">
                    <div class="content-left d-flex align-items-center mb-3">
                        <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">

                            <sup class="font-weight-bold"></sup><sub class="font-weight-bold ls-25"></sub>
                        </div>
                        <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
                    </div>
                    <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                        <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                            <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25"></h3>
                            <p class="text-white mb-0">
                                    <span
                                        class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">
                                        <strong></strong></span></p>
                        </div>
                        <!-- <a href="shop-banner-sidebar.html"
                            class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Shop Now<i
                                class="w-icon-long-arrow-right"></i></a> -->
                    </div>
                </div>
            </div>
        </div>

            <!-- End of Banner Fashion -->
    </main>
@endsection
