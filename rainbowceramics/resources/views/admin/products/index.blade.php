@extends('layouts.admin')

<main id="main" class="main">

@section('content')



    <section class="section dashboard">

        <div class="row" >
            <div class="col-md-12 grid-margin" >

            @if(session('message'))
        <div class="alert alert-success">

        <div>{{ session('message')}}</div>



        </div>
      @endif
                <div class="card">
                    <div class="card-header">
                        <h1 style="font-size:20px;">Products
                        <a href="{{ url('admin/products/create')}}" class="btn btn-primary"  style="float:right;">Add Products</a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category ID</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                <tr>
                                    <td>{{ $product->id}}</td>
                                    <td>
                                    @if($product->category)
                                        {{ $product->category->name}}
                                    @else
                                    No Category
                                    @endif
                                    </td>
                                    <td>{{ $product->name}}</td>
                                    <td>{{ $product->price}}</td>
                                    <td>{{ $product->quantity}}</td>
                                    <td>{{ $product->status == '1' ? 'Hidden':'Visible'}}</td>


                                    <td>
                                        <a href="{{ url('admin/products/'.$product->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="#" wire:click="deleteProduct({{$product->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">NO Products</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </section>

</main><!-- End #main -->
@endsection
