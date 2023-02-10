@extends('admin.layout.master')

@section('content')


  <div class="page-header">
    <h3 class="page-title"> Equipa </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Actualizar Membro</li>
      </ol>
    </nav>
  </div>
  <div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Actualizar Membro</h4>
          <p class="card-description"> Preencha os dados abaixo </p>
          <form action="{{route('admin.slide.update',$team->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Nome do membro</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$team->name}}">
            </div>
            <div class="form-group">
                <label for="category_id">Área(Departamento)</label>
                <select name="id_area" class="form-control" id="category_id">
                  <option  value="{{$specific_area->id}}" selected>{{$specific_area->name}}</option>
                  @foreach ($areas as $item)
                    <option  value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
            <div class="form-group">
              <label for="name">Função</label>
              <input type="text" class="form-control" id="role" name="role" value="{{$team->role}}">
            </div>
            <div class="form-group">
              <label for="name">Linkedin</label>
              <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$team->linkedin}}">
            </div>
            <div class="form-group">
                <label>Imagem de fundo</label>
                <div class="file-upload">
                  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Actualizar imagem</button>
                
                  <div class="image-upload-wrap">
                    <input class="file-upload-input" type='file' name="photo" onchange="readURL(this);" accept="image/*" />
                    <div class="drag-text">
                      <h3>Arraste e solte uma imagem ou clique em adicionar imagem</h3>
                    </div>
                  </div>
                  <div class="file-upload-content">
                    <img class="file-upload-image" src="{{asset($team->photo)}}" alt="your image" />
                    <div class="image-title-wrap">
                      <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Uploaded Image</span></button>
                    </div>
                  </div>
                </div>
              </div>
            <button type="submit" class="btn btn-primary mr-2">Actualizar Membro</button>
            <button class="btn btn-light">Voltar</button>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection