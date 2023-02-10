@extends('admin.layout.master')
@section('content')
<div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Todas Notícias</h4>
            <table id="example" class="table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Imagem de capa</th>
                        <th>Acções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $item)
                        
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item['category']['name']}}</td>
                        <td>
                            <img width="80" style="border: none;" src="{{asset($item->photo)}}" alt="{{$item->title}}">
                        </td>
                        <td>
                            <a href="{{route('admin.blog.edit',$item->id)}}"><i style="font-size: 30px; color:rgb(0, 240, 108);" class="mdi mdi-pencil-box"></i></a>
                            <a id="delete" href="{{route('admin.blog.destroy',$item->id)}}"><i style="font-size: 30px; color:red;" class="mdi mdi-delete-forever"></i></a>    
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>

@endsection