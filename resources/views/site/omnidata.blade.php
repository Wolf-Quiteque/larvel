@extends('site.layout.master')

@section('page_title','Sobre nós')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" style="height: 90vh;">

    <div id="heroCarousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(frontend/assets/img/contents/services.jpg)">
          <div class="carousel-container">
            <div class="container" style="text-align:left;">
              <h2 class="animate__animated animate__fadeInDown">Sobre à <span>OMNIDATA</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam, <br> t velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. </p>
              <a class="btn-get-started animate__animated animate__fadeInUp scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal">Quero ser cliente</a>

              @include('site.includes.quero-ser-cliente')
              
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Hero -->


<main id="main">
   <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="frontend/assets/img/partners/Cisco.png" class="img-fluid" alt="">
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
    <section id="about" class="about" style="background-color: #f9f9f9;">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Conheça quem nós somos</h2>
            <h3>Focamo-nos na competência em serviços na área de tecnologias de informação.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              A OMNIdata é uma empresa Angolana, constituída em 20 de Setembro 1996, integradora de soluções no âmbito de telecomunicação e informática, com grande experiência e elevado grau de responsabilidade.
            </p>

            <p>
              Com um quadro de engenheiros capacitados e certificados internacionalmente, com experiência reconhecida a nível nacional e internacional, a OMNIdata oferece uma vasta gama de produtos e soluções integradas que se enquadram perfeitamente à realidade angolana.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <!-- ======= Features Section ======= -->
    <section id="features" class="features" style="margin-top: -10px;">
      <div class="container">

        <div class="section-title">
          <h2>CARACTERÍSTICAS</h2>
          <p>Nossas características</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Missão</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Vissão</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Valores</a>
              </li>

                        </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Missão OMNIDATA</h3>
                    
                    <p>Serviços orientados para o cliente, oferecendo soluções TIC simples ou em rede com qualidade, eficiência e fiabilidade, que adicionem valor ao modo de vida, de trabalho ou negócio dos clientes, criando benefícios aos accionistas, aos trabalhadores, aos clientes e a sociedade em geral.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="frontend/assets/img/features-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Valores OMNIDATA</h3>
                   
                    <p>Foco na criação de valor, através da união, solidez, confiança, transparência e rigor, que assegurem o desenvolvimento sustentado, a gestão do talento e competências e a integridade e respeito pelos direitos e deveres dos trabalhadores.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="frontend/assets/img/features-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Visão OMNIDATA</h3>
                    
                    <p>Ser e manter-se uma empresa líder na integração de sistemas e comunicações electrónicas no contexto nacional e da SADC.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="frontend/assets/img/features-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Policies Section ======= -->
    <section id="faq" class="faq"  style="background-color: #f9f9f9;">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>POLÍTICA DE <strong>QUALIDADE </strong></h3>
              <p>
                Na OMNIdata, empresa de integração de sistemas e telecomunicações, melhoramos continuamente nosso sistema e objectivos de qualidade.

                Para isso investimos na capacitação dos nossos quadros, em tecnologias de ponta e numa metodologia de trabalho eficiente. <a href="">Download do documento</a>
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">QUALIDADE <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      A OMNIdata está comprometida com a qualidade e excelência em todos os serviços que presta. A nossa equipa é formada por técnicos especialistas no ramo da informática e de telecomunicações, devidamente certificados, garantindo o atendimento das necessidades do cliente em um alto padrão.
                    </p>
                  </div>

                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">RESPONSABILIDADE <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Na OMNIdata o processo de tomada de decisão dentro da organização, tem presente o equilíbrio do meio envolvente nas suas vertentes económica, ambiental, ecológica e social. Os princípios de responsabilidade social estão também presentes nos códigos de ética que subscrevem, bem como nas diversas iniciativas de cariz social em que participa.

                      A OMNIdata tem um Código de Ética interno e assinou o Código de Ética para o Comércio e Serviços da Confederação do Comércio e Serviços de Angola.

                      A nossa responsabilidade social está presente em diversas políticas de recursos humanos, que promovem o desenvolvimento profissional de cada colaborador, que valorizam a sua iniciativa e criatividade e que reforçam o espírito de grupo, isso a nível interno da empresa. Agora a nível externo da empresa, a OMNIdata promove a integração de jovens no mercado de trabalho através da atribuição de estágios, tem apoiado iniciativas sociais e realizado acções de sensibilização para questões ambientais.

                      A OMNIdata tem um programa de estágios que oferece anualmente para alunos do ITEL (Instituto de Telecomunicações de Luanda) e de cursos superiores de Telecomunicações e Informática e Electrónica.

                      Temos além disso uma parceria cultural com o Movimento Lev'Arte no incentivo à leitura e a escrita.
                    </p>
                  </div>
                </li>


              </ul>
            </div>

          </div>

          <div class="col-lg-5 order-lg-2" >
            <img src="frontend/assets/img/contents/policies.png" style="margin-top:100px;" width="450">
          &nbsp;</div>
        </div>

      </div>
    </section><!-- End Faq Section -->

@endsection