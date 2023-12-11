@extends('master')
@section('content')
<div class="container mt-5">
    <div class="row">
      <!-- Login Form -->
      <div class="col-sm-4 col-sm-offset-4" style="height:500px; padding-top:80px">
       
          <div class="signup-form">
           
            <form action='/login ' method="post">
                @csrf
                <h2>Login</h2>
              <div class="form-group">
                <label for="login_username">Email:</label>
                <input type="email" class="form-control" id="login_username" name="email" placeholder="Enter your Email">
              </div>
              <div class="form-group">
                <label for="login_password">Password:</label>
                <input type="password" class="form-control" id="login_password" name="password" placeholder="Enter your password">
              </div>
              <button type="submit" class="btn btn-primary btn-block" name="login_btn">Login</button>
            </form>
            <div class="hint-text" style="color: black"><b>New to Ecomm?</b> <a href="/register" style="color: blue">Create an Account</a></div>
          </div>
      
      </div>
    </div>
</div>

      @endsection
      