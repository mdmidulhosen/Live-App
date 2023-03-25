@extends('admin.layouts.Master')
@section('title', 'Order List')

@section('content')

    <div class="page-title-box">
        <div class="page-title-right">
            <ol class="breadcrumb m-0">

            </ol>
        </div>
        <h4 class="page-title">Order Number : {{$orders->first()->order_number}}</h4>
    </div>

    <div class="row">
        <div class="col-7">

            <div class="card mb-md-0 mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Customer Billing Info</h4>
                            <ul style="list-style-type:none;">
                                @foreach($orders as $order)
                                <li>Name:  {{$order->customers->name}}</li>
                                <li>Phone: {{$order->customers->phone}} </li>
                                <li>Email: {{$order->customers->email}}</li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="col-md-6">
                            <h4>Shipping Info</h4>
                            <ul style="list-style-type:none;">
                                @foreach($orders as $order)
                                <li>Name:   {{$order->shipping->name}}</li>
                                <li>Email:  {{$order->shipping->email}}</li>
                                <li>Phone:  {{$order->shipping->phone}}</li>
                                <li>City:  {{$order->shipping->city}}</li>
                                <li>Thana:  {{$order->shipping->sub_district}}</li>
                                <li>Address: {{$order->shipping->address}}</li>
                                <li>Zip:     {{$order->shipping->zip}}</li>
                                @endforeach
                            </ul>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Payment Info</h4>
                            <ul style="list-style-type:none;">
                                @foreach($orders as $order )
                                <li>Payment Type: {{$order->payment_type}}</li>
                                <li>Paying Amount: {{$order->paying_amount}} </li>
                                <li>Total Bill : {{$order->subtotal/100}} </li>
                                <li>Payment Status: Cash On </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Product Details</h4>
                            <table class="table  table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name </th>
                                    <th>Details</th>
                                    <th>Price </th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orderDetails as $orderDetail)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$orderDetail->products->title}}</td>
                                    <td>Quantity: {{$orderDetail->quantity}}</td>
                                    <td>{{$orderDetail->unit_price/100}}</td>
                                    <td>{{$orderDetail->unit_price/100 * $orderDetail->quantity }}</td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <div class="row mt-2" >
                        <h4>Order Info</h4>
                        <div class="col-md-6">
                            <ul style="list-style-type:none;">
                                    <li>Subtotal:</li>
                                    <li>Discount:  </li>
                                    <li>Shipping Charge:  </li>
                                    <li>Grand Total:   </li>
                            </ul>
                        </div>
                        <div class="col-md-6 float-right">
                            <ul style="list-style-type:none;">
                                @foreach($orders as $order)
                                    <li>{{$order->subtotal/100}} </li>
                                    <li> 0  </li>
                                    <li> 0</li>
                                    <li>{{$order->subtotal/100}}  </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    <div>
                    </div>

                </div>

            </div>


        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <h3>Order Confirmation</h3>
                    @include('admin.widgets.FlashMessage')
                    <form action="{{route('InAdmin.Order.Status', $orders->first()->id)}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <select name="status" class="form-select  form-select-lg mb-3">
                                    <option value="Pending" @if($orders->first()->status == 'Pending') selected @endif>Pending</option>
                                    <option value="Approved" @if($orders->first()->status == 'Approved') selected @endif>Approved</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection
