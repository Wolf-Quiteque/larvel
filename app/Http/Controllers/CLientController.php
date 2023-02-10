<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CLientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::all();

        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            ]
            );

        $path = $request->file('photo')->store('public/blogs');

        $blog = Client::insert([
            'name' => $request->name,
            'photo' => $path,
            'created_at'=> Carbon::now(),
        ]);       

        $notification = [
            'message' => 'Cliente cadastrado!',
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
        $client = Client::findOrFail($id);

        return view('admin.client.edit',compact('client'));
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
        $client = Client::findOrFail($id);

        $validate = $request->validate(
            [
                'name'=>'required',
            ]
            );
            
            $client->name = $request->name;

  
            if($request->file('photo')){
                $path = $request->file('photo')->store('public/blogs');
                $client->photo = $path;
            }

            $client->save();

            $notification = [
                'message' => 'Actualizado com sucesso',
                'alert-type' => 'success'
            ];

            return redirect()->route('admin.client.index')->with($notification);
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
        
        $client = Client::findOrFail($id);

        $path = $client->photo;


        if(Storage::delete($path)){
            $client->delete();
        }

        $notification =[
            'message' => 'Cliente eliminado',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.client.index')->with($notification);
    }
}
