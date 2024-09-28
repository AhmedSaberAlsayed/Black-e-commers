<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\order_item;

class OrderController extends Controller
{
    public function cash(){
        $amount = 0;
        $userid =Auth()->id();
        $carts =cart::where("user_id" , $userid)->get();
        foreach($carts as $cart){
            $amount += $cart->total_price;
        }

        $order = order::create([
            "order_date" => date("Y-m-d H:i:s"),
            "payment_amount" => $amount,
        ]);
        foreach($carts as $data){
            $orderitem = new order_item;
            $orderitem->user_id = $userid;
            $orderitem->product_id = $data->product_id;
            $orderitem->quantity = $data->quantity;
            $orderitem->total_price = $data->total_price;
            $orderitem->order_id = $order->id;
            $orderitem->save();
        }

    }
}
