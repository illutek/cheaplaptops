<div class="product">
    <a href="{{ route('store.show', $product->id) }}">
        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" class="feature" width="175">
    </a>
    <h3><a href="{{route('store.show', $product->id)}}">{{ $product->title }}</a></h3>
    <p class="product__description">{{ str_limit($product->description, 75) }}</p>
    <h5>Availability: {!! $product->present()->showAvailability !!}</h5>

    @if($product->availability)
        <p>
            {!! Form::open(['route'=>'store.cart.add'])!!}
                {!! Form::hidden('quantity', 1) !!}
                {!! Form::hidden('id', $product->id) !!}
                <button type="submit" class="cart-btn">
                    <span class="price">${{ $product->price }}</span>
                    <img src="{{asset('img/white-cart.gif')}}" alt="Add to cart">
                    Add To Cart
            </button>
            {!! Form::close() !!}
        </p>
    @endif
</div>