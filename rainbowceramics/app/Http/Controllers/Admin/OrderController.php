<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Mail\InvoiceOrderMailable;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
class OrderController extends Controller
{
    public function index(Request $request)

    {
        //$todaydate = Carbon::now();
        //$orders =  Order::whereDate('created_at',$todaydate)->paginate(10);

       $todaydate = Carbon::now()->format('Y-m-d');
        $orders =  Order::when($request->date !=null,function($q) use($request){
                            return $q->whereDate('created_at',$request->date );
                         }, function($q)use($todaydate){
                            $q->whereDate('created_at',$todaydate);
                         })
                         ->when($request->status !=null,function($q) use($request){
                            return $q->where('status_message',$request->status );
                        })
                         ->paginate(10);
        return view('admin.orders.index',compact( 'orders'));
    }
    public function show(int $orderId)

    {
         $orders =  Order::where('id', $orderId)->first();
        return view('admin.orders.show',compact( 'orders'));

    }
    public function updateOrderStatus(int $orderId,Request $request)

    {


        $order =  Order::where('id', $orderId)->first();
        if($order)
        {
            $order->update([
                   'status_message' => $request->order_status
            ]);
                return redirect('admin/orders/'.$orderId)->with('message','Order Status Updated');
        }else {
            return redirect('admin/orders/'.$orderId)->with('message','Order ID Not Found');
        }

    }
    public function viewInvoice(int $orderId)

    {
         $orders =  Order::findOrFail( $orderId);
         return view('admin.invoice.generate-invoice',compact( 'orders'));
        //return view('admin.invoice.generate-invoice');
    }

    public function generateInvoice(int $orderId)
    {
         $orders =  Order::findOrFail( $orderId);
         $data = ['orders' => $orders];
         $pdf = Pdf::loadView('admin.invoice.generate-invoice', $data);
         return $pdf->download('invoice'.$orders->id.'.pdf');

    }

    public function mailinvoice(int $orderId)
    {
         $orders =  Order::findOrFail($orderId);
         try {
            Mail::to("$orders->email")->send(new InvoiceOrderMailable($orders));
       }catch(\Exception $e){
        return redirect('/admin/orders/'.$orderId)->with('message','Something went wrong');
       }

         return redirect('/admin/orders/'.$orderId)->with('message','Invoice Mail has send to'.$orders->email);

    }
}
