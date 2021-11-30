<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

$total = 0;
if(Session::has("user")){
$total = ProductController::cartItem();
}
?>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="/">eComm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Orders</a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/cart">Cart ({{$total}})</a>
            </li>
            @if(Session::has("user"))
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Session::get("user")["name"]}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/login">Register</a>--}}
{{--                </li>--}}
            @endif

        </ul>
    </div>
    </div>
</nav>

</header>
