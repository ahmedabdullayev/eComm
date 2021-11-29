@extends('master')
@section("content")
    <div class="row justify-content-md-center">
        <div class="col-sm-5 ">
<h1>Login page</h1>
<form action="login" method="post">
    <div class="form-group">
        @csrf
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
    </div>
@endsection
