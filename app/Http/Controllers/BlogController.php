<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Models\Blog;
use Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::all();

        return view('admin.blog.all',compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
     
        return view('admin.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate(
            [
                'title'=>'required',
                'short_description'=>'required',
                'long_description'=>'required',
                'category_id'=>'required',
                'photo'=>'required',
            ],
            [
                'title.required' => 'Preencha o campo título',
                'short_description.required' => 'O campo breve descrição está vazio',
                'long_description.required' => 'O campo descrição está vazio',
                'category_id.required' => 'A categoria está vazia',
                'photo.required' => 'Selecione uma imagem de capa',
            ]
            );

        $slug = str_slug($request->title, '-');

        $path = $request->file('photo')->store('public/blogs');

        $blog = Blog::insert([
            'slug' => $slug,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'category_id' => $request->category_id,
            'photo' => $path,
            'created_at'=> Carbon::now(),
        ]);       

        $notification = [
            'message' => 'Notícia adicionada',
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
        $blog = Blog::findOrFail($id);

        $category = Category::all();

        $specific_category = Category::findOrFail($blog->category_id);

        return view('admin.blog.edit',compact('blog','category','specific_category'));

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
        $blog = Blog::findOrFail($id);

        $validate = $request->validate(
            [
                'title'=>'required',
                'short_description'=>'required',
                'long_description'=>'required',
                'category_id'=>'required',
            ],
            [
                'title.required' => 'Preencha o campo título',
                'short_description.required' => 'O campo breve descrição está vazio',
                'long_description.required' => 'O campo descrição está vazio',
                'category_id.required' => 'A categoria está vazia',
            ]
            );
            
            if($request->title != ''){
                $slug = str_slug($request->title, '-');
                $blog->slug = $slug;
                $blog->title = $request->title;
            }

            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->category_id = $request->category_id;

  
            if($request->file('photo')){
                $path = $request->file('photo')->store('public/blogs');
                $blog->photo = $path;
            }

            $blog->save();

            $notification = [
                'message' => 'Actualizado com sucesso',
                'alert-type' => 'success'
            ];

            return redirect()->route('admin.blog.all')->with($notification);
        
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

        $blog = Blog::findOrFail($id);

        $path = $blog->photo;


        if(Storage::delete($path)){
            $blog->delete();
        }

        $notification =[
            'message' => 'Notícia eliminada',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.blog.all')->with($notification);

    }
}
