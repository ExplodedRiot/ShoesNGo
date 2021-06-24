<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $product = product::where('id', $id)->first();

        return view('message.index', compact('product'));
    }

    public function message(Request $request, $id)
    {
        $product = product::where('id', $id)->first();
        $date = Carbon::now();

        //validasi apakah melebihi stock
        if($request->amount_message > $product->stock)
        {
            return redirect('message/'.$id);
        }

        //cek validasi
        $order_check = order::where('user_id', Auth::user()->id)->where('status',0)->first();
        //simpan ke database order
        if(empty($order_check))
        {
            $order = new order;
            $order->user_id = Auth::user()->id;
            $order->date = $date;
            $order->status = 0;
            $order->amount = 0;
            $order->code = mt_rand(100, 999);
            $order->save();
        }

        //simpan ke database order detail
        $new_order = order::where('user_id', Auth::user()->id)->where('status',0)->first();

        //cek order detail
        $check_order_detail = orderdetail::where('product_id', $product->id)->where('order_id', $new_order->id)->first();
        if(empty($check_order_detail))
        {
            $order_detail = new orderdetail;
            $order_detail->product_id = $product->id;
            $order_detail->order_id = $new_order->id;
            $order_detail->amount = $request->amount;
            $order_detail->total_price = $product->price*$request->amount;
            $order_detail->save();
        }else
        {
            $order_detail = orderdetail::where('product_id', $product->id)->where('order_id', $new_order->id)->first();

            $order_detail->amount = $order_detail->amount+$request->amount;

            //price sekarang
            $new_detail_order_price = $product->price*$request->amount;
            $order_detail->total_price = $order_detail->total_price+$new_detail_order_price;
            $order_detail->update();
        }

        //amount total
        $order = order::where('user_id', Auth::user()->id)->where('status',0)->first();
        $order->total_price = $order->total_price+$product->price*$request->amount;
        $order->update();

        Alert::success('Order Succesfully Added in Cart', 'Success');
        return redirect('check-out');

    }

    public function check_out()
    {
        $order = order::where('user_id', Auth::user()->id)->where('status',0)->first();
    $order_details = [];
        if(!empty($order))
        {
            $order_details = orderdetail::where('order_id', $order->id)->get();

        }

        return view('message.check_out', compact('order', 'order_details'));
    }

    public function delete($id)
    {
        $order_detail = orderdetail::where('id', $id)->first();

        $order = order::where('id', $order_detail->order_id)->first();
        $order->total_price = $order->total_price-$order_detail->total_price;
        $order->update();

        $order_detail->delete();

        Alert::error('Order Succesfully Deleted', 'Delete');
        return redirect('check-out');
    }

    public function confrimation()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->address))
        {
            Alert::error('Please Fill the Identity', 'Error');
            return redirect('profile');
        }

        if(empty($user->nohp))
        {
            Alert::error('Please Fill the Identity', 'Error');
            return redirect('profile');
        }

        $order = order::where('user_id', Auth::user()->id)->where('status',0)->first();
        $order_id = $order->id;
        $order->status = 1;
        $order->update();

        $order_details = orderdetail::where('order_id', $order_id)->get();
        foreach ($order_details as $order_detail) {
            $product = product::where('id', $order_detail->product_id)->first();
            $product->stock = $product->stock-$order_detail->amount;
            $product->update();
        }

        Alert::success('Order Success Check Out Please Continue Payment Process', 'Success');
        return redirect('history/'.$order_id);

    }

}


