<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToCart($id){

     if(Auth::id() )
       {
        Cart::where("product_id",$id)->delete();
        $d['product_id']=$id;
        $d['user_id']=Auth::id();
        Cart::create($d);

       }
        return  redirect()->back();

   }
   public function showCart(){

    $pp=Cart::select('product_id')->where('user_id',Auth::id())->get();
    $d=Product::find($pp);
    return view('cart',['data'=>$d]);

   }

   public function destroy($id){
    $data=Cart::where('product_id',$id)->first();
    $data->delete();
    return back();
   }
}
