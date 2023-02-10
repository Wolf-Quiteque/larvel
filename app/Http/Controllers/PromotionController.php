<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
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

        $promotions = Promotion::all();

        return view('admin.promotion.create', compact('promotions'));
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
            'title' => 'required',
            'type' => 'required',
        ]);

        $promotion = Promotion::insert([
            'title' => $request->title,
            'type' => $request->type,
        ]);

        $notification = [
            'message' => 'Promoção criada!',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);

    }

    // Ativate Promotion

    public function activate($id){

        $promotions = Promotion::where('status',1)->count();

        if($promotions > 0){

            $notification = [
                'message' => 'Não pode ter duas promoções activas!',
                'alert-type' => 'warning'
            ];

            return redirect()->back()->with($notification);
            
        }else{

            $promotion = Promotion::findOrFail($id);

            $promotion->status = 1;
    
            $promotion->save();
    
            $notification = [
                'message' => 'Promoção activada!',
                'alert-type' => 'success'
            ];

            return redirect()->back()->with($notification);

        }
       
    }

    public function deactivate($id){
        $promotion = Promotion::findOrFail($id);

        $promotion->status = 0;

        $promotion->save();

        $notification = [
            'message' => 'Promoção desactivada!',
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
