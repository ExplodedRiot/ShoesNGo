@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12 mb-5">
        <img src="{{ url('images/logo.png') }}" class="rounded mx-auto-d-block" width="700" alt="">
    </div>
        @foreach($products as $product)
        <div class="col-md-4">
        <div class="card">
            <img src="{{ url('uploads') }}/{{ $product->image }}"  class="card-img-top" alt="..." >
            <div class="card-body">
                <h5 class="card-title">{{ $product->product-name }}</h5>
                <p class="card-text">
                <strong>Price :</strong> {{ number_format($product->price)}}K IDR <br>
                <strong>Stock :</strong> {{ $product->stock }} <br>
                <br>
                <strong>Brand :</strong> {{ $product->description }}
                </p>
                <a href="#" class="btn btn-primary">Order Now</a>
                
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
