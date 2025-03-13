<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function getAll()
    {
        $team = Team::all();


        return view("players.player", compact(['teams' => $team]));
    }

    public function update_user_info(Request $request)
    {
        $request->validate(["nom" => "requied", "pays" => "requied", "date_creation" => "requied"]);

        Team::find($request->id_team)->first()->update([
            "nom" => $request->nom,
            "pays" => $request->pays,
            "date_creation" => $request->date_creation,
        ]);

        return back();
    }

    public function delete_user(Request $request)
    {
        Team::find($request->id_delete)->delete();

        return back();
    }

    public function create_team(Request $request)
    {
        $request->validate(["nom" => "requied", "pays" => "requied", "date_creation" => "requied"]);
        Team::create([
            "nom" => $request->nom,
            "pays" => $request->pays,
            "date_creation" => $request->date_creation,
        ]);

        return back();
    }
}
