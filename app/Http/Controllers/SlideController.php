<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SlideController extends Controller
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
        $slides = Slide::all();

        return view('admin.slide.index', compact('slides'));
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
                'title'=>'required',
                'description'=>'required',
            ],
            [
                'title.required' => 'Preencha o campo título',
                'description.required' => 'O campo descrição está vazio',
            ]
            );

            $path = $request->file('photo')->store('public/slides');

            $slide = Slide::insert([
                'title' => $request->title,
                'description' => $request->description,
                'photo' => $path,
                'created_at'=> Carbon::now()
            ]);       
    
            $notification = [
                'message' => 'Slide adicionado',
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
        $slide = Slide::findOrFail($id);

        return view('admin.slide.edit',compact('slide'));
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
        $slide = Slide::findOrFail($id);

        $validate = $request->validate(
            [
                'title'=>'required',
                'description'=>'required',
            ],
            [
                'title.required' => 'Preencha o campo título',
                'description.required' => 'O campo descrição está vazio',
            ]
            );
            

            $slide->title = $request->title;
            $slide->description = $request->description;


  
            if($request->file('photo')){
                $path = $request->file('photo')->store('public/blogs');
                $slide->photo = $path;
            }

            $slide->save();

            $notification = [
                'message' => 'Actualizado com sucesso',
                'alert-type' => 'success'
            ];

            return redirect()->route('admin.slide.create')->with($notification);
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
