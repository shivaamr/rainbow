@extends('layouts.app')

@section('title','Rainbow Ceramics - Featured Products')


@section('content')
<div class="py-5 bg-white">
  <div class="container">
    <div class="col-md-12">
        <h4 class="mb-4">Featured Products</h4>
    </div>
    <div class="row">
    @if($featuredProducts)

      @foreach($featuredProducts as $productItem)
 <div class="col-md-2">
                    <div class="product-card">
                        <div class="product-card-img">

                        @if($productItem->productImages->count() > 0)
                        <a href="{{ url('/collections/'.$productItem->category->subname.'/'.$productItem->subname) }}">
                               </a>
                        <img src="{{ asset($productItem->productImages[0]->image) }}" style="padding: 20px;
                        width: 160px;
                        height: 160px;"  alt=" {{ $productItem->name}}" >
                        @endif

                        </div>
                        <div class="product-card-body card-header">
                            <p class="product-brand">{{ $productItem->brand}}</p>
                            <h5 class="product-name">
                               <a href="{{ url('/collections/'.$productItem->category->subname.'/'.$productItem->subname) }}">
                               {{ $productItem->name}}
                               </a>
                            </h5>

                            <div>

                                <span class="selling-price">{{ $productItem->price }}</span>
                                <span class="original-price">{{ $productItem->original_price}}</span>
                            </div>

                        </div>
                    </div>
                </div>


                @endforeach

      </div>
      @else
      <div class="col-12"><h4>sorry no products for this</h4></div>
      @endif
      </div>
  </div>

</div>


@endsection
