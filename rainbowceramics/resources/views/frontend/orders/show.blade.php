@extends('layouts.app')

@section('title','Rainbow Ceramics')



@section('content')

<div class="py-3 py-md-5">
    <div class="container">
         <div class="row">
             <div class="col-md-12">
                <div class="shadow bg-white p-3">
                <h4 class="mb-4">My Orders Details
                    <a href=" {{ url('orders')}}" class="btn btn-warning btn-sm float-end">Back</a>
                </h4>
                    <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-4">Orders Details </h4>
                         <hr>
                            <p>Order ID-{{$orders->id}}</p>
                            <p>Tracking No-{{$orders->tracking_no}}</p>
                            <p>Username-{{$orders->username}}</p>
                            <p>Payment mode-{{$orders->payment_mode}}</p>
                            <p>Ordered Date-{{$orders->created_at->format('d-m-y')}}</p>
                            <p>Status Message-{{$orders->status_message}}</p>
                            <p>Action->{{$orders->address}}</p>

                    </div>
                    <div class="col-md-6">
                         <h4 class="mb-4">User Details </h4>
                         <hr>

                            <p>Username-{{$orders->username}}</p>
                            <p>Email-{{$orders->email}}</p>
                            <p>Phone-{{$orders->phone}}</p>
                            <p>Address-{{$orders->address}}</p>
                            <p>Pincode-{{$orders->pincode}}</p>
                    </div>
                </div>
<br>
<h5>Order Items</h5>



<div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Item ID</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>


                                </thead>
                                <tbody>
                                @php
                                    $totalprice = 0;
                                @endphp

                                @foreach( $orders->orderItems as  $orderItem)
                                    <tr>
                                   <td>{{$orderItem->id}}</td>
                            <td>
                                    <label class="product-name">
                                            <img src=" {{url($orderItem->product->productImages[0]->image) }}" style="width: 50px; height: 50px" alt="">

                                        </label>
                                    </td>

                                    <td> {{ $orderItem->product->name}}</td>
                                    <td>{{ $orderItem->price}}</td>
                                    <td>{{ $orderItem->quantity}}</td>
                                    <td>{{ $orderItem->quantity * $orderItem->price}}</td>
                                    @php
                                    $totalprice += $orderItem->quantity * $orderItem->price;
                                @endphp
                                    </tr>

                                @endforeach

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><p>Total Amount</p></td>
                                    <td>{{ $totalprice}}</td>
                                </tr>
                                </tbody>

                            </table>
<div>


</div>
                </div>
             </div>
         </div>
    </div>
</div>


@endsection
