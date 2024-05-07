<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly Users $users;
    public function __construct(){
        $this->users = new Users();
    }


    //Show all users
    public function index(){
        $users = Users::all();
        //dd($users->toArray());
        return view('users')->with('users',$users);
    }

    public function edit(Users $user){
        return view('users_edit', ['user' => $user]);
    }

    public function update(Request $request, string $id){
        var_dump($request->except(['_token', '_method']));
    }
}
