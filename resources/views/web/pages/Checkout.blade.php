@extends('web.layouts.master')

@section('header')
    @include('web.includes.pageHeader')
@endsection


@section('content')
    <main class="main checkout">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="passed"><a href="">Shopping Cart</a></li>
                    <li class="active"><a href="">Checkout</a></li>
                    <li><a href="">Order Complete</a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->


        <!-- Start of PageContent -->
        <div class="page-content">
            <div class="container">
{{--                <div class="login-toggle">--}}
{{--                    Returning customer? <a href="#"--}}
{{--                                           class="show-login font-weight-bold text-uppercase text-dark">Login</a>--}}
{{--                </div>--}}
{{--                <form class="login-content">--}}
{{--                    <p>If you have shopped with us before, please enter your details below.--}}
{{--                        If you are a new customer, please proceed to the Billing section.</p>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xs-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Username or email *</label>--}}
{{--                                <input type="text" class="form-control form-control-md" name="name"--}}
{{--                                       required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Password *</label>--}}
{{--                                <input type="text" class="form-control form-control-md" name="password"--}}
{{--                                       required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group checkbox">--}}
{{--                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember">--}}
{{--                        <label for="remember" class="mb-0 lh-2">Remember me</label>--}}
{{--                        <a href="#" class="ml-3">Last your password?</a>--}}
{{--                    </div>--}}
{{--                    <button class="btn btn-rounded btn-login">Login</button>--}}
{{--                </form>--}}
{{--                <div class="coupon-toggle">--}}
{{--                    Have a coupon? <a href="#"--}}
{{--                                      class="show-coupon font-weight-bold text-uppercase text-dark">Enter your--}}
{{--                        code</a>--}}
{{--                </div>--}}
{{--                <div class="coupon-content mb-4">--}}
{{--                    <p>If you have a coupon code, please apply it below.</p>--}}
{{--                    <div class="input-wrapper-inline">--}}
{{--                        <input type="text" name="coupon_code" class="form-control form-control-md mr-1 mb-2" placeholder="Coupon code" id="coupon_code">--}}
{{--                        <button type="submit" class="btn button btn-rounded btn-coupon mb-2" name="apply_coupon" value="Apply coupon">Apply Coupon</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <form class="form checkout-form" action="{{route('customerPlaceOrder')}}" method="POST">
                    @csrf
                    <div class="row mb-9">
                        <div class="col-lg-7 pr-lg-4 mb-4">
                            <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                Billing Details
                            </h3>
                            <div class="row gutter-sm">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Full Name *</label>
                                        <input type="text" class="form-control form-control-md" name="name"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Division</label>
                                <div class="select-box">
                                    <select name="division" class="form-control form-control-md" required>
                                       @foreach($divisions as $division)
                                        <option value="{{$division->name}}">{{$division->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>District</label>
                                <div class="select-box">
                                    <select name="district" class="form-control form-control-md" required>
                                        @foreach($districts as $district)
                                            <option value="{{$district->name}}">{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Street address *</label>
                                <input type="text" placeholder="House number and street name"
                                       class="form-control form-control-md mb-2" name="address" required>
                            </div>
                            <div class="row gutter-sm">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Town / City *</label>
                                        <input type="text" class="form-control form-control-md" name="city" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ZIP *</label>
                                        <input type="text" class="form-control form-control-md" name="zip" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone *</label>
                                        <input type="text" class="form-control form-control-md" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email address *</label>
                                        <input type="email" class="form-control form-control-md" name="email" required>
                                    </div>
                                </div>
                            </div>


{{--                            <div class="form-group checkbox-toggle pb-2">--}}
{{--                                <input type="checkbox" class="custom-checkbox" id="shipping-toggle"--}}
{{--                                       name="shipping-toggle" disabled="disabled">--}}
{{--                                <label for="shipping-toggle">Ship to a different address?</label>--}}
{{--                            </div>--}}
{{--                            <div class="checkbox-content">--}}
{{--                                <div class="row gutter-sm">--}}
{{--                                    <div class="col-xs-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>First name *</label>--}}
{{--                                            <input type="text" class="form-control form-control-md" name="firstname"--}}
{{--                                                   required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Last name *</label>--}}
{{--                                            <input type="text" class="form-control form-control-md" name="lastname"--}}
{{--                                                   required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Company name (optional)</label>--}}
{{--                                    <input type="text" class="form-control form-control-md" name="company-name">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Country / Region *</label>--}}
{{--                                    <div class="select-box">--}}
{{--                                        <select name="country" class="form-control form-control-md">--}}
{{--                                            <option value="default" selected="selected">United States--}}
{{--                                                (US)--}}
{{--                                            </option>--}}
{{--                                            <option value="uk">United Kingdom (UK)</option>--}}
{{--                                            <option value="us">United States</option>--}}
{{--                                            <option value="fr">France</option>--}}
{{--                                            <option value="aus">Australia</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Street address *</label>--}}
{{--                                    <input type="text" placeholder="House number and street name"--}}
{{--                                           class="form-control form-control-md mb-2" name="street-address-1" required>--}}
{{--                                    <input type="text" placeholder="Apartment, suite, unit, etc. (optional)"--}}
{{--                                           class="form-control form-control-md" name="street-address-2" required>--}}
{{--                                </div>--}}
{{--                                <div class="row gutter-sm">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Town / City *</label>--}}
{{--                                            <input type="text" class="form-control form-control-md" name="town" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Postcode *</label>--}}
{{--                                            <input type="text" class="form-control form-control-md" name="postcode" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Country (optional)</label>--}}
{{--                                            <input type="text" class="form-control form-control-md" name="zip" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>
                        <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                            <div class="order-summary-wrapper sticky-sidebar">
                                <h3 class="title text-uppercase ls-10">Your Order</h3>
                                <div class="order-summary">
                                    <table class="order-table">
                                        <thead>
                                        <tr>
                                            <th colspan="2">
                                                <b>Product</b>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($carts as $cart)
                                        <tr class="bb-no">
                                            <td class="product-name">{{$cart->product->title}} <i
                                                    class="fas fa-times"></i> <span
                                                    class="product-quantity">{{$cart->quantity}}</span></td>
                                            <td class="product-total">{{$cart->product->current_selling_price  / 100 * $cart->quantity }}</td>
                                        </tr>
                                        @endforeach
                                        <tr class="cart-subtotal bb-no">
                                            <td>
                                                <b>Subtotal</b>
                                            </td>
                                            <?php
                                            $subTotal = 0;
                                            foreach ($carts as $cart)
                                            {
                                                $subTotal += $cart->product->current_selling_price * $cart->quantity;
                                            }
                                            ?>
                                            <td>
                                                <b>{{$subTotal/100}}</b>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
{{--                                        <tr class="shipping-methods">--}}
{{--                                            <td colspan="2" class="text-left">--}}
{{--                                                <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Shipping--}}
{{--                                                </h4>--}}
{{--                                                <ul id="shipping-method" class="mb-4">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-radio">--}}
{{--                                                            <input type="radio" id="free-shipping"--}}
{{--                                                                   class="custom-control-input" name="shipping">--}}
{{--                                                            <label for="free-shipping"--}}
{{--                                                                   class="custom-control-label color-dark">Free--}}
{{--                                                                Shipping</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-radio">--}}
{{--                                                            <input type="radio" id="local-pickup"--}}
{{--                                                                   class="custom-control-input" name="shipping">--}}
{{--                                                            <label for="local-pickup"--}}
{{--                                                                   class="custom-control-label color-dark">Local--}}
{{--                                                                Pickup</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-radio">--}}
{{--                                                            <input type="radio" id="flat-rate"--}}
{{--                                                                   class="custom-control-input" name="shipping">--}}
{{--                                                            <label for="flat-rate"--}}
{{--                                                                   class="custom-control-label color-dark">Flat--}}
{{--                                                                rate: $5.00</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
                                        <tr class="order-total">
                                            <th>
                                                <b>Total</b>
                                            </th>
                                            <td>
                                                <b>{{$subTotal/100}}</b>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>

                                    <div class="payment-methods" id="payment_method">
                                        <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input mb-2" type="checkbox" value="1" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Cash on Delivery
                                            </label>
                                        </div>
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1 mt-3">Shipping Charges will be added *</h4>

                                    <div class="form-group place-order pt-6">
                                        <button type="submit" class="btn btn-dark btn-block btn-rounded">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End of PageContent -->
    </main>
@endsection
