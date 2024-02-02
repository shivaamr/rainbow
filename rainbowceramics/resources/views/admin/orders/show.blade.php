@extends('layouts.admin')

@section('title','View Order')
<main id="main" class="main">


@section('content')

<div class="row" >
    <div class="col-md-12 grid-margin" >

    @if(session('message'))
<div class="alert aler-success">{{session('message') }}</div>
    @endif
        <div class="card">
            <div class="card-header">
                <h1 style="font-size:20px;">My Orders
                <a href="{{ url('admin/orders')}}" class="btn btn-success btn-sm float-end" style="float:right;">Back</a>
                    <a href="{{ url('admin/invoice/'.$orders->id.'/generate')}}" target="_blank" class="btn btn-danger btn-sm float-end" style="float:right;margin-right:12px">Download Invoice</a>
                    <a href="{{ url('admin/invoice/'.$orders->id)}}" class="btn btn-warning btn-sm" style="float:right;margin-right:12px">View Invoice</a>
                    <a href="{{ url('admin/invoice/'.$orders->id.'/mail')}}" class="btn btn-info btn-sm" style="float:right;margin-right:12px">Send Invoice via Mail</a>

            </h1>

            </div>
            <div class="card-body">
                <div class="shadow bg-white p-3">
                <h4 class="mb-4">My Orders Details

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

        <div class="card">
            <div class="card-body">
                <h4>Order Process-Update Order Status</h4>
                <hr>
                <div class="row">
                    <div class="col-md-5">
                        <form action="{{ url('admin/orders/'.$orders->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="">Update Your Order Status</label>
                        <select name="order_status" id="" class="form-control">
                            <div class="input-group">


                            <option value="">Select Status</option>
                            <option value="in progress" {{ Request::get('status') =='in Progress' ? 'selected':'' }}>In Progress</option>
                            <option value="completed" {{ Request::get('status') =='completed' ? 'selected':''}}>Completed</option>
                            <option value="pending" {{ Request::get('status') =='pending' ? 'selected':''}}>Pending</option>
                            <option value="canceled" {{ Request::get('status') =='canceled' ? 'selected':''}}>Canceled</option>
                            <option value="out of delivery" {{ Request::get('status') =='out of delivery' ? 'selected':''}}>Out Of Delivary</option>
                       </select>
                       <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                        </div>

                    </div>
                    <div class="col-md-7">
           <br/>
           <h4>Current Order -  <span class="text-uppercase">{{ $orders->status_message }}</span></h4>


                    </div>


                </div>

            </div>
        </div>
</div>
 </div>

</main><!-- End #main -->
@endsection
