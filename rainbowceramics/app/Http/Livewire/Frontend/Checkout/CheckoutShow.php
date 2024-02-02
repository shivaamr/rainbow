<?php

namespace App\Http\Livewire\Frontend\Checkout;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;
use App\Mail\PlaceOrderMailable;
class CheckoutShow extends Component
{
    public $carts,$totalProductAmount = 0;
    public $username,$email,$phone,$pincode,$address,$payment_mode = NULL,$payment_id = NULL;
    public function rules()
    {
        return[
            'username' => 'required|string|max:60',
            'email' => 'required|string|max:121',
            'phone' => 'required|string|max:60|min:11',
            'pincode' => 'required|string|max:6|min:6',
            'address' => 'required|string|max:500',
        ];
    }
    public function placeOrder()
    {
       $this->validate();
        $order = Order::Create([
            'user_id'=> auth()->user()->id,
            'tracking_no'=>'test-'.Str::random(10),
            'username'=> $this->username,
            'email'=> $this->email,
            'phone'=> $this->phone,
            'pincode'=> $this->pincode,
            'address'=> $this->address,
            'status_message'=>'in Progress',
            'payment_mode'=>$this->payment_mode,
            'payment_id'=>$this->payment_id,
         ]);
         foreach($this->carts  as $cartItem)
         {
            $orderItems = OrderItem::Create([
                'order_id'=> $order->id,
                'product_id'=>$cartItem->product_id,
                'quantity'=> $cartItem->quantity,
                'price'=> $cartItem->product->price,

             ]);

         }
  return $order;
    }

    public function codOrder()
    {
        $this->payment_mode = 'Cash On Delivary';
        $codOrder = $this->placeOrder();
if($codOrder){

    Cart::where('user_id',auth()->user()->id)->delete();


try{
    $order =  Order::findOrFail($codOrder->id);
    Mail::to("$order->email")->send(new PlaceOrderMailable($order));
}catch(Exception $e){

}



    $this->dispatchBrowserEvent('message',[
        'text' => 'order Placed',
        'type' => 'Success',
        'status' => 200

   ]);
return redirect()->to('thank-you');

}

    else
    {
        $this->dispatchBrowserEvent('message',[
            'text' => 'something wrong',
            'type' => 'error',
            'status' => 200

       ]);
    }
    }
    public function totalProductAmount()
    {
        $this->totalProductAmount = 0;
        $this->carts =  Cart::where('user_id',auth()->user()->id)->get();
        foreach($this->carts  as $cartItem)
        {
            $this->totalProductAmount += $cartItem->product->price * $cartItem->quantity;
        }
        return $this->totalProductAmount;
    }
    public function render()
    {
        $this->username = auth()->user()->name;
        $this->email = auth()->user()->email;
      $this->phone = auth()->user()->userDetail->phone;
      $this->pincode = auth()->user()->userDetail->pin_code;
       $this->address = auth()->user()->userDetail->address;
        $this->totalProductAmount = $this->totalProductAmount();
        return view('livewire.frontend.checkout.checkout-show',[
            'totalProductAmount'=> $this->totalProductAmount

    ]);
    }



}
