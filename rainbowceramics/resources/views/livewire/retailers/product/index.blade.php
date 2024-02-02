<div class="row">
    <div class="col-md-3">
        <div class="card">
             <div class="card-header"><h2 style="font-size: 20px">Brands</h2></div>
             <div class="card-body">

                <label class="d-block">
                    <input type="checkbox" value="Rainbow Ceramics"> Rainbow Ceramics
                </label>

             </div>


        </div>
    </div>
        <div class="col-md-5">

        <div class="card">
            <div class="card-header"><h2 style="font-size: 20px">Price</h2></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="d-block">
                            <input type="radio" name="radio" wire:model="priceInput"  value="high-to-low" /><span style="padding-left:8px;">High To Low</span>
                            </label>
                    </div>
                    <div class="col-md-6">
                        <label class="d-block">
                            <input type="radio" name="radio" wire:model="priceInput"  value="low-to-high" /><span style="padding-left:8px;">Low To High</span>
                            </label>
                    </div>
                </div>


            </div>
       </div>
    </div>
</div>
    <div class="row">


                @forelse($products as $productItem)
                <div class="col-md-3">
                       <div class="product-card">
                           <div class="product-card-img">
                           @if($productItem->quantity > 0)
                           <label class="stock bg-success">In Stock</label>
                           @else
                           <label class="stock bg-danger">Out Of Stock</label>
                           @endif
                           @if($productItem->productImages->count() > 0)
                           <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                  </a>


                           <img src="{{ asset($productItem->productImages[0]->image)}}" style="padding:20px;width:173px;height:173px;" alt=" {{ $productItem->name}}" >
                           @endif

                           </div>
                           <div class="product-card-body card-header">
                               <p class="product-brand">{{ $productItem->brand}}</p>
                               <p class="product-price"><span style="font-size: 20px">&#8377; {{ $productItem->price}}/-</span></p>
                               <h5 class="product-name">

                                  <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                  {{ $productItem->name}}
                                  </a>
                               </h5>

                               <div>

                                   <span class="selling-price">{{ $productItem->selling_price }}</span>
                                   <span class="original-price">{{ $productItem->original_price}}</span>
                               </div>

                           </div>
                       </div>
                   </div>


                        @empty
                                            <div class="col-12">
                                <h1>Sorry no products for this {{ $category->name}}</h1>
                                            </div>

                   @endforelse



            </div>
        </div>
