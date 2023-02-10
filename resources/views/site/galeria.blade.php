@extends('site.layout.master')

@section('page_title', 'Galeria')

@section('content')

    
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeria</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Galeria</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-app">Formações e Certificações</li>
              <li data-filter=".filter-web">Eventos</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick=" document.getElementById('pic1').click(); " >
            <div class="portfolio-wrap">
              <img src="frontend/img/galeria/GAM_2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info" >
                <h4>Certificação ISO 9001:2015</h4>
                <p>Certificação ISO 9001:2015</p>
                <div class="portfolio-links">
                  <a id="pic1" href="frontend/img/galeria/GAM_2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Certificação ISO 9001:2015"><i class="bx bx-plus"></i><span style="font-size:17px;">Visualizar</span></a>
                </div>
              </div>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" onclick=" document.getElementById('pic2').click(); ">
            <div class="portfolio-wrap">
              <img src="frontend/img/galeria/GAM_4540.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Aniversário de 20 anos</h4>
                <p>Aniversário de 20 anos</p>
                <div class="portfolio-links">
                  <a id="pic2" href="frontend/img/galeria/GAM_4540.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Aniversário de 20 anos"><i class="bx bx-plus"></i><span style="font-size:17px;">Visualizar</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick=" document.getElementById('pic3').click(); ">
            <div class="portfolio-wrap">
              <img src="frontend/img/galeria/GAM_1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Impact Coaching OMNIdata</h4>
                <p>Impact Coaching OMNIdata</p>
                <div class="portfolio-links">
                  <a  id="pic3" href="frontend/img/galeria/GAM_1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Impact Coaching OMNIdata"><i class="bx bx-plus"></i><span style="font-size:17px;">Visualizar</span></a>
                </div>
              </div>
            </div>
          </div>

        

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" onclick=" document.getElementById('pic4').click(); ">
            <div class="portfolio-wrap">
              <img src="frontend/img/galeria/GAM_23.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>II FÓRUM OMNIdata
NEST GENERATION IT SOLUTIONS</h4>
                <p>II FÓRUM OMNIdata
NEST GENERATION IT SOLUTIONS</p>
                <div class="portfolio-links">
                  <a id="pic4" href="frontend/img/galeria/GAM_23.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="II FÓRUM OMNIdata
NEST GENERATION IT SOLUTIONS"><i class="bx bx-plus"></i><span style="font-size:17px;">Visualizar</span></a>
                
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->


    
@endsection