<?php

namespace App\Http\Livewire\Frontend\Cart;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class CartCount extends Component
{


    public $cartCount;

    protected $listeners = ['CartAddedUpdated' => 'checkcartCount'];
    public function checkcartCount()
    {
        if(Auth::check())
        {
          return $this->cartCount =  Cart::where('user_id',auth()->user()->id)->count();
        }
        else
        {
            return $this->cartCount = 0;
          }
    }
    public function render()
    {
        $this->cartCount = $this->checkcartCount();

        return view('livewire.frontend.cart.cart-count',[

            'cartCount'=>$this->cartCount
        ]);
    }


}
