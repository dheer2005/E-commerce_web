<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Web(Project)</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    
</body>
<style>
    .navbar{
        background:#eedfdf;
    }
       body {
                
                background: white;
                font-family: 'Roboto', sans-serif;
            }
            .form-control {
                height: 41px;
                background: #f2f2f2;
                box-shadow: none !important;
                border: none;
            }
            .form-control:focus {
                background: #e2e2e2;
            }
            .form-control, .btn {        
                border-radius: 3px;
            }
            .signup-form {
                width: 400px;
                margin: 30px auto;
            }
            .signup-form form {
                color: #999;
                border-radius: 3px;
                margin-bottom: 15px;
                background: #eedfdf;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .signup-form h2  {
                color: #333;
                font-weight: bold;
                margin-top: 0;
            }
            .signup-form hr  {
                margin: 0 -30px 20px;
            }    
            .signup-form .form-group {
                margin-bottom: 20px;
            }
            .signup-form input[type="checkbox"] {
                margin-top: 3px;
            }
            .signup-form .row div:first-child {
                padding-right: 10px;
            }
            .signup-form .row div:last-child {
                padding-left: 10px;
            }
            .signup-form .btn {        
                font-size: 16px;
                font-weight: bold;
             /* background: #3598dc; */
                border: none;
                min-width: 140px;
            }
            .signup-form .btn:hover, .signup-form .btn:focus {
                /* background: #2389cd !important; */
                outline: none;
            }
            .signup-form a {
                color: #fff;
                text-decoration: underline;
            }
            .signup-form a:hover {
                text-decoration: none;
            }
            .signup-form form a {
                /* color: #3598dc; */
                text-decoration: none;
            }	
            .signup-form form a:hover {
                text-decoration: underline;
            }
            .signup-form .hint-text  {
                padding-bottom: 15px;
                text-align: center;
            }
    img.slider-img{
        height: 400px !important ;
    }
    .custom-product{
        
    }
    .carousel-caption{
        background-color:rgb(42, 74, 102)
    }
    .trending-wrapper{
        margin: 20px;
    }
    .trending-item{
        float: left;
        width: 25%;
    }
    .trending-img{
        height: 100px;
        
    }
    .details-img{
        height: 200px !important;
    }
    .search-box{
        width: 500px !important;
    }
    .cart-item-divider{
        
        border-bottom: 1px solid #ccc!important;
    }
    .cart-remove-btn-style{
        padding-top: 4%;
    }
    .cart-product-img-style{
        padding: 3%;
    }
</style>
<script>
   
</script>
</html>