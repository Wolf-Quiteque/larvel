<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Carreiras OMNIDATA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="carreiras/assets/img/logo_vetorizada.png" rel="icon">
  <link href="carreiras/assets/img/logo_vetorizada.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="carreiras/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="carreiras/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="carreiras/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="carreiras/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="carreiras/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="carreiras/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="carreiras/assets/css/style.css" rel="stylesheet">

  @include('carreiras.includes.styles')

</head>

<body>

  <!-- ======= Header ======= -->
  @include('carreiras.includes.menu')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="edit">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

       
        <div class="carousel-inner" role="listbox" >

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('carreiras/assets/img/trabalhadores.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <p class="animated fadeInUp" style="font-size: 40px;">Aceitas</p>
                <h2 class="animated fadeInDown">O Desafio?</h2>
                <a href="areas-de-trabalho.php" class="button-85" role="button">Áreas de trabalho</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('carreiras/assets/img/slide/emprego2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <p class="animated fadeInUp" style="font-size: 40px;">Venha fazer o </p>
                <h2 class="animated fadeInDown">Mundo Diferente</h2>
                <a href="areas-de-trabalho.php" class="button-85" role="button">Áreas de trabalho</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

 
    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" style="background-color: black; margin-top:-30px;">
      <div class="container">

    <!-- Example 1-->
        <div class="row">
            <div class="col-7" id="larguraTotal">
                <div class="card text-bg-dark" style="border:none;">
                    <img src="https://learnenglishteens.britishcouncil.org/sites/teens/files/styles/article/public/field/image/rs7778_thinkstockphotos-856706258-low_1.jpg?itok=r5uk6P6u" class="card-img" alt="...">
                    <div class="card-img-overlay"  style="background-color: rgba(0,0,0, .4); ">
                        <h5 class="card-title" style="font-size:30px; color:white;">TRANSFORME</h5>
                        <p class="card-text" style="font-size:50px; color:white; font-weight:bold;">SEU FUTURO</p>
                        <a href="{{route('jobs')}}" class="button-85" role="button" style="position: absolute; bottom:15px;">Candidatar-se</a>
                    </div>
                </div>

                <div class="card text-bg-dark mt-2" style="border:none; ">
                    <img src="https://linganbox.com/wp-content/uploads/sites/327/2022/04/37.-tips-to-the-good-life.jpg" height="220px" alt="" srcset="">
                    <div class="card-img-overlay" style="background-color: rgba(191,48,114, 1);">
                        <h5 class="card-title" style="font-size:30px; color:white;">ALEGRIA E CONFIANÇA</h5>
                        <p class="card-text" style="font-size:30px; color:white; font-weight:bold;">NO TRABALHO</p>
                        <a href="areas-de-trabalho.php" class="button-85" role="button" style="position: absolute; bottom:15px;">Áreas de trabalho</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card text-bg-dark mb-4 mt-1" style="border:none;">
                    <img src="https://kidshealth.org/content/dam/kidshealth/en/center/tile-teen-girl-outside.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay" style="background-color: rgba(191,48,114, 1); ">
                        <h5 class="card-title" style="font-size:30px; color:white;">VALORIZA-MOS</h5>
                        <p class="card-text" style="font-size:30px; color:white; font-weight:bold;">AS NOSSAS PESSOAS</p>
                        <a href="testimonial.php" class="button-85" role="button" style="position: absolute; bottom:15px;">Testemunhos</a>
                    </div>
                </div>

                <div class="card text-bg-dark" style="border:none;">
                    <img src="https://www.research-live.com/img/teens-happy-crop.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay" style="background-color: rgba(0,0,0, .4); ">
                        <h5 class="card-title" style="font-size:30px; color:white;">ACREDITAMOS NO TRABALHO</h5>
                        <p class="card-text" style="font-size:30px; color:white; font-weight:bold;">EM EQUIPA</p>
                        <a href="beneficios-e-vantagens.php" class="button-85" role="button" style="position: absolute; bottom:15px;">Benefícios e Vantagens</a>
                    </div>
                </div>
            </div>

        </div>
    <!-- example end 1 -->


    <!-- grid 2 -->

     <div class="row mt-4">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="carouselFooter" style="margin-bottom:-150px;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox" style="margin-top: -170px ;">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('carreiras/assets/img/banner/banner youtube.png');">
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('carreiras/assets/img/banner/banner youtube 2.png');">
          </div>


        </div>
      </div>
    </div>
  </section><!-- End Hero -->

</div>

    <!-- end grid 2 -->


    <!-- grid 3 -->

  <div class="d-flex mb-4" id="flex">

  <div class="p-2 ">            
        <div class="card text-bg-dark" style="border:none;">
            <img src="https://www.research-live.com/img/teens-happy-crop.jpg" class="card-img" alt="...">
            <div class="card-img-overlay" style="background-color:rgba(0,0,0, .7); ">
                <h5 class="card-title" style="font-size:30px; color:white;">ANIVERSÁRIO</h5>
                <p class="card-text" style="font-size:30px; color:white; font-weight:bold;">DA OMNIDATA</p>
                
            </div>
        </div>
  </div> 

  <div class="p-2 ">
    <div class="card text-bg-dark" style="border:none;">
      <img src="https://www.research-live.com/img/teens-happy-crop.jpg" class="card-img" alt="...">
      <div class="card-img-overlay" style="background-color: rgba(191,48,114, .4); ">
          <h5 class="card-title" style="font-size:30px; color:white;">PREPARAÇÃO DO PLANO </h5>
          <p class="card-text" style="font-size:30px; color:white; font-weight:bold;">OPERACIONAL</p>
          
      </div>
    </div>
  </div>

  <div class="p-2">

  <div class="card text-bg-dark" style="border:none;">
    <img src="https://www.research-live.com/img/teens-happy-crop.jpg" class="card-img" alt="...">
    <div class="card-img-overlay" style="background-color: rgba(0,0,0, .7); ">
        <h5 class="card-title" style="font-size:30px; color:white;">ASSEMBLEIA DA ABERTURA</h5>
        <p class="card-text" style="font-size:30px; color:white; font-weight:bold;">  DO ANO</p>
    </div>
  </div>

  </div>


</div>


    <!-- end grid 3 -->

  </div>


  </section><!-- End Our Portfolio Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color:#BF3072;">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>OMNIDATA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Powered by <a href="https://gsmart.solutions/">G-Smart Solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="carreiras/assets/vendor/jquery/jquery.min.js"></script>
  <script src="carreiras/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="carreiras/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="carreiras/assets/vendor/php-email-form/validate.js"></script>
  <script src="carreiras/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="carreiras/assets/vendor/venobox/venobox.min.js"></script>
  <script src="carreiras/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="carreiras/assets/vendor/counterup/counterup.min.js"></script>
  <script src="carreiras/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="carreiras/assets/vendor/aos/aos.js"></script>



  <!-- Template Main JS File -->
  <script src="carreiras/assets/js/main.js"></script>

</body>

</html>