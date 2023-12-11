@extends('master')
@section('content')
    <div class=" custom-product">
        <div class="col-sm-10">
        <div class="trending-wrapper">
                <h1>Result for Product</h1>
                @foreach ($products as $product)
                <div class="row searched-item cart-item-divider">
                    <div class="col-sm-3 cart-product-img-style">
                        <a href="/detail/{{$product->id}}">
                            <img class="trending-img" src="{{$product->gallery}}" alt="{{ $product->name }}">
                    </div>
                    <div class="col-sm-3">
                        <div class="">
                            <h2>{{ $product->name }} </h2>
                            <h4>{{$product->description}}</h4>
                            <h2 style="color: black;">&#x20B9 {{$product->price}}</h2>
                        </div>
                    </div>
                    <div class="col-sm-3 cart-remove-btn-style">
                        <a href="/remove-cart-item/{{$product->cart_id}}" class="btn btn-warning">Remove to Cart</a>
                    </div>

                    
                </div>
                @endforeach
            </div>
            <a href="/order-now"><button class="btn btn-success" style="margin-bottom: 20px; margin-left:40%">Order Now</button></a>
            </div>
            </div>
            @endsection