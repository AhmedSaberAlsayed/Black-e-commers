<?php

namespace App\Http\Controllers\Api;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    use ImagesTrait;

    public function store(Request $request){
        $filename = time() . "." . $request->image->extension();
        $this->uploadimg($request->image, $filename,"products");
        $product = product::create([
            "name"=>$request-> name,
            "quantity"=>$request-> quantity,
            "price"=>$request->price ,
            "category_id"=>$request-> category_id,
            "image" => $filename,
        ]);
        return response()->json(["message"=>"product created" , "product" => $product ], 201 );
        
    }

    public function index(){
        $products = Product::with("category")->get();
        return response()->json([  "masseage"=> " All products " ,   "products" => $products], 200);
    }
}
