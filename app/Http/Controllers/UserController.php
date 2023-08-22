<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function me (Request $request) {
        return $request->user()->toJson();
    }

    function list (Request $request) {
        $users = User::all();
        return $users->toArray();
    }

    function create (Request $request) {
        $newUser = new User();
        $newUser->name =$request->name;
        $newUser->email =$request->email;
        $newUser->password =$request->password;
        $newUser->save();
        return $newUser->toJson();
    }

    function delete (Request $request, string $id) {
        $user = User::all()->find($id);
        $user->delete();
        return $user->toJson();
    }

    function edit (Request $request, string $id) {
        $user = User::all()->find($id);
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =$request->password;
        $user->save();
        return $user->toJson();
    }
}
