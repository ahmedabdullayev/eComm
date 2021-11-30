@extends('master')
@section("content")
    <div class="custom-product">
                <h4>Your cart</h4>
                <div class="row">
                    @foreach($products as $key => $item)
                        <div class="col-sm-4 product-col" >
                            <div class="card" style="width: 18rem;">

                                <img src="{{$item->gallery}}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">{{$item->name}}</h5>
                                    <p>{{$item->description}}</p>
                                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>

@endsection
