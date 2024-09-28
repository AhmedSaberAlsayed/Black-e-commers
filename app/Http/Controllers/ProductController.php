<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTrait;

class ProductController extends Controller
{
    use ImagesTrait;
    public function create(){
        return view("product.create");
    }

    public function store(Request $request){
        $filename = time() . "." . $request->image->extension();
        $this->uploadimg($request->image, $filename,"products");
        product::create([
            "name"=>$request-> name,
            "quantity"=>$request-> quantity,
            "price"=>$request->price ,
            "category_id"=>$request-> category_id,
            "image" => $filename,
        ]);
    }

    public function index(){
        $products = Product::with("category")->get();
        return view("product.index", compact('products'));
    }
}
