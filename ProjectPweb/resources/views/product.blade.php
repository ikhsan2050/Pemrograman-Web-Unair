@extends('layout.main')
@section('container')
<h2 class="ms-2">{{ $title }}</h2>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-3 ms-2">
            <form action="/product">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..", name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                  </div>                  
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $product->links() }}
    </div>
    <div class="container">
        <div class="row">
            @if ($product->count())
            @foreach ($product as $product)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <a href="/product/{{ $product->slug }}">
                    <img src="https://source.unsplash.com/500x400?{{ $product->category->name }}" class="card-img-top" alt="{{ $product->category->name }}"></a>
                    <div class="card-body">
                        <p href="/product/{{ $product->slug }}"class="card-title fs-5">{{ $product->title }}</p>
                        <p class="card-text">{{ $product->excerpt }}</p>
                    <div class="card-footer mt-4">
                        <a href="/product/{{ $product->slug }}" class="btn btn-primary">See more</a>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
            @else
            <p class="text-center fs-4">No product found</p>
            @endif
@endsection
