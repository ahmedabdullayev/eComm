@extends('master')
@section("content")

    <div id="carousel-main" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($products as $key => $item)
                <li data-target="#carousel-main" data-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($products as $key => $item)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img class="slider-img" src="{{$item->gallery}}" class="d-block w-100" >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$item->name}}</h5>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carousel-main" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-main" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <h3 class="trending">Trending products</h3>
    <div class="row">

        @foreach($products as $key => $item)
            <div class="col-sm-4 product-col" >
            <div class="card" style="width: 18rem;">

                <img src="{{$item->gallery}}" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
        @endforeach
    </div>
@endsection
