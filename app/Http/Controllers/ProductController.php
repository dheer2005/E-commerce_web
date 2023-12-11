<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\Cart;
use App\Models\Report;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{


    // * @return void
    // */
    
    function index(){
       $data = Product::all();
       return view('product',['products'=>$data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('details',['product'=>$data]);
    }

    function search(Request $req){
       $data = Product::
       where('name','like','%'. $req->input('search').'%')
       ->get();
       return view('search',['products'=>$data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')->id ;
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        if (session()->has('user')) {
            $userId = session()->get('user')['id'];
            return Cart::where('user_id', $userId)->count();
        } else {
            // Handle the case when the user is not logged in
            return 0;
        }
    }

        function cartShow(){
           $userId = Session::get('user')['id'];
           $products= DB::table('cart')
           ->join('products','cart.product_id','=','products.id')
           ->where('cart.user_id',$userId)
           ->select('products.*','cart.id as cart_id')
           ->get();

           return view('cartItem',['products'=>$products]);
        }

        function removeCartItem($id){
            $data = Cart::find($id)->delete();
            return redirect('cart_item');
        }

        function orderNow(){
            $userId = Session::get('user')['id'];
            $total= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->sum('products.price');

            $products= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();
 
           

            return view('ordernow',['total'=>$total],['products'=>$products]);

        }


        function payNow(){
            return view('paynow');
        }
        


        //for report from user side
        public function help()
    {
        return view('Report');
    }
    public function Report(Request $request){
        $request->validate([
            'reported_device'=> 'required',
            'reported_url'=> 'required',
            'reported_problem'=> 'required',
            'reported_screenshot'=> 'required'
        ]);
        $Report = new Report;
        $Report -> reported_device = $request['reported_device'];
        $Report -> reported_url = $request['reported_url'];
        $Report -> reported_problem = $request['reported_problem'];
        $Report -> reported_screenshot = $request['reported_screenshot'];
        $Report-> save();   
        return redirect("/login");
    }
     
           
        
    }



