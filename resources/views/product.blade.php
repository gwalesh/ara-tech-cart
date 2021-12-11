@extends('welcome')
@section('title')
    Products
@endsection
@section('content')
    <div class="container m-5">
        <div class="row">
            @if($products->count())
                @foreach($products as $pro)
                    <div class="col-xl-4 col-lg-4 col-sm-3">
                        <div class="card">
                            <img src="{{ $pro->image }}" class="card-img-top" alt="product-demo" style="max-width: 300px; max-height: 300px;">
                            <div class="card-body">
                            <h5 class="card-title">{{ $pro->name }}</h5>
                            
                            <form action="{{ route('add-cart') }}" id="add-cart-form" method="post" enctype="multipart/form-data">
                                @csrf 
                                <input type="number" name="product_id" value="{{ $pro->id }}" hidden>
                                <input type="number" name="quantity" value="1" hidden>
                                <button type="submit" class="btn btn-primary" >Add To Cart</button>
                            </form> 
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection