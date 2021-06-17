@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('uploads/logo.png') }}" class="rounded mx-auto d-block" width="700" alt="">
        </div>
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card">
              <img src="{{ url('images') }}/{{ $product->images }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">
                    <strong>Price :</strong> IDR {{ number_format($product->Price)}}K <br>
                    <strong>Stock :</strong> {{ $product->Stock }} <br>
                    <hr>
                    <strong>Brand :</strong> <br>
                    {{ $product->description }}
                </p>
                <a href="{{ url('message') }}/{{ $product->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection