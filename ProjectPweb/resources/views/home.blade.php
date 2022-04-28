@extends('layout.main')
@section('container')
  <div class="container">
    <div class="row justify-content-center mt-3">
      @foreach($category as $category)
        <h4 class="text-center">{{ $category->name }}</h4>
        @for ($i = 0; $i < 1; $i++)
              @foreach($category->product->take(3) as $p)
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="/img/{{ $p->title }}.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">{{ $p->title }}</h5>
              </div>
            </div>
          </div>
                  @endforeach
        @endfor
          <div class="d-flex justify-content-center">
            <a href="/product?category={{ $p->category->slug }}" class="btn btn-primary mt-3 mb-4">View More</a>
            </div>
        @endforeach
    </div>
  </div>
@endsection

