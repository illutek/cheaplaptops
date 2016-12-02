<div class="product">
    <a href="{{ route('store.show', $product->id) }}">
        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" class="feature" width="175">
    </a>
    <h3><a href="{{route('store.show', $product->id)}}">{{ $product->title }}</a></h3>
    <p>{{ $product->description }}</p>
    <h5>Availability: {!! $product->present()->showAvailability !!}</h5>

    @if($product->availability)
        <p>
            <a href="#" class="cart-btn">
                <span class="price">€ {{ $product->price }}</span>
                <img src="{{asset('img/white-cart.gif')}}" alt="Add to cart">
                Add To Cart
            </a>
        </p>
    @endif
</div>