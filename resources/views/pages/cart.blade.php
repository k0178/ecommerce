@extends('layout.app')

@section('content')

<div class="d-flex justify-content-end mt-5">
    <button onclick="window.location.href='/cart'" class="button-black mx-5 ">CHECKOUT</button>
</div>

<div id="cart-items"></div>


@endsection

