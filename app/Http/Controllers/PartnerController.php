<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $partners = Partner::all();

        return view('admin.partner.index', compact('partners'));

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

        $blog = Partner::insert([
            'name' => $request->name,
            'photo' => $path,
            'created_at'=> Carbon::now(),
        ]);       

        $notification = [
            'message' => 'Parceiro cadastrado!',
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
        $partner = Partner::findOrFail($id);

        return view('admin.partner.edit',compact('partner'));
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
        $partner = Partner::findOrFail($id);

        $validate = $request->validate(
            [
                'name'=>'required',
            ]
            );
            
            $partner->name = $request->name;

  
            if($request->file('photo')){
                $path = $request->file('photo')->store('public/blogs');
                $partner->photo = $path;
            }

            $partner->save();

            $notification = [
                'message' => 'Actualizado com sucesso',
                'alert-type' => 'success'
            ];

            return redirect()->route('admin.partner.index')->with($notification);
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
        $partner = Partner::findOrFail($id);

        $path = $partner->photo;


        if(Storage::delete($path)){
            $partner->delete();
        }

        $notification =[
            'message' => 'Parceiro eliminado',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.partner.index')->with($notification);
    }
}
