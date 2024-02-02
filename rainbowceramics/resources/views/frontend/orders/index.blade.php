@extends('layouts.app')

@section('title','Rainbow Ceramics')


@section('content')
<div class="py-3 py-md-5">
    <div class="container">
         <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    <h4 class="mb-4">My Orders</h4>
                    <hr>
                    <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Order ID</th>
                                    <th>Tracking No</th>
                                    <th>Username</th>
                                    <th>Payment mode</th>
                                    <th>Ordered Date</th>
                                    <th>Status Message</th>
                                    <th>Action</th>

                                </thead>
                                <tbody>
                                @forelse( $orders as  $item)
                                    <tr>
                                   <td>{{$item->id}}</td>
                                   <td>{{$item->tracking_no}}</td>
                                   <td>{{$item->username}}</td>
                                   <td>{{$item->payment_mode}}</td>
                                   <td>{{$item->created_at->format('d-m-y')}}</td>
                                   <td>{{$item->status_message}}</td>
                                   <td>{{$item->address}}</td>
                                   <td><a href="{{ url('order/'.$item->id)}}" class="btn btn-warning">View</a></td>
                                    </tr>
                                @empty
<tr><td>No Orders</td></tr>
                                @endforelse
                                </tbody>

                            </table>
<div style="float: right;">
{{$orders->links()}}

</div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>




@endsection
