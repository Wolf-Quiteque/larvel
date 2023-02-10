<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Omnidata - Testemunhos</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="carreiras/assets/carreiras/img/logo_vetorizada.png" rel="icon">
  <link href="carreiras/assets/carreiras/img/logo_vetorizada.png" rel="apple-touch-icon">

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

  <style>
    body{
        font-family: 'Rubik', sans-serif;
    }

    #breadcumb{
        color: #fff;
    }

    .nav-menu>ul>li>a{
        color: white;
        font-family:'Rubik', sans-serif;
        font-weight: 400;
    }

    .omnidata-black{
        font-weight: 900;
        font-size: 22px;
        margin: 8px 0;
        color: black;
    }
/* CSS */
.button-85 {
      padding: 10px 14px;
      border: none;
      outline: none;
      color: rgb(255, 255, 255);
      background: #111;
      cursor: pointer;
      position: relative;
      z-index: 0;
      border-radius: 10px;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }
    
    .button-85:before {
      content: "";
    
      background: linear-gradient(
        45deg,
        #ff0000,
        #ff7300,
        #fffb00,
        #48ff00,
        #00ffd5,
        #002bff,
        #7a00ff,
        #ff00c8,
        #ff0000
      );
    
      position: absolute;
      top: -2px;
      left: -2px;
      background-size: 400%;
      z-index: -1;
      filter: blur(5px);
      -webkit-filter: blur(5px);
      width: calc(100% + 4px);
      height: calc(100% + 4px);
      animation: glowing-button-85 20s linear infinite;
      transition: opacity 0.3s ease-in-out;
      border-radius: 10px;
    }
    
    @keyframes glowing-button-85 {
      0% {
        background-position: 0 0;
      }
      50% {
        background-position: 400% 0;
      }
      100% {
        background-position: 0 0;
      }
    }
    
    .button-85:after {
      z-index: -1;
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background: #222;
      left: 0;
      top: 0;
      border-radius: 10px;
    }
    
    

    /* Menu */
    
    .snip1226 {
      font-family: 'Rubik', sans-serif;
      text-align: center;
      text-transform: uppercase;
      font-weight: 500;
    }
    .snip1226 * {
      box-sizing: border-box;
      -webkit-transition: all 0.35s ease;
      transition: all 0.35s ease;
    }
    .snip1226 li {
      display: inline-block;
      list-style: outside none none;
      margin: 0 0.7em;
      overflow: hidden;
    }
    .snip1226 a {
      padding: 0.3em 0;
      color: rgb(255, 255, 255);
      position: relative;
      display: inline-block;
      letter-spacing: 1px;
      margin: 0;
      text-decoration: none;
    }
    .snip1226 a:before,
    .snip1226 a:after {
      position: absolute;
      -webkit-transition: all 0.35s ease;
      transition: all 0.35s ease;
    }
    .snip1226 a:before {
      bottom: 100%;
      display: block;
      height: 3px;
      width: 100%;
      content: "";
      background-color: #F6839C;
    }
    .snip1226 a:after {
      padding: 0.3em 0;
      position: absolute;
      bottom: 100%;
      left: 0;
      content: attr(data-hover);
      color: white;
      white-space: nowrap;
    }
    .snip1226 li:hover a,
    .snip1226 .current a {
      transform: translateY(100%);
    }
    
    /* End menu */

    /* Carousel Footer Style */

    .carouselFooter{
        height: calc(60vh - 65px); 
        overflow: hidden; 
        background-size: cover; 
        background-position: top right; 
        background-repeat: no-repeat;
        margin-bottom: -200px;
    }

    /* End Carousel Footer */

    /* REPONSIVITY */

    @media (max-width:420px){

    #larguraTotal{
     max-width: 100%;
    }

    .carouselFooter{
        display: none !important;
    }
       
    #hero, #hero .carousel-item {
    /* height: calc(100vh - 70px); */
    height: 400px;
    }

    #flex{
     flex-direction: column;
    }

    }

    /* END RESPONSIVITY */

    
.popular-places .owl-nav {
  display: none;
}

.popular-places .owl-dots {
  margin-top: 40px;
  text-align: center;
}

.popular-places .owl-dots .owl-dot span  {
  width: 12px;
  height: 12px;
  background-color: #cdcdcd!important;
  display: inline-block;
  border-radius: 50%;
  margin: 0 3px;
}

.popular-places .owl-dots .active span {
  background-color: #4883ff!important;
}

.popular-places .owl-dots button {
  outline: none;
}

.popular-item { margin-top: 15px; margin-bottom: 15px; }

.popular-places .popular-item .thumb {
  position: relative;
}

.popular-places .popular-item .thumb img {
  position: relative;
  width: 100%;
  overflow: hidden;
  z-index: 1;
  border-radius: 5px;
}

.popular-places .popular-item .thumb .text-content {
  position: absolute;
  bottom: 20px;
  left: 20px;
  right: 20px;
  z-index: 9;
  color: #fff;
}

.popular-places .popular-item .thumb .text-content h4 {
  font-size: 19px;
  font-weight: 500;
  letter-spacing: 0.5px;
  margin-top: 0px;
  margin-bottom: 5px;
}

.popular-places .popular-item .thumb .text-content span {
  font-size: 13px;
  font-weight: 300;
  letter-spacing: 0.5px;
  display: block;
}

.popular-places .popular-item .thumb .plus-button {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 9;
}

.featured-item { margin-bottom: 30px; }

.popular-places .popular-item .thumb .plus-button i {
  width: 30px;
  height: 30px;
  line-height: 30px;
  display: inline-block;
  text-align: center;
  border: 1px solid #fff;
  border-radius: 5px;
  color: #fff;
  transition: all 0.5s;
}

.popular-places .popular-item .thumb .plus-button i:hover {
  background-color: rgba(250,250,250,0.3);
}

.featured-places .featured-item .thumb {
  position: relative;
  z-index: 1;
}

.featured-places .featured-item .thumb img {
  width: 100%;
  overflow: hidden;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.featured-places .featured-item .thumb .overlay-content {
  position: absolute;
  z-index: 9;
  top: 30px;
  left: 30px;
  color: #fff;
}

.featured-places .featured-item .thumb .overlay-content li {
  display: inline;
  margin-right: 3px;
}

.featured-places .featured-item .thumb .date-content {
  position: absolute;
  z-index: 9;
  top: 30px;
  right: 30px;
  color: #fff;
  text-align: center;
  width: 90px;
  height: 90px;
  display: inline-block;
  text-align: center;
  vertical-align: middle;
  background-color: #4883ff;
  border-radius: 50%;
}

.featured-places .featured-item .thumb .date-content h6 {
  font-size: 24px;
  font-weight: 700;
  margin-top: 18px;
  margin-bottom: 5px;
  letter-spacing: 0.5px;
}

.featured-places .featured-item .thumb .date-content span {
  font-size: 12px;
  font-weight: 300;
  text-transform: uppercase;
  display: block;
  letter-spacing: 0.5px;
}

.featured-places .featured-item .down-content {
  background-color: #fff;
  box-shadow: 0px 5px 15px rgba(0,0,0,0.1);
  padding: 20px 20px 0;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

.featured-places .featured-item .down-content h4 {
  margin-top: 0px;
  font-size: 20px;
  font-weight: 600;
  color: #232323;
  margin-bottom: 5px;
}

.featured-places .featured-item .down-content span {
  display: block;
  font-size: 14px;
  color: #4883ff;
  margin-bottom: 15px;
}

.featured-places .featured-item .down-content span strong { 
  font-size: 22px;  
}

.featured-places .featured-item .down-content p {
  margin-bottom: 20px;
}

.featured-places .featured-item .down-content .col-md-6 {
  padding-left: 0px;
  padding-right: 0px;
}

.featured-places .featured-item .down-content .text-button {
  text-align: center;
  height: 50px;
  line-height: 50px;
  border-top: 1px solid #ddd;
  margin: 0px -20px;
}

.featured-places .featured-item .down-content .first-button {
  border-right: 1px solid #ddd;
}

.featured-places .featured-item .down-content .text-button a {
  font-size: 12px;
  text-transform: uppercase;
  color: #7a7a7a;
  letter-spacing: 0.5px;
  text-decoration: none;
  display: inline-block;
  width: 100%;
  transition: all 0.5s;
}

.featured-places .featured-item .down-content .text-button a:hover {
  color: #4883ff;
}


  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" style="background-color:#BF3072; border-bottom: 3 solid #BF3072;">
    <div class="container" style="margin-top: 10px;">

      <div class="logo float-left" style="margin-top: -1px;">
       <p style="margin-bottom: -20px; font-size: 25px; font-weight:700; color:white;">
          <a href="{{route('jobs.carreiras')}}" style="color: white;">OMNIDATA LDA</a>
       </p>
        <!-- <a href="carreiras.php"><img src="carreiras/assets/carreiras/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul class="snip1226">
            <li ><a href="{{route('jobs.seromnidata')}}" data-hover="SER OMNIDATA">SER OMNIDATA</a></li>
            <li ><a href="{{route('jobs.areas')}}"  data-hover="AREAS DE TRABALHO">ÁREAS DE TRABALHO</a></li>
            <li><a href="{{route('jobs.beneficios')}}" data-hover="BENEFÍCIOS E VANTAGENS">BENEFÍCIOS e VANTAGENS</a></li>
            <li class="current"><a href="{{route('jobs.testemunhos')}}" data-hover="TESTEMUNHOS">TESTEMUNHOS</a></li>
        </ul>
      </nav>
    <!-- .nav-menu -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <section class="small-section bg-dark-alfa-30 mt-55" style="background-image: url('https://storage.pixteller.com/designs/designs-images/2021-01-18/01/youtube-simple-minimal-banner-1-60056cdb6e529.png'); background-size:cover;   background-repeat: no-repeat;">
    <div class="relative container align-left">
        
        <div class="row" style="padding: 10px 0 ;">
            
            <div class="col-md-8">
                <div class="hs-line-8 no-transp font-alt mb-xs-10" id="breadcumb" style="font-size: 36px;">
                    OMNIDATA                
                </div>                     
                <div class="hs-line-14 font-alt mb-xs-10 bold" id="breadcumb" style="letter-spacing: normal; font-size:46px; font-weight:800;">
                    TESTEMUNHOS
                </div>
            </div>

        </div>
        
    </div>
</section>
  
  <!-- End Hero -->

  <main id="main">

 
    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

      <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="carreiras/img/1.png" alt="">
                                </div>
                                <div class="text-content" style="background-color: rgba(0,0,0,0.4); padding:10px;" style="background-color: rgba(0,0,0,0.4); padding:10px;">
                                    <h4>ANTONIETA LENDA</h4>
                                    <span><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi atque cumque ab culpa provident itaque nemo ratione vitae incidunt voluptas, doloribus repellat saepe similique odit, fuga adipisci soluta repellendus modi."</em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="carreiras/img/2.png" alt="">
                                </div>
                                <div class="text-content" style="background-color: rgba(0,0,0,0.4); padding:10px;" >
                                    <h4>BERNARDO NGOLOMBOLE</h4>
                                    <span><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi atque cumque ab culpa provident itaque nemo ratione vitae incidunt voluptas, doloribus repellat saepe similique odit, fuga adipisci soluta repellendus modi."</em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="carreiras/img/3.png" alt="">
                                </div>
                                <div class="text-content" style="background-color: rgba(0,0,0,0.4); padding:10px;" style="background-color: rgba(0,0,0,0.4); padding:10px;">
                                    <h4>ESMERALDA VIAGEM</h4>
                                    <span><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi atque cumque ab culpa provident itaque nemo ratione vitae incidunt voluptas, doloribus repellat saepe similique odit, fuga adipisci soluta repellendus modi."</em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="carreiras/img/4.png" alt="">
                                </div>
                                <div class="text-content" style="background-color: rgba(0,0,0,0.4); padding:10px;">
                                    <h4>LIZANDRA FERRO</h4>
                                    <span><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi atque cumque ab culpa provident itaque nemo ratione vitae incidunt voluptas, doloribus repellat saepe similique odit, fuga adipisci soluta repellendus modi."</em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="carreiras/img/5.png" alt="">
                                </div>
                                <div class="text-content" style="background-color: rgba(0,0,0,0.4); padding:10px;">
                                    <h4>IRINEU MARTINS</h4>
                                    <span><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi atque cumque ab culpa provident itaque nemo ratione vitae incidunt voluptas, doloribus repellat saepe similique odit, fuga adipisci soluta repellendus modi."</em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="carreiras/img/6.png" alt="">
                                </div>
                                <div class="text-content" style="background-color: rgba(0,0,0,0.4); padding:10px;">
                                    <h4>EUNICE ANTÓNIO</h4>
                                    <span><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi atque cumque ab culpa provident itaque nemo ratione vitae incidunt voluptas, doloribus repellat saepe similique odit, fuga adipisci soluta repellendus modi."</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Powered by <a href="https://gsmart.solutions/">G-Smart Solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

</body>

</html>