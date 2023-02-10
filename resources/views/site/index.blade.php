@extends('site.layout.master')

@section('page_title', 'Início')

@if ($promotion)
  @section('promotion')
  <div class="row" style="text-align:center; margin-top:-20px;">
    <div class=" alert {{$promotion->type}} alert-dismissible fade show" role="alert">
      {{$promotion->title}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div> 
  @endsection
@endif

@section('content')

      <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        @foreach ($slides as $item)

          <div class="carousel-item  <?php $loop->iteration == 1 ? print 'active' : print '' ?>" style="background: url({{$item->photo}}) no-repeat center center; background-size: cover;">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">{{$item->title}}</h2>
                <p class="animate__animated animate__fadeInUp">{{$item->description}}</p>
                <a href="{{route('site.omnidata')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sobre nós</a>
              </div>
            </div>
          </div>

        @endforeach

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          
          <a href="http://google.com">
          <img src="frontend/assets/img/partners/Cisco.png" class="img-fluid" alt="">
          </a>
            

          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/partners/Dell_EMC.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/partners/huaweii.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/partners/microsoft.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/partners/oraclee.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/partners/vmwaree.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">

          <div class="col-lg-6 pt-4 pt-lg-0" style="margin-bottom: -40px;">
            <h1 class="mb-3">Quem somos</h1>
            <p style="text-align: justify;">
              A OMNIdata é uma empresa Angolana, constituída em 20 de Setembro 1996, integradora de soluções no âmbito de telecomunicação e informática, com grande experiência e elevado grau de responsabilidade.
            </p>
            <ul>
              <li>
                <i class="ri-check-double-line pt-2"></i> 
                Serviços orientados para o cliente, oferecendo soluções TIC simples ou em rede com qualidade, eficiência e fiabilidade.</li>
              <li><i class="ri-check-double-line pt-2"></i> Foco na criação de valor, através da união, solidez, confiança, transparência e rigor, que assegurem o desenvolvimento sustentado,</li>
              
            </ul>
         <!--    <p class="fst-italic">
              Na OMNIdata, melhoramos continuamente nosso sistema e objectivos de qualidade investindo na capacitação dos nossos quadros, em tecnologias de ponta e numa metodologia de trabalho eficiente..
            </p> -->
          </div>

          <div class="col-lg-6">
            <img src="frontend/assets/img/contents/mock-omni.png" width="500px">
          </div>
          
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- Mannualy added -->
       <!-- ======= Services Section ======= -->
    <section class="services" style="margin-top:-20px;" id="solutions">
      <div class="container">

        <div class="section-title">
          <h2 style="font-size:29px; color:black; text-transform: none;" class="mb-4">Nossas Soluções</h2>
          <p class="pt-2">A OMNIdata dá consultoria, cria projectos e implementa soluções de redes de computadores e vários outros serviços informáticos para o sector industrial, corporativo e governamental, pois detém uma equipa especializada e capacitada para a execução e solução em segurança avançada.

          </div>

      </div>

       <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="ri-wifi-line"></i>
              <h4><a href="{{route('site.redes_sem_fio')}}">REDES SEM FIO</a></h4>
              <p>Uma rede sem fio é uma infraestrutura das comunicações sem fio que permite a transmissão de dados e informações.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-database-2-line"></i>
              <h4><a href="{{route('site.storage')}}">STORAGE</a></h4>
              <p>Os storages são dispositivos projectados especificamente para armazenamento de dados,</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-lock-line"></i>
              <h4><a href="{{route('site.seguranca')}}">SEGURANÇA</a></h4>
              <p>A segurança da informação está directamente relacionada com protecção de um conjunto de informações.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-usb-fill"></i>
              <h4><a href="{{route('site.cabeamento-utp')}}">CABEAMENTO UTP</a></h4>
              <p>A certificação do cabeamento é a garantia de que tudo está funcionando de acordo com as normas técnicas</p>
            </div>
          </div>
         
        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- End Mannually added -->

     <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">

        <div class="container">

        <div class="section-title" id="services">
          <h2 style="font-size:29px; color:black; text-transform: none;" class="mb-4">Nossos Serviços</h2>
          <p class="pt-2">A OMNIdata dá consultoria, cria projectos e implementa soluções de redes de computadores e vários outros serviços informáticos para o sector industrial, corporativo e governamental, pois detém uma equipa especializada e capacitada para a execução e solução em segurança avançada.

          </div>

        </div>

          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="ri-customer-service-2-line"></i>
              <h4> <a href="{{route('site.servico-suporte-ti')}}" style="color: black;">Serviço e suporte em T.I</a> </h4>
              <p>Suporte Técnico, Suporte de Nível 1, 2 e 3, Consultoria de IT, OutSourcing;Gestão de Suporte e Manutenção.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="ri-building-fill"></i>
              <h4> <a href="{{route('site.sistema-de-informacao')}}" style="color: black;">Gestão de Infraestutura</a> </h4>
              <p>Soluções para Data Center, Soluções para Provedores de IT e Telecomunicações, Dimensionamento de Serviços, Colaboração, Soluções de Segurança de Informação, Soluções Enterprise Networks.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="ri-radar-line"></i>
              <h4> <a href="{{route('site.gestao-de-ti')}}" style="color: black;">Sistemas de informação</a> </h4>
              <p>Virtualização de Sistemas e Data Centers, Storage e Backup de Informação, Solução de ERP, Soluções de servidores, Soluções para Provedores de Serviços de IT e Telecomunicações, Recuperação de Informação em Desastre.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="ri-funds-line"></i>
              <h4> <a href="{{route('site.gestao-de-infraestruturas')}}" style="color: black;"> Gestão de T.I</a></h4>
              <p>Escopo, Custos, Integração, Comunicação, Qualidade, Riscos, Disciplina Ágil.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("frontend/assets/img/Storage.png");'></div>
        </div>

      </div>
    </section><!-- End Features Section -->

     <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>VISITE NOSSA GALERIA</h3>
            <p> A OMNIdata está comprometida com a qualidade e excelência em todos os serviços que presta. A nossa equipa é formada por técnicos especialistas no ramo da informática e de telecomunicações, devidamente certificados, garantindo o atendimento das necessidades do cliente em um alto padrão.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="botao align-middle" href="{{route('site.galeria')}}">Galeria de Imagens</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

  </main><!-- End #main -->

  <!-- ======BLOG======= -->
   <div class=" container-lg row mx-auto mt-4" style="margin-bottom:50px;">  

<div style="text-align: center;">
      <h1 class="mb-4" style="font-weight:500;">
    Nossas Postagens</h1>

    <p class="mb-4">Fique a par de todas as notícias relacionadas com OMNIdata e o mundo.</p>

</div>

@foreach ($blogs as $item)
  <div class="col">
    <div class="card">
      <img src="{{$item->photo}}" class="card-img-top" alt="{{$item->photo}}" height="250">
      <div class="card-body">
        <i class="ri-calendar-2-line" style="margin-top: 15px; text-decoration:none;"></i>
        {{ $item->created_at->format('d.m.y') }}
      </div>
        
      <div class="card-body" style="margin-top:-20px;">
        <span style="margin:10px 0; "></span>
        <h5 class="card-title">{{$item->title}}</h5>
        <p class="card-text mb-4">{{$item->short_description}}</p>
        <a href="{{route('single.post',$item->slug)}}" class="botao">Ler mais</a>
      </div>
    </div>
  </div>
@endforeach


   </div>

  <!-- ======END BLOG======== -->

@endsection