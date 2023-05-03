<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Estado;
use App\Models\Team;
use Illuminate\Http\Request;


class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $matches = Match::all();
        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        $teams = Team::all();
        return view('matches.create', compact('estados', 'teams'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $match = new Match();
        $match->name = $request->name;
        $match->date = $request->date;
        $match->id_estados = $request->id_estados;
        $match->id_teams = $request->id_teams;
        $match->save();

        return redirect(route('matches.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $match = Match::find($id);
        return view('matches.show', compact('match'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estados = Estado::all();
        $teams = Team::all();
        $match = Match::find($id);

        return view('matches.edit', compact('estados', 'match', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $match = Match::find($id);
        $match->name = $request->name;
        $match->date = $request->date;
        $match->id_estados = $request->id_estados;
        $match->id_teams = $request->id_teams;
        $match->save();

        return redirect(route('matches.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = Match::find($id);
        $match->destroy($id);
        return redirect(route('matches.index'));
    }
}
