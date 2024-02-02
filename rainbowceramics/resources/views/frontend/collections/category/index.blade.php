@extends('layouts.app')

@section('title','ALL Categories')

@section('content')
<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Our Categories</h4>
            </div>

            @forelse($categories as $categotyItem)


            <div class="col-md-3">
                <div class="card-deck mb-3 text-center">
              <div class="card mb-3 shadow-sm ">
                <div class="card-header">
               <p style="display:none"></p>
                  <h4 class="my-0 font-weight-normal" style="font-size:16px;">{{ $categotyItem->name}}</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title" style="font-size:15px;">Lorem Ipsum is simply </h1>
                  <ul class="list-unstyled mt-3 mb-4">
                   <li><img src="{{ asset("uploads/category/$categotyItem->image") }}" style="height:120px;width:120px"></li>



                  </ul>
                  <a href="{{ url('/collections/'.$categotyItem->slug) }}" class="btn btn-lg btn-block btn-outline-primary" style="font-size:14px;">View</a>
                </div>
              </div>
            </div>
      </div>





            @empty
            <div class="col-12">
sorry no categories
            </div>

            @endforelse



        </div>
    </div>
</div>




@endsection
