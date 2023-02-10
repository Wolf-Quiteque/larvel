<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Team;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teams = Team::all();
        $areas = Area::all();

        return view('admin.team.index', compact('teams','areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate(
            [
                'name'=>'required',
                'id_area'=>'required',
                'role'=>'required',
                'linkedin'=>'required',
            ]
            );

        $path = $request->file('photo')->store('public/blogs');

        $team = Team::insert([
            'name' => $request->name,
            'role' => $request->role,
            'id_area' => $request->id_area,
            'linkedin' => $request->linkedin,
            'photo' => $path,
            'created_at'=> Carbon::now(),
        ]);       

        $notification = [
            'message' => 'Membro adicionado',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $team = Team::findOrFail($id);

        $areas = Area::latest()->get();

        $specific_area = Area::findOrFail($team->id_area);

        return view('admin.team.editTeam',compact('team','areas', 'specific_area'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
