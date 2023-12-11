@extends('onlyforfooter')
@section('content')
    <div class=" custom-product">

        <div class="trending-wrapper">
            
         
            <div class="row searched-item cart-item-divider">

                <center><h1>Order Now    </h1></center><br>

                <table class="table" border="5">
                    <tbody>
                        <thead>
                            <th colspan="4"><center>ITEMS</center></th>
                        </thead>
                        <thead>
                            <th>Sr No:</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>

                        </thead>
                        <tr>
                        @foreach ($products as $key => $product)
                                                     
                            <td>{{$key+1}}</td>
                            <td><b>{{$product->name}}</b></td>
                            <td></td>
                            <td>&#x20B9 {{$product->price}}</td>

                           
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
                
                {{-- $product->name
                $product->price --}}
            </div>
      
        </div>

        <div class="col-sm-6">
            <table class="table">              
               <thead>
                    <th colspan="3">Amount:</th>
               </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Price</td>
                        <td>&#x20B9 {{$total}}</td>
                    </tr>
                      <tr>
                             <td>2.</td>
                             <td>GST 18%</td>
                             <td>&#x20B9 {{$A = ($product->price)*0.18}}</td>
                         
                         </tr>
                        
                         <tr>
                             <td>3.</td>
                             <td>SHIPPING CHARGE</td>
                           <td>&#x20B9 {{$B = ($product->price)*0.01}}</td>
                         
                         </tr>

                    <tr>
                        <td>TOTAL AMOUNT</td>
                        <td colspan="2" style="text-align:right;padding-right:50px">&#x20B9 {{$TOTAL = $total+$A+$B}}</td>
                    </tr>
                </tbody>
            </table>

            <div><a href="/pay-now/{{$TOTAL}}"><button class="btn btn-success" style="margin-left:40%; margin-bottom:20px ">Pay Now</button></a></div>
        </div>
    </div>
@endsection
