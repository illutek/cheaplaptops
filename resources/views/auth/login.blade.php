@extends('layouts.main')

@section('content')

    @include('shared.errors')

    <section id="signin-form">
        <h1>I have an account</h1>

        {!! Form::open(['route' => 'login']) !!}
        <p>
            <img src="{{ asset('img/email.gif') }}" alt="Email address">
            {!! Form::email('email') !!}
        </p>
        <p>
            <img src="{{ asset('img/password.gif') }}" alt="Password">
            {!! Form::password('password') !!}
        </p>
        {!! Form::submit('Sign in', [
        'type' =>'submit',
        'class' => 'secondary-cart-btn']) !!}

        {!! Form::close() !!}
    </section>
    <section id="signup">
        <h2>I'm a new customer</h2>
        <h3>You can create an account in just a few simple steps <br>
        Click below to begin.</h3>
        <a href="{{-- route('registerform') --}}" class="default-btn">Create a new account</a>
    </section>
@endsection