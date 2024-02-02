<div>


    <div class="container">
        <div class="row">
        <div class="py-3 py-md-5 bg-light">
                <div class="container">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    <div class="row">
                        <div class="col-md-5 mt-3">
                            <div class="bg-white border">
                            @if($product->productImages)
                            <img src=" {{asset($product->productImages[0]->image)}}" class="w-50 pimage" alt="Img">
                            @else
                            No img
                            @endif

                            </div>
                        </div>
                        <div class="col-md-7 mt-3">
                            <div class="product-view">
                                <h4 class="product-name">
                                {{$product->name}}
                                @if($product->quantity)
                                <label class="label-stock bg-success">In Stock</label>
                            @else
                            <label class="label-stock bg-danger">Out Of Stock</label>
                            @endif


                                </h4>
                                <hr>
                                <p class="product-path">
                                    Home /  {{$product->category->name}} /   {{$product->name}}
                                </p>
                                <div>
                                    <span style="font-size: 20px">&#8377;{{ $product->price }}/-</span>

                                    <span class="original-price">{{$product->original_price}}</span>
                                </div>

                                <div>
                                    @if($product->productColors)
                                        @foreach ($product->productColors as $colorItem)
                                       <p>Product Color : {{ $colorItem->color->name }}</p>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="mt-2">
                                    <div class="input-group">
                                        <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                        <input type="text" wire:model="quantityCount" value="{{$this->quantityCount}}" readonly class="input-quantity" />
                                        <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="button" wire:click="addToCard({{$product->id}})"class="btn btn1">
                                         <i class="fa fa-shopping-cart"></i> Add To Cart
                                </button>
                                    <button type="button" wire:click="addToWishList({{$product->id}})"  class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <h4>Description</h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                    {{$product->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                </div>


        </div>

    </div>

         <div class="py-3 py-md-5 bg-white">
                    <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-12">
                                    <h1>Realted Products - {{ $category->name}}</h1>
                                </div>

                                @foreach($category->relatedproducts as $relatedproductitem)
         <div class="col-md-2">
                            <div class="product-card">
                                <div class="product-card-img">

                                @if($relatedproductitem->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$relatedproductitem->category->subname.'/'.$relatedproductitem->subname) }}">
                                       </a>
                                <img src="{{ asset($relatedproductitem->productImages[0]->image) }}" style="padding:20px;" alt=" {{ $relatedproductitem->name}}" >
                                @endif

                                </div>
                                <div class="product-card-body card-header">
                                    <p class="product-brand">{{ $relatedproductitem->brand}}</p>
                                    <h5 class="product-name">
                                       <a href="{{ url('/collections/'.$relatedproductitem->category->subname.'/'.$relatedproductitem->subname) }}">
                                       {{ $relatedproductitem->name}}
                                       </a>
                                    </h5>

                                    <div>
<span style="font-size: 20px">&#8377;{{ $relatedproductitem->price }}/-</span>
                                        <span class="selling-price"></span>
                                        <span class="original-price">{{ $relatedproductitem->original_price}}</span>
                                    </div>

                                </div>
                            </div>
                        </div>


                        @endforeach


                            </div>
                        </div>
                    </div>



</div>

