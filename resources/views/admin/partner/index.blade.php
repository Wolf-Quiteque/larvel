@extends('admin.layout.master')

@section('content')


  <div class="page-header">
    <h3 class="page-title"> Clientes </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Adicionar cliente</li>
      </ol>
    </nav>
  </div>
  <div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Adicionar Cliente</h4>
          <p class="card-description"> Preencha os dados abaixo </p>
          <form action="{{route('admin.partner.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Nome do cliente</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            </div>
            <div class="form-group">
              <label>Logotipo</label>
              <div class="file-upload">
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adicionar imagem</button>
              
                <div class="image-upload-wrap">
                  <input class="file-upload-input" required type='file' name="photo" onchange="readURL(this);" accept="image/*" />
                  <div class="drag-text">
                    <h3>Arraste e solte uma imagem ou clique em adicionar imagem</h3>
                  </div>
                </div>
                <div class="file-upload-content">
                  <img class="file-upload-image" src="#" alt="your image" />
                  <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Uploaded Image</span></button>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Cadastrar Parceiro</button>
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
          <h4 class="card-title">Todas Categorias</h4>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome do cliente</th>
                        <th>Logotipo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partners as $item)
                        
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                          <img width="50" src="{{asset($item->photo)}}" alt="{{$item->title}}" />
                        </td>     
                        <td>
                            <a href="{{route('admin.partner.edit',$item->id)}}"><i style="font-size: 30px; color:rgb(0, 240, 108);" class="mdi mdi-pencil-box"></i></a>
                            <a id="delete" href="{{route('admin.partner.destroy',$item->id)}}"><i style="font-size: 30px; color:red;" class="mdi mdi-delete-forever"></i></a>    
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