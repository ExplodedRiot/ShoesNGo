@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->product_name }}</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('images') }}/{{ $product->Image }}" class="rounded mx-auto d-block" width="400" alt="...">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $product->product_name }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Price</td>
                                        <td>:</td>
                                        <td>IDR {{ number_format($product->Price)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>:</td>
                                        <td>{{ $product->Stock }}</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>:</td>
                                        <td>{{ $product->Description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Amount</td>
                                        <td>:</td>
                                        <td>
                                             <form method="post" action="{{ url('message') }}/{{ $product->id }}" >
                                            @csrf
                                                <input type="text" name="amount" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Check Out</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection