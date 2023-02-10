@extends('admin.layout.master')

@section('content')


  <div class="page-header">
    <h3 class="page-title"> Área </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Actualizar área</li>
      </ol>
    </nav>
  </div>
  <div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Actualizar Área</h4>
          <p class="card-description"> Preencha os dados abaixo </p>
          <form action="{{route('admin.area.update',$area->id)}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nome da categoria</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$area->name}}">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Actualizar área</button>
            <button class="btn btn-light">Voltar</button>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection