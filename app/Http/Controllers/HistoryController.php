<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use App\User;
use App\OrderDetail;
use Auth;
use Alert;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$orders = order::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('history.index', compact('orders'));
    }

    public function detail($id)
    {
    	$order = order::where('id', $id)->first();
    	$order_details = orderdetail::where('order_id', $order->id)->get();

     	return view('history.detail', compact('order','order_details'));
    }
}