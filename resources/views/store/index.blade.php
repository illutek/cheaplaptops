@extends('layouts.main')

@section('promo')
    <section id="promo">
        <div id="promo-details">
            <h1>Today's deals</h1>
            <p>
                Checkout this section of <br> products at a discounted price.
                <a href="#" class="default-btn">Shop now</a>
            </p>
        </div>
        <div class="promo-img">
            <img src="{{asset('img/promo.png')}}" alt="Promotional">
        </div>

    </section>

@endsection

@section('content')

    <h2>New products</h2>
    <hr>
    <div id="products">
        @foreach($products as $product)
            @include('store.product-teaser')
        @endforeach
    </div>
@endsection