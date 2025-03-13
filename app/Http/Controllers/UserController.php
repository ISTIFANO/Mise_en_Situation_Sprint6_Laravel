<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAll()
    {
        $users = DB::table("users")->get();


        return view("players.player", compact(['users' => $users]));
    }

    public function update_user_info(Request $request)
    {

        $request->validate(["nom" => "requied", "prenom" => "requied", "age" => "requied", "pois" => "requied", "foot" => "requied"]);
        DB::table("users")->where("id", "=", $request->id)->first()->update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "age" => $request->age,
            "pois" => $request->pois,
            "foot" => $request->foot
        ]);

        return back();
    }

    public function delete_user(Request $request)
    {
        DB::table("users")->where("id", "=", $request->id_delete)->first()->delete();

        return back();
    }
    public function create_user_info(Request $request)
    {
        $request->validate(["nom" => "requied", "prenom" => "requied", "age" => "requied", "pois" => "requied", "foot" => "requied"]);
        DB::table("users")->insert([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "age" => $request->age,
            "pois" => $request->pois,
            "foot" => $request->foot
        ]);

        return back();
    }
}
