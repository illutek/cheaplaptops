@extends('layouts.main')

@section('promo')
    <section id="promo-alt">
        <div id="promo1">
            <h1>The brand new MacBook</h1>
            <p>
                Whit a special price, <span class="bold">today only</span>
            </p>
            <a href="#" class="default-btn">Read more</a>
            <img src="{{asset('img/macbook.png')}}" alt="MacBook">
        </div>

        <div id="promo2">
            <h2>The iPhone 5 is nwo <br>available in our shop.</h2>
            <a href="#">Read more <img src="{{ asset('img/right-arrow.gif') }}" alt=""></a>
            <img src="{{asset('img/iphone.png')}}" alt="MacBook">
        </div>

        <div id="promo3">
            <img src="{{asset('img/thunderbolt.png')}}" alt="MacBook">
            <h2>Thunderbold Display</h2>
            <a href="#">Read more <img src="{{ asset('img/right-arrow.gif') }}" alt=""></a>
        </div>
    </section>

@endsection

@section('content')

    <h2>{{ $category->name }}</h2>
    <hr>
    <aside id="categories-menu">
        <h3>CATEGORIES</h3>
        <ul>
            @foreach($catnav as $cat)
                <li><a href="{{ route('store.category', $cat->id) }}">{{ $cat->name }}</a></li>
            @endforeach
        </ul>
    </aside>
    <div id="listings">
        @foreach($products as $product)
            @include('store.product-teaser')
        @endforeach
    </div>
@endsection

@section('pagination')
    <section id="pagination">
        {!! $products->links() !!}
    </section>