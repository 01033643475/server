@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/'.$product->img) }}" class="img-fluid" alt="{{ $product->title }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->title }}</h1>
            <p>{{ $product->description }}</p>
            <h3 style="color: orange;">Price: ${{ $product->price }}</h3>
            <h5 style="color: orangered;">Discount: {{ $product->discount }}%</h5>

            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
@endsection
