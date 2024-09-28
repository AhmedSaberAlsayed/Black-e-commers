<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addtocart(Request $request, $id){
        $user = Auth()->user();
        $product = product::find($id);
        $quantity = $request->quantity;
        $totalprice = $quantity * $product->price;
        $cart =  new cart();
        $cart->quantity = $quantity;
        $cart->total_price = $totalprice;
        $cart->product_id = $product->id;
        $cart->user_id = $user->id;
        $cart->save();
        
    }

    public function showcart(){
        $userid = Auth()->id();
        $carts = cart::with("product","user")->where("user_id", $userid)->get();
        return view("Cart.show" , compact("carts"));
    }
}
