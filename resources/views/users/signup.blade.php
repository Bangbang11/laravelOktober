@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container-fluid">
    <form class="" action="{{route('signup.store')}}" method="post">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="first_name" class="mr-sm-2">First Name</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="first_name" name="first_name">
                <div class="text-danger">{!!$errors->first('first_name')!!}</div>
            </div><br>
            <div class="form-group">
                <label for="last_name" class="mr-sm-2">Last Name</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="last_name" name="last_name">
                <div class="text-danger">{!!$errors->first('last_name')!!}</div>
            </div><br>
            <div class="form-group">
                <label for="email" class="mr-sm-2">Email</label>
                <input type="email" class="form-control mb-2 mr-sm-2" id="email" name="email">
                <div class="text-danger">{!!$errors->first('email')!!}</div>
            </div><br>
            <div class="form-group">
                <label for="password" class="mr-sm-2">Password</label>
                <input type="password" class="form-control mb-2 mr-sm-2" id="password" name="password">
                <div class="text-danger">{!!$errors->first('password')!!}</div>
            </div><br>
            <div class="form-group">
                <label for="password_confirmation" class="mr-sm-2">Password Confirmation</label>
                <input type="password" class="form-control mb-2 mr-sm-2" id="password_confirmation" name="password_confirmation">
                <div class="text-danger">{!!$errors->first('password_confirm')!!}</div>
            </div><br>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</div>
</div>
</div>
</div>
@endsection