@extends('admin.layout.master')

@section('content')


  <div class="page-header">
    <h3 class="page-title"> Promoções </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Adicionar promoção</li>
      </ol>
    </nav>
  </div>
  <div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Adicionar Promoção</h4>
          <p class="card-description"> Preencha os dados abaixo </p>
          <form action="{{route('admin.promotion.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Texto da promoção</label>
              <input type="text" class="form-control" id="name" name="title" placeholder="O que você deseja promover?">
            </div>
            <div class="form-group">
              <label for="name">Tipo de promoção</label>
              <select name="type" class="form-control" id="exampleSelectGender">
                <option value="alert-danger">Urgente(vermelho)</option>
                <option value="alert-warning ">Informativa(Amarelo)</option>
                <option value="alert-success">Normal(Verde)</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Adicionar Promoção</button>
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
          <h4 class="card-title">Todas Promoções</h4>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Descrição</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th></th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($promotions as $item)
                        
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->type}}</td>

                        @if ($item->status == 0)
                        <td>Desativado</td>
                        @else
                        <td>Activado</td>
                        @endif

                        <td>

                          @if ($item->status == 0)
                              <form action="{{route('admin.promotion.activate', $item->id)}}" method="post">
                                @csrf
                                <button class="btn btn-primary" type="submit">Activar</button>
                              </form>
                          @else
                              <form action="{{route('admin.promotion.deactivate', $item->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Desativar</button>
                              </form>
                          @endif

                        </td>
                        
                        <td>
                            <a href="{{route('admin.category.edit',$item->id)}}"><i style="font-size: 30px; color:rgb(0, 240, 108);" class="mdi mdi-pencil-box"></i></a>
                            <a id="delete" href="{{route('admin.category.destroy',$item->id)}}"><i style="font-size: 30px; color:red;" class="mdi mdi-delete-forever"></i></a>    
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