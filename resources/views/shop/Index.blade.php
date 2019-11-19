@extends('layouts.master')
@section('title')
    Laravel Carrito de Compras
@endsection

@section('content')
  @foreach($products->chunk(3) as $productChunk)
  <div class="row">
    @foreach($productChunk as $products)
    <div class="col-sm-6 col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="{{ $products->imagePath }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$products->nombreProducto}}</h5>
          <p class="card-text">{{$products->descripcion}}</p>
          <div class="clearfix">
              <div class="price">Q{{$products->price}}</div>
              <div class="PosButton"><a href="#" class="btn btn-success pull-right">Go somewhere</a></div>
          </div>
        </div>
      </div>
    </div>
  
  @endforeach
  
  
  </div>
  @endforeach

@endsection 