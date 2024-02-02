<?php

namespace App\Http\Livewire\Frontend;
use App\Models\Wishlist ;
use Livewire\Component;

class WishlistShow extends Component
{



    public function removeWishListitem(int $wishlistId)
    {
       Wishlist::where('user_id',auth()->user()->id)->where('id',$wishlistId)->delete();
       $this->emit('wishlistAddedUpdated');
       $this->dispatchBrowserEvent('message',[
            'text' => 'Wishlist Item Remove Suceessfully',
            'type' => 'Success',
            'status' => 200

       ]);
    }
    public function render()
    {
        $wishlist = Wishlist::where('user_id',auth()->user()->id)->get();
        return view('livewire.frontend.wishlist-show',[
            'wishlist'=> $wishlist

         ]);
    }




}




