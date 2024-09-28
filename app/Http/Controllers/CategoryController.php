<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view("category.create");
    }

    public function store(Request $request){
        category::create([
            "name" => $request->category_name,
        ]);
    } 
}
