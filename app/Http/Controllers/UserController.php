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

    //Function for redirect to user's create
    public function create(){
        return view('users_create');
    }

    //Endpoint for user's create
    public function store(Request $request){
        $created = $this->users->create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'age' => $request->input('age'),
            'email' => $request->input('email'),
            'password' => password_hash($request->input('password'), PASSWORD_DEFAULT),
        ]);

        if($created){
            return redirect()->back()->with('message', 'Successfully user created!');
        }

        return redirect()->back()->with('message', 'Error to user create!');
    }

    //show user's info
    public function show(users $user){
        return view('users_show', ['user' => $user]);
    }

    //Show update user template
    public function edit(Users $user){
        return view('users_edit', ['user' => $user]);
    }

    //Show inputs for user update
    public function update(Request $request, string $id){
        $updated = $this->users->where('id', $id)->update($request->except(['_token', '_method']));
        if($updated){
            return redirect()->back()->with('message', 'Successfully updated!');
        }

        return redirect()->back()->with('message', 'Error update!');
    }

    //Function for user delete
    public function destroy(string $id){
        $this->users->where('id', $id)->delete();
        return redirect()->route('users.index');
    }
}
