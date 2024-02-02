<?php

namespace App\Http\Livewire\Frontend\Product;
use App\Models\Product;
use App\Models\Wishlist ;
use App\Models\Cart ;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class View extends Component
{
    public $product,$category,$quantityCount = 1;
    public function addToWishList($productId)
    {
        if (Auth::check())
        {
             if (Wishlist::where('user_id',auth()->user()->id)->where('product_id',$productId )->exists())
             {
                session()->flash('message','Already you have added this product');
                return false;

             }
             else
            {
            $wishlist = Wishlist::Create([
                'user_id'=>auth()->user()->id,
                'product_id'=>$productId
            ]);
            $this->emit('wishlistAddedUpdated');
            session()->flash('message','Wishlist added sucessfully');
             }

        }
        else
        {
              session()->flash('message','Pls Login To Continue');
              return false;
        }

    }
    public function incrementQuantity()
    {
        if ($this->quantityCount < 10)
        {
            $this->quantityCount++;
        }

    }
    public function decrementQuantity()
    {
        if ($this->quantityCount > 1)
        {
            $this->quantityCount--;
        }
    }
    public function addToCard(int $productId)
    {
     if (Auth::check())
            {
                if ( $this->product->where('id',$productId)->where('status','0')->exists())
                {

                        if(Cart::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists())
                        {
                            session()->flash('message','Product Already Added to Cart');
                        }
                        else
                        {

                            if($this->product->quantity > 0)
                            {
                                if($this->product->quantity = $this->quantityCount)
                                {
                                        Cart::create([
                                            'user_id' =>auth()->user()->id,
                                            'product_id' =>$productId,
                                            'quantity' =>$this->quantityCount,
                                        ]);
                                        $this->emit('CartAddedUpdated');
                                        session()->flash('message','Product Added to Cart');
                                }
                                else
                                {
                                    session()->flash('message','Only '.$this->product->quantity.'quantity Available');
                                return false;
                                }

                            }
                            else
                            {
                                session()->flash('message','Out of stock');
                                return false;
                            }
                         }

                }
                else
                {
                      session()->flash('message','product does not exists');
                      return false;
                }

            }
            else
            {
                  session()->flash('message','Pls Login To Continue');
                  return false;
            }
    }
    public function mount($category,$product)
    {
        $this->category =  $category;
        $this->product =  $product;
    }
    public function render()
    {
        return view('livewire.frontend.product.view',[
            'category' =>$this->category,
            'product' =>$this->product

        ]);

    }
}
