@extends('admin.layout.master')

@section('content')


  <div class="page-header">
    <h3 class="page-title"> Notícias </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Actualizar notícia</li>
      </ol>
    </nav>
  </div>
  <div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Actualizar Notícia</h4>
          <p class="card-description"> Preencha os dados abaixo </p>

          @if ($errors->any())
            @foreach ($errors->all() as $item)
            <p class="text-danger"> {{$item}}</p>
            @endforeach
          @endif
          
          <form class="forms-sample" action="{{route('admin.blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="title">Título da notícia</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}">
            </div>
            <div class="form-group">
              <label for="short_description">Breve descrição</label>
              <input type="text" class="form-control" name="short_description" id="short_description" name="short_description" value="{{$blog->short_description}}">
            </div>
            <div class="form-group">
              <label for="category_id">Categoria</label>
              <select name="category_id" class="form-control" id="category_id">
                <option  value="{{$specific_category->id}}" selected>{{$specific_category->name}}</option>
                @foreach ($category as $item)
                  <option  value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Imagem de capa</label>
              <div class="file-upload">
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Actualizar imagem</button>
              
                <div class="image-upload-wrap">
                  <input class="file-upload-input" type='file' name="photo" onchange="readURL(this);" accept="image/*" />
                  <div class="drag-text">
                    <h3>Arraste e solte uma imagem ou clique em adicionar imagem</h3>
                  </div>
                </div>
                <div class="file-upload-content">
                  <img class="file-upload-image" src="{{asset($blog->photo)}}" alt="your image" />
                  <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Uploaded Image</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Conteúdo da notícia</label>
              <textarea class="form-control" id="elm1" name="long_description">{{$blog->long_description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Actualizar notícia</button>
            <button class="btn btn-light">Voltar</button>
          </form>
        </div>
      </div>
    </div>

<!--tinymce js-->
<script src="{{asset('admin/assets/libs/tinymce/tinymce.min.js')}}"></script>


<script>
  
tinymce.init({
  selector: 'textarea#elm1',
  height: 400,
  menubar: false,
  plugins: [
    'advlist autolink lists link image code charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | link image',
  image_title: true,
  automatic_uploads: true,
   /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: (cb, value, meta) => {
    const input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    input.addEventListener('change', (e) => {
      const file = e.target.files[0];

      const reader = new FileReader();
      reader.addEventListener('load', () => {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        const id = 'blobid' + (new Date()).getTime();
        const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        const base64 = reader.result.split(',')[1];
        const blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      });
      reader.readAsDataURL(file);
    });

    input.click();
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});


</script>

@endsection