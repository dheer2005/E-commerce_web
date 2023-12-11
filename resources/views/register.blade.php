@extends('master')
@section('content')
    <div class=" custom-product">
        <style>
         
            </style>
            </head>
            <body>
            <div class="signup-form">
                <form action="/register" method="post">
                    @csrf
                    <h2>Sign Up</h2>
                    <p>Please fill in this form to create an account!</p>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="name" placeholder="Name" required="required"></div>
                        </div>        	
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                        {{-- <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span> --}}
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                    </div>        
                    <div class="form-group">
                        <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#" style="color: blue">Terms of Use</a> &amp; <a href="#" style="color: blue">Privacy Policy</a></label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                    </div>
                </form>
                <div class="hint-text" style="color: black"><b>Already have an account?</b> <a href="/login" style="color: blue">Login here</a></div>
            </div>
    </div>
    @endsection