@extends('layout.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>{{ $product->title }}</h2>
            <p>Category: <a href="/product?category={{ $product->category->slug }}" class='text-decoration-none'>{{ $product->category->name }}</a></p>
            <img src="https://source.unsplash.com/500x400?{{ $product->category->name }}" alt="{{ $product->category->name }}"></div>
            <div class="col-md-6 mt-5"><h3 class="mt-5">Price: Rp {{ $product->price }},00</h3>
                {!! $product->body !!}
                <a href="/product" class='d-block mt-2'>Back to Main</a>
            </div>   
        </div>
    </div>
</div>
@endsection