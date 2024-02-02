<div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Products</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Price</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Quantity</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Total</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Remove</h4>
                                </div>
                            </div>
                        </div>
                        @forelse($cart as $cartitem)
                        @if($cartitem->product)
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-4 my-auto">
                                    <a href="{{url('collections/'.$cartitem->product->category->subname.'/'.$cartitem->product->subname)}}">
                                    <label class="product-name">
                                            <img src=" {{ $cartitem->product->productImages[0]->image}}" style="width: 50px; height: 50px" alt="">
                                            {{ $cartitem->product->name}}
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label class="price">   {{ $cartitem->product->price}} </label>

                                </div>
                                <div class="col-md-2 col-7 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <button type="button" class="btn btn1" wire:loading.attr="disabled" wire:click="decrementQuantity( {{ $cartitem->id}})"><i class="fa fa-minus"></i></button>
                                            <input type="text" value="{{ $cartitem->quantity}}" class="input-quantity" />
                                            <button type="button"  class="btn btn1" wire:loading.attr="disabled" wire:click="incrementQuantity( {{ $cartitem->id}})"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label class="Total">   {{ $cartitem->product->price * $cartitem->quantity}} </label>

                                    @php $totalprice += $cartitem->product->price * $cartitem->quantity @endphp
                                </div>
                                <div class="col-md-2 col-5 my-auto">
                                    <div class="remove">
                                        <button type="button" wire:click="removeCardItem({{$cartitem->id}})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @empty
                            <h3>No Items</h3>
                        @endforelse

                    </div>
                </div>



            </div>
            <div class="row" style="margin-top:15px;">

<div class="col-md-8"></div>

<div class="col-md-4">
    <div class="shadow-sm bg-white p-3">
    <p>Total
    <span class="float-end">{{$totalprice}}</span>
</p>
<hr>
<a href="{{url('/checkout')}}" class="btn btn-warning w-100">Checkout</a>
    </div>

</div>
</div>
        </div>
    </div>

</div>
