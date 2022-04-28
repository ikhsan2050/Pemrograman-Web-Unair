@extends('layout.dashboard')
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    @foreach ($product as $product)
    <tbody>
      <tr>
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->title }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->price }}</td>
        <td class="text-center">                  
          <a class="btn btn-sm btn-warning" href="/dashboard/products/edit"><i class="fa fa-pen"></i></a>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection