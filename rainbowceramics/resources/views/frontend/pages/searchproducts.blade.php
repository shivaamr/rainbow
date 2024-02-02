@extends('layouts.app')

@section('title','Rainbow Ceramics- Search')


@section('content')
<div class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
    @if($searchProducts)

      @foreach($searchProducts as $productItem)
      <div class="col-md-10">
        <p>Search Results</p>
      <div class="product-card">
            <div class="row">
                  <div class="col-md-3">
                  <div class="product-card-img">

                    @if($productItem->productImages->count() > 0)
                    <a href="{{ url('/collections/'.$productItem->category->subname.'/'.$productItem->subname) }}">
                           </a>
                    <img src="{{ asset($productItem->productImages[0]->image) }}" style="padding:20px;" alt=" {{ $productItem->name}}" >
                    @endif

                    </div>
                  </div>
                  <div class="col-md-9">
                  <div class="product-card-body card-header">
                            <p class="product-brand">{{ $productItem->brand}}</p>
                            <h5 class="product-name">
                               <a href="{{ url('/collections/'.$productItem->category->subname.'/'.$productItem->subname) }}">
                               {{ $productItem->name}}
                               </a>
                            </h5>

                            <div>
                                <span class="selling-price">{{ $productItem->selling_price }}</span>
                                <span class="original-price">{{ $productItem->original_price}}</span>
                            </div>

                            <p><b>Description</b>{{ $productItem->description}}</p>
                            <a href="{{ url('/collections/'.$productItem->category->subname.'/'.$productItem->subname) }}" class="btn btn-primary">View</a>

                        </div>
                    </div>
            </div>
      </div>


                    </div>



                @endforeach

                <div>
                {{   $searchProducts->appends(request()->input())->links()}}

                </div>

      </div>
      @else
      <div class="col-12"><h4>sorry no products for this</h4></div>
      @endif
      </div>
  </div>

</div>


@endsection
