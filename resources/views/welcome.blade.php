@extends('layout.master')
@section('title')
    Welcom
@endsection
@section('content')
      <div class="row">
          <div class="col-md-6">
              <form action="#" method="post">
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
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
          <div class="col-md-6 hidden">
              <h3>SIGN IN</h3>
              <form action="#" method="post">
                  <div class="form-group">
                      <label for="email">Your E-Mail</label>
                      <input class="form-control" type="text" name="email" id="email"></input>
                  </div>
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input class="form-control" type="text" name="password" id="password"></input>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
@endsection