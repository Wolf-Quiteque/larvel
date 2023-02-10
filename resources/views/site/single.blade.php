@extends('site.layout.master')

@section('page_title', 'Notícias')

@section('content')

    
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center p-2">
          <h2>Nossas postagens</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img width="100%" src="{{asset($blog->photo)}}" alt="{{$blog->title ?? 'None'}}" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">{{$blog->title ?? 'None'}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$blog->created_at->format('d.m.y')}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                    {!!$blog->long_description ?? 'None'!!}
              </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Pesquisar</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categorias</h3>
              <div class="sidebar-item categories">
                <ul>
                    @foreach ($categories as $item)       
                    <li><a href="#">{{$item->name}}</a></li>
                    @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Postagens recentes</h3>
              <div class="sidebar-item recent-posts">

                @foreach ($blogs as $item)
                    
                <div class="post-item clearfix">
                  <img src="{{asset($blog->photo)}}" alt="{{$item->title}}">
                  <h4><a href="{{route('single.post',$item->slug)}}">{{$item->title}}</a></h4>
                  <time datetime="2020-01-01">{{$item->created_at->format('d.m.y')}}</time>
                </div>

                @endforeach

              </div><!-- End sidebar recent posts-->


            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


    
@endsection