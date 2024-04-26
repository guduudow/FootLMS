<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreplayerRequest;
use App\Http\Requests\UpdateplayerRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\player;
use App\Models\Team;

class playerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = DB::select('SELECT 
        players.id,
        players.player_name,
        players.position,
        players.matches_played,
        players.goals,
        players.assists,
        players.debut,
        players.final_match,
        players.country,
        players.imageURL,
        GROUP_CONCAT(teams.logoURL) AS logos
    FROM 
        players
    JOIN 
        player_team ON players.id = player_team.player_id
    JOIN 
        teams ON player_team.team_id = teams.id
    GROUP BY 
        players.id,
        players.player_name,
        players.position,
        players.matches_played,
        players.goals,
        players.assists,
        players.debut,
        players.final_match,
        players.country,
        players.imageURL');

        return view('players.index', ['players' => $players]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create', ['teams' => Team::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreplayerRequest $request)
    {
        $player = Player::create($request->validated());

        $player->teams()->attach($request->teams);

        Session::flash('success', 'Player added successfully');
        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(player $player)
    {
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateplayerRequest $request, player $player)
    {
        $player->update($request->validated());
        $player->teams()->sync($request->teams); //fix update to add teams to it, currently getting error
        Session::Flash('success', 'Player updated successfully');
        return redirect()->route('players.index');
    }

    public function trash($id)
    {
        Player::destroy($id);
        Session::Flash('success', 'Player deleted successfully');
        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(player $player, $id)
    {
        $player = Player::withTrashed()->where('id', $id)->first();
        $player->forceDelete();
        Session::Flash('success', 'Player deleted successfully');
        return redirect()->route('players.index');
    }
}
