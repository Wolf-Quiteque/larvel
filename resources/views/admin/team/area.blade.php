@extends('admin.layout.master')

@section('content')


  <div class="page-header">
    <h3 class="page-title"> Áreas </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Adicionar áreas</li>
      </ol>
    </nav>
  </div>
  <div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Adicionar Área</h4>
          <p class="card-description"> Preencha os dados abaixo </p>
          <form action="{{route('admin.area.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nome da área</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Escreva a área">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Adicionar área</button>
            <button class="btn btn-light">Voltar</button>
          </form>
        </div>
      </div>
    </div>
  </div>    

  <div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Todas Áreas</h4>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome da área</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($areas as $item)
                        
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <a href="{{route('admin.area.edit',$item->id)}}"><i style="font-size: 30px; color:rgb(0, 240, 108);" class="mdi mdi-pencil-box"></i></a>
                            <a id="delete" href="{{route('admin.area.destroy',$item->id)}}"><i style="font-size: 30px; color:red;" class="mdi mdi-delete-forever"></i></a>    
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