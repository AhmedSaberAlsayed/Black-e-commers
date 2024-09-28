<?php

namespace App\Http\Controllers\Api;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoryController extends Controller
{
    public function store(Request $request){
        $category = category::create([
            "name" => $request->category_name,
        ]);
        return response()->json(["category created",
        "category"=> $category ]
        ,201);
    }

    public function index(){
        $categories = category::all();
        return response()->json(["categories"=>$categories],200);
    }
    
    public function update($id ,Request $request){
        $category = category::find($id);
        $category->update([
            "name" => $request->category_name,
        ]);
        return response()->json([ "maseage"=> "category updated",
        "category"=> $category ]
        ,201);
    }
}
