<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\UserRquest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view("user.create");
    }
    public function store(UserRquest $request){
        User::create([
            "name" =>$request->name_user,
            "email" =>$request->email,
            "password" =>$request->password,
            "phone" =>$request->phone,
        ]);
    }

    public function index(){
        $users = User::all();
        return view("user.index",compact("users"));
    }

    public function edit($id){
        $user = user::find($id);
        return view("user.edit",compact("user"));
    }

    public function update(user $user, UserRquest $request){
        $user->where("id",$request->id)
        ->update([
            "name" =>$request->name_user,
            "email" =>$request->email,
            "password" =>$request->password,
            "phone" =>$request->phone,
        ]);
        return redirect()->route("index.user");
    }
    public function delete($id){
        $deleteUser = user::find($id);
        $deleteUser->delete();
        return redirect()->back();
    }
    public function show_login(){
        return view("user.login");
    }


    public function login(Request $request){
        $user = user::where("email",$request->email)->first();
        if($user && $request->password == $user->password){
            Auth::login($user);
            return redirect()->route("index.user");
        }
        return redirect()->back();
    }
}
