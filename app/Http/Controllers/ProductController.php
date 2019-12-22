<?php
namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;


class ProductController extends Controller
{
public function getWelcome(){

  return view('shop.welcome');
}


public function getShop(){

  return view('shop.shop');
}
       public function getIndex()
    {
        $products = Product::all();
        $products=Product::orderBY('id','desc')->paginate(6);
        return view('shop.index',['products'=> $products]);
    }
  

  public function getAddToCart(Request $request, $id){

  	$product=Product::find($id);
  	$oldCart= Session::has('cart') ? Session::get('cart') : null;
  	$cart= new Cart($oldCart);
  	$cart->add($product,$product->id);

    $request->session()->put('cart',$cart);
   
    return redirect()->route('product.index');


  	  }

  	  public function getCart(){

  	  	if (!Session::has('cart')) {
  	  		return view('shop.shopping-cart');
  	  	}

  	  	$oldCart=Session::get('cart');
  	  	$cart= new Cart($oldCart);
  	  	 Session::flash('success','Thanks for shopping with us');
  	  	return view('shop.shopping-cart',['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);

  	  }

  	  public function getCheckout(){
  	  	if(!Session::has('cart')){

  	  		return view('shop.shopping-cart'); 
  	  	}
  	  	$oldCart=Session::get('cart');
  	  	$cart=new Cart($oldCart);
  	  	$total=$cart->totalPrice;
  	  	return view('shop.checkout',['total'=>$total]);
  	  }

  	  public function postCheckout(Request $request){

  	  	if(!Session::has('cart')){
  	  		return redirect()->route('shop.shopping-cart');
  	  	}

  	  	$oldCart=Session::get('cart');
  	  	$cart=new Cart($oldCart);
        //Api key set
  	  	Stripe::setApiKey('sk_test_8f8dJwt3eVJwfFzoUZchhpAv00KwpkSkQH');
  	  	//Set charges
  	  	try{

  	  $charge = Charge::create(array(
          "amount" =>$cart->totalPrice*100,
  	  		"currency"=>"usd",
  	  		"source"=>$request->input('stripeToken'),//obtain with Stripe.js
  	  		"description"=>"Test Charge"

  	  		 ));
       $order= new Order();
       $order->cart = serialize($cart);
       $order->address = $request->input('address');
       $order->name = $request->input('name');
       $order->payment_id = $charge->id;

       Auth::user()->orders()->save($order);

  	  	}catch(\Exception $e){
  	  		return redirect()->route('checkout')->with('error',$e->getMessage());
  	  	}
         Session::forget('cart'); //delete the card details from session
         return redirect()->route('product.index')->with('success', 'Successfully purchased products!');//success

  	  
}
}
