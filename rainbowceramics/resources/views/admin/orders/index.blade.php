@extends('layouts.admin')

@section('title','Furniture Store')
<main id="main" class="main">


@section('content')

<div class="row" >
    <div class="col-md-12 grid-margin" >
        <div class="card">
            <div class="card-header">
                <h1 style="font-size:20px;">My Orders </h1>
            </div>
            <div class="card-body">

            <form action="" method="GET">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Filter By Date</label>
                        </div>
                        <div class="col-md-2">
                        <input type="date" name="date"  value="{{ date('Y-m-d')}}" class="form-control" >
                    </div>
                    <div class="col-md-2">
                        <label for="">Filter By Status</label>
                        </div>
                     <div class="col-md-2">
                       <select name="status" id="" class="form-control">
                            <option value="">Select Status</option>
                            <option value="in progress" {{ Request::get('status') =='in Progress' ? 'selected':'' }}>In Progress</option>
                            <option value="completed"{{ Request::get('status') =='completed' ? 'selected':''}}>Completed</option>
                            <option value="pending" {{ Request::get('status') =='pending' ? 'selected':''}}>Pending</option>
                            <option value="canceled" {{ Request::get('status') =='canceled' ? 'selected':''}}>Canceled</option>
                            <option value="out of delivery" {{ Request::get('status') =='out of delivery' ? 'selected':''}}>Out Of Delivary</option>
                       </select>
                    </div>
                    <div class="col-md-2">

                 <button type="submit" class="btn btn-danger">Filter</button>
                    </div>

                </div>

            </form>
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
                                            <td><a href="{{ url('admin/orders/'.$item->id)}}" class="btn btn-warning">View</a></td>
                                            </tr>
                                            @empty
                                                <tr><td>No Orders</td></tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                            <div style="float: right;">{{$orders->links()}}</div>
                            </div>
                </div>
            </div>
         </div>
    </div>
</div>

</main><!-- End #main -->
@endsection
