@extends('vendor.layouts.Master')
@section('title', 'Order View')

@section('content')
    <div class="row">
        @include('vendor.widgets.FlashMessage')
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Order Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Order Details</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    @foreach($order as $row)
                    <h4 class="header-title mb-3">Items from Order #{{$row->order_number}}</h4>
                    @endforeach

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                            <tr>
                            <tr>
                                <th>#</th>
                                <th>Product Name </th>
                                <th>Details</th>
                                <th>Price </th>
                                <th>Total</th>
                            </tr>
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
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Order Confirmation</h4>
                    @foreach($order as $row)

                        <form action="{{route('InVendor.Order.Status.Change', $row->id)}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <select name="status" class="form-select  form-select-md mb-3">
                                    <option value="Pending" @if($row->status == 'Pending') selected @endif>Pending</option>
                                    <option value="Approved" @if($row->status == 'Approved') selected @endif>Approved</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Shipping Information</h4>
                    <ul class="list-unstyled mb-0">
                        <li>Name:   {{$shipping->name}}</li>
                        <li>Email:  {{$shipping->email}}</li>
                        <li>Phone:  {{$shipping->phone}}</li>
                        <li>city:  {{$shipping->city}}</li>
                        <li>Thana:  {{$shipping->sub_district}}</li>
                        <li>Address:  {{$shipping->address}}</li>
                        <li>Zip:  {{$shipping->zip}}</li>
                    </ul>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Billing Information</h4>

                    <ul class="list-unstyled mb-0">
                        @foreach($order as $row)
                            <li>Name:  {{$row->customers->name}}</li>
                            <li>Phone: {{$row->customers->phone}} </li>
                            <li>Email: {{$row->customers->email}}</li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Delivery Status</h4>
                    @foreach($order as $row)
                    <form action="{{route('InVendor.Order.Delivery.Status', $row->id)}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <select name="delivery_status" class="form-select  form-select-md mb-3">
                                <option value="Pending" @if($row->delivery_status == 'Pending') selected @endif>Pending</option>
                                <option value="Processing" @if($row->delivery_status == 'Processing') selected @endif>Processing</option>
                                <option value="Shipped" @if($row->delivery_status == 'Shipped') selected @endif>Shipped</option>
                                <option value="Delivered" @if($row->delivery_status == 'Delivered') selected @endif>Delivered</option>
                                <option value="Received" @if($row->delivery_status == 'Received') selected @endif>Received</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Order Summary</h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>Subtotal</th>
                                <th>Discount </th>
                                <th>Shipping Charge</th>
                                <th>Grand Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>{{$orderDetails->sum('subtotal')/100}}</th>
                                <th> 0</th>
                                <th> 0</th>
                                <th>{{$orderDetails->sum('subtotal')/100}} </th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->

                </div>
            </div>
        </div>
    </div>
@endsection
