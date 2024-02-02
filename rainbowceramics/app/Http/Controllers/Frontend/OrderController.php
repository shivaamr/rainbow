<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index()

    {
        $orders =  Order::where('user_id',auth()->user()->id)->orderBy('created_at','desc')->paginate(50);
        return view('frontend.orders.index',compact('orders'));
    }

    public function show($orderId)

    {
       $orders =  Order::where('user_id',auth()->user()->id)->where('id',$orderId)->first();

       if($orderId)
       {
            return view('frontend.orders.show',compact('orders'));
       }
      else
       {
        return redirect()->back()->with('message','No Order Found');
       }


    }
}
