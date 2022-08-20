<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    function index()
    {
        $data= product::all();
        return view('product',['products'=>$data]);
    }
    function deatil($id)
    {
        $data= product::find($id);
        return view('deatil',['product'=>$data]);
    }
function search(Request $req)
{

    $data= Product::where('name', 'like', '%'.$req->input('query').'%')->get();
    return view('search',['products'=>$data]);
}
function addToCart(Request  $req)
{
    if($req->session()->has('user'))
    {
        $cart= new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
    }
    else{
        return redirect('/login');
    }
   }

   static function CartItem()
   {
    $userId= Session::get('user')['id'];
    return Cart::where('user_id', $userId)->count();
   }

   function cartlist()
    {
        $userId= Session::get('user')['id'];
      $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
      return view('cartlist',['products'=>$data]);
    }

     static function removeCart($id)
    {
      $cart =Cart::find($id);
      $cart->delete();
      return redirect('cartlist');
    }

    function orderNow()
    {
        $userId= Session::get('user')['id'];
        $total= DB::table('cart')
          ->join('products','cart.product_id','products.id')

          ->where('cart.user_id',$userId)
          ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $user_id= Session::get('user')['id'];
        $allCart=Cart::where('user_id',$user_id)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status="pending";
            $order->payment_method="pending";
            $order->payment_status="pending";
            $order->save();
        }

        Cart::where('user_id',$user_id)->delete();
        return redirect('/');
    }
    function myOrder()
    {
        $user_id= Session::get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$user_id)
        ->get();
        return view('myorder',['orders'=>$orders]);

    }
}
