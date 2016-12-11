@extends('layouts.main')

@section('content')
    <div id="shopping-cart">
        <h1>Shopping Cart & Checkout</h1>
        <table border="1">
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        <img src="{{ $product->options->image }}" alt="Product" width="65" height="37">
                        {{ $product->name }}
                    </td>
                    <td>{{ $product->price }}</td>

                    <td>
                        {!! Form::open(['route' => 'store.cart.update', 'method' => 'put']) !!}
                        {!! Form::hidden('rowid', $product->rowId) !!}
                        {!! Form::text('quantity', $product->qty, ['maxlength'=>'2', 'class'=>"qty"]) !!}
                        <button type="submit">
                            <img src="{{ asset('img/refresh.gif') }}" alt="Refresh Cart">
                        </button>
                        {!! Form::close() !!}



                    </td>
                    <td>
                        ${{ $product->subtotal }}
                        {!! Form::open(['route'=>'store.cart.remove', 'method' => 'delete', 'style' => 'display:inline']) !!}
                        {!! Form::hidden('rowid', $product->rowId) !!}
                        <button type="submit">
                            <img src="{{ asset('img/remove.gif') }}" alt="Remove product">
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            <tr class="total">
                <td colspan="5">
                    Subtotal: ${{ Cart::subtotal() }}<br>
                    <span>Total: ${{ Cart::total() }}</span><br>

                    <a href="{{ route('store.index') }}" class="tertiary-btn">Continue Shopping</a>
                    <input type="submit" value="Checkout with Paypal" class="secondary-cart-btn">
                </td>
            </tr>
        </table>
    </div>
@endsection