<?php

namespace App\Http\Livewire\Frontend\Cart;

use Livewire\Component;
use App\Models\Cart ;
class CartShow extends Component
{
    public $cart,$totalprice = 0;



    public function decrementQuantity(int $cartId)
    {
        $cartData = Cart::where('id',$cartId)->where('user_id', auth()->user()->id)->first();
        if($cartData)
        {
            if($cartData->quantity > 1){

                $cartData->decrement('quantity');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Quantity Updated',
                    'type' => 'success',
                    'status' => 200
                ]);
            }else{
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Quantity cannot be less than 1',
                    'type' => 'success',
                    'status' => 200
                ]);
            }
        }else{

            $this->dispatchBrowserEvent('message', [
                'text' => 'Something Went Wrong!',
                'type' => 'error',
                'status' => 404
            ]);
        }
    }






    public function incrementQuantity(int $cartId)
    {

        $cartData = Cart::where('id',$cartId)->where('user_id',auth()->user()->id)->first();
        if($cartData)
        {

            if($cartData->product->quantity > $cartData->quantity )
            {
                $cartData->increment('quantity');
                $this->dispatchBrowserEvent('message',[
                    'text' => 'quantity Updted',
                    'type' => 'Success',
                    'status' => 200

               ]);
            }

        }else
        {
            $this->dispatchBrowserEvent('message',[
                'text' => 'Something wrong',
                'type' => 'Success',
                'status' => 404

           ]);

        }

    }
    public function removeCardItem(int $cartId)
    {
        $cartRemoveData = Cart::where('user_id', auth()->user()->id)->where('id',$cartId)->first();
        if($cartRemoveData)
        {
            $cartRemoveData->delete();
            $this->emit('CartAddedUpdated');
            $this->dispatchBrowserEvent('message',[
                'text' => 'Item Removed',
                'type' => 'Success',
                'status' => 200

           ]);
        }

    }
    public function render()
    {

        $this->cart = Cart::where('user_id',auth()->user()->id)->get();
        return view('livewire.frontend.cart.cart-show',[
            'cart'=> $this->cart

        ]);
    }
}
