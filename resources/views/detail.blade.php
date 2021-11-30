@extends('master')
@section("content")

<div class="row">
    <div class="col-sm-6">
        <img class="img-fluid z-depth-1" src="{{$details->gallery}}" >
    </div>

    <div class="col-md-6">

        <h5>{{$details->name}}</h5>
        <p class="mb-2 text-muted text-uppercase small">{{$details->category}}</p>

        <p><span><strong>${{$details->price}}</strong></span></p>
        <p class="pt-1">{{$details->description}}.</p>
        <div class="table-responsive">
            <table class="table table-sm table-borderless mb-0">
                <tbody>
                <tr>
                    <th class="pl-0 w-25" scope="row"><strong>${{$details->price}}</strong></th>
                    <td>Shirt 5407X</td>
                </tr>
                <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Category</strong></th>
                    <td>{{$details->category}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>

        <form action="/add-to-cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$details->id}}>
            <button type="submit" class="btn btn-light btn-md mr-1 mb-2"><i
                    class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
        </form>
        <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
    </div>
</div>

@endsection
