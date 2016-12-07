@extends('layouts.main')

@section('content')
    <div id="product-image">
        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}">
    </div>
    <div id="product-details">
        <h1>{{ $product->title }}</h1>
        <p>{{ $product->description }}</p>
        <hr>
        @if($product->availability)
            <form action="#" method="post">
                <label for="qty">Qty</label>
                <input type="text" id="qty" value="1" maxlength="2">

                <button type="submit" class="secondary-cart-btn">
                    <img src="{{ asset('img/white-cart.gif') }}" alt="Add to Cart"> ADD TO CART
                </button>
            </form>
        @else
            <p class="outofstock">
                This item is not available
            </p>
        @endif
    </div>
    <div id="product-info">
        <p class="price">${{ $product->price }}</p>
        <p>Availability: {!! $product->present()->showAvailability !!}</p>
        <p>Product code: <span>{{ $product->id }}</span></p>
    </div>
@endsection