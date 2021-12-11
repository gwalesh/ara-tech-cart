@extends('welcome')
@section('title')
    Cart
@endsection
@section('content')
    <div class="container m-5">
        <div class="row">
            @if($carts->count())
                @foreach($carts as $cart)
                    <div class="col-xl-12 col-lg-12 col-sm-6">
                        <div class="card d-flex">                            
                            <div class="card-body">
                                <img src="{{ $cart->product->image }}" class="card-img" alt="product-image" style="max-width: 300px; max-height: 300px;">
                                <hr>
                                <h5 class="card-title">{{ $cart->product->name }}</h5>
                                <p class="card-text">{{ $cart->product->price }}</p>
                                <form action="{{ route('cart.remove' , [$cart->id]) }}" method="post" enctype="multipart/form-data">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Remove From Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else 
                <h1 class="text-center">No Product In your Cart</h1>
                <a href="/"><h3>Add Some</h3> </a>
            @endif
        </div>
    </div>
@endsection