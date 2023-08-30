<?php

namespace App\Http\Controllers;

use App\Models\PrevisaoDeGastos;
use Illuminate\Http\Request;

class PrevisaoDeGastosController extends Controller
{
    function get (Request $request, string $id) {
        return PrevisaoDeGastos::with(
            array('valor', 'empreendimento', 'projeto', 'centroDeCusto', 'departamento')
            )->get()->find($id)->toJson();
    }

    function list (Request $request) {
        $previsoes = PrevisaoDeGastos::with(
            array('valor', 'empreendimento', 'projeto', 'centroDeCusto', 'departamento')
            )->get();
        return $previsoes->toArray();
    }

    // function create (Request $request) {
    //     $newUser = new User();
    //     $newUser->name =$request->name;
    //     $newUser->email =$request->email;
    //     $newUser->password =$request->password;
    //     $newUser->save();
    //     return $newUser->toJson();
    // }

    // function delete (Request $request, string $id) {
    //     $user = User::all()->find($id);
    //     $user->delete();
    //     return $user->toJson();
    // }

    // function edit (Request $request, string $id) {
    //     $user = User::all()->find($id);
    //     $user->name =$request->name;
    //     $user->email =$request->email;
    //     $user->password =$request->password;
    //     $user->save();
    //     return $user->toJson();
    // }
}
