@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
    @foreach($products->chunk(3) as $productChunk)

        <div class="row">

            @foreach($productChunk as $product)

                <div class="col-4">
                    <div class="thumbnail">
                        <div class="thumbnail-image">
                            <img src="{{$product->imagePath}}" alt="..." class="img-thumbnail ">
                        </div>
                        <h5>{{$product->title}}</h5>
                        <p>{{$product->description}}</p>
                        <dic class="clearfix">
                            <div class="float-left price">${{$product->price}}</div>
                            <a href="{{route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success float-right">Add To Cart</a>
                        </dic>
                    </div>
                </div>

            @endforeach

        </div>

    @endforeach
@endsection
