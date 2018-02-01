@extends('layout.master')
@section('title')
    Login
@endsection
@section('css')
    /css/login.css
@endsection
@section('content')
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form">
                        <form action="" method="post">
                            <h3>SIGN UP</h3>
                            <div class="form-group">
                                <label for="email">Your E-Mail</label>
                                <input class="form-control" type="text" name="email" id="email"></input>
                            </div>
                            <div class="form-group">
                                <label for="first_name">Your First Name</label>
                                <input class="form-control" type="text" name="first_name" id="first_name"></input>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="text" name="password" id="password"></input>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                            {{--<input type="hidden" name="_token" value="{{\Illuminate\Support\Facades\Session::token}}">--}}
                            <h5>already have an account ? <a href="/login">Sign In Now</a></h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
