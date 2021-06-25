@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}">Order History</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Order Detail</h3>
                    @if(!empty($order))
                    <p align="right">Order Date : {{ $order->date }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Amount</th>
                                <th>Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($order_details as $order_detail)
                            <div class="card-body">
                                <h3>Success!</h3>
                                <h5>Your order has been successfully checked out, then for payment, please transfer it to your account <strong>Bank BCA Account Number : 32113-821312-123</strong> with a nominal : <strong>{{ number_format($order->code+$order_detail->amount * $order_detail->product->Price) }} IDR</strong></h5>
                            </div>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ url('images') }}/{{ $order_detail->product->Image }}" width="100" alt="...">
                                </td>
                                <td>{{ $order_detail->product->product_name }}</td>
                                <td>{{ $order_detail->amount }} sneakers</td>
                                <td align="right">{{ number_format($order_detail->product->Price) }} IDR</td>
                                <td align="right">{{ number_format($order_detail->amount * $order_detail->product->Price) }} IDR</td>
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="5" align="right"><strong>Total price :</strong></td>
                                <td align="right"><strong>{{ number_format($order_detail->amount * $order_detail->product->Price) }} IDR</strong></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Unique Code :</strong></td>
                                <td align="right"><strong>{{ number_format($order->code) }} IDR</strong></td>
                            </tr>
                             <tr>
                                <td colspan="5" align="right"><strong>amount to be transferred :</strong></td>
                                <td align="right"><strong>{{ number_format($order->code+$order_detail->amount * $order_detail->product->Price) }} IDR</strong></td>
                            </tr>
                            <tr>
                            <td>
                            <button onclick="window.print()" class="btn btn-primary">Print</button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection