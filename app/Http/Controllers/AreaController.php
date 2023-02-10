<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
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
        $areas = Area::all();

        return view('admin.team.area', compact('areas'));
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
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $area = Area::insert([
            'name' => $request->name,
        ]);

        $notification = [
            'message' => 'Área Adicionada',
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
        
        $area = Area::findOrFail($id);

        return view('admin.team.editArea', compact('area'));
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
        $area = Area::findOrFail($id);

        $validate = $request->validate([
            'name' => 'required',
        ]);

        $area->name = $request->name;

        $area->save();

        $notification= [
            'message' => 'Área actualizada',
            'alert-type' => 'success',
        ];

        return redirect()->route('admin.area.create')->with($notification);
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
        $area = Area::findOrFail($id)->delete();
        
        $notification= [
            'message' => 'Eliminado com sucesso',
            'alert-type' => 'success',
        ];

        return redirect()->route('admin.area.create')->with($notification);
    }
}
