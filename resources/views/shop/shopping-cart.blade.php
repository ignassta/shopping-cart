@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('content')

    @if(Session::has('cart'))

        {{--{{dd(session()->get('cart'))}}--}}
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-sm-3">
            <ul class="list-group">

                @foreach($products as $product)

                    <li class="list-group-item">
                        <strong>{{$product['item']['title']}}</strong>
                        <span class="label badge-success">${{$product['price']}}</span>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('product.reduceByOne', ['id' => $product['item']['id']])}}">Reduce By 1</a></li>
                                <li><a href="{{route('product.remove', ['id' => $product['item']['id']])}}">Remove All</a></li>
                            </ul>
                        </div>
                        <span class="badge badge-pill badge-secondary float-right">{{$product['qty']}}</span>
                    </li>

                @endforeach

            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-sm-3">
            <strong>Total: ${{$totalPrice}}</strong>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-sm-3">
            <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
        </div>
    </div>

    @else

        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-sm-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>

    @endif
@endsection
