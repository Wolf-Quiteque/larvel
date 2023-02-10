@extends('admin.layout.master')

@section('content')


  <div class="page-header">
    <h3 class="page-title"> Notícias </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Adicionar notícia</li>
      </ol>
    </nav>
  </div>
  <div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Adicionar Notícia</h4>
          <p class="card-description"> Preencha os dados abaixo </p>

          @if ($errors->any())
            @foreach ($errors->all() as $item)
            <p class="text-danger"> {{$item}}</p>
            @endforeach
          @endif
          
          <form class="forms-sample" action="{{route('admin.blog.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="title">Título da notícia</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Escreva o título">
            </div>
            <div class="form-group">
              <label for="short_description">Breve descrição</label>
              <input type="text" class="form-control" name="short_description" id="short_description" name="short_description" placeholder="Escreva uma breve descrição da notícia">
            </div>
            <div class="form-group">
              <label for="category_id">Categoria</label>
              <select name="category_id" class="form-control" id="category_id">
                @foreach ($category as $item)
                  <option  value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Imagem de capa</label>
              <div class="file-upload">
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adicionar imagem</button>
              
                <div class="image-upload-wrap">
                  <input class="file-upload-input" type='file' name="photo" onchange="readURL(this);" accept="image/*" />
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
            <div class="form-group">
              <label for="exampleTextarea1">Conteúdo da notícia</label>
              <textarea class="form-control" id="elm1" name="long_description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Adicionar notícia</button>
            <button class="btn btn-light">Voltar</button>
          </form>
        </div>
      </div>
    </div>

<!--tinymce js-->
<script src="{{asset('admin/assets/libs/tinymce/tinymce.min.js')}}"></script>

@endsection