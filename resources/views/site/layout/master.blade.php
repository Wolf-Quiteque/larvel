<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Omnidata - @yield('page_title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/logo_vetorizada.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('rontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}f" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- ChatBot -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assetsChat/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assetsChat/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assetsChat/css/responsive.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assetsChat/css/jquery.convform.css')}}">
  <!-- Chatbot JS -->
  <script type="text/javascript" src="{{asset('frontend/assetsChat/js/jquery-3.1.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/assetsChat/js/jquery.convform.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/assetsChat/js/custom.js')}}"></script>


  <!--Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/clients.css')}}" rel="stylesheet">
   <link href="{{asset('frontend/assets2/css/style.css')}}" rel="stylesheet">

  <!-- CHAT CSS e JS -->
  <link rel="stylesheet" href="{{asset('frontend/assets/css/chat.css')}}">


<!-- ===========GTRANSLATE===========
  GTranslate: https://gtranslate.io/ -->

<style type="text/css">

.botao{
  background-color:#BF3072; 
  color:white;
   border-radius: 5px;
   padding: 8px 15px;
}

a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}

</style>

<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'pt',autoDisplay: false}, 'google_translate_element2');}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>

<script type="text/javascript">
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
</script>

<!-- ==============END GTRANSLATE================== -->

<!-- POP UPS LEADS AQUISITIONS -->

<!-- GetResponse Analytics -->
  <script type="text/javascript">
      
  (function(m, o, n, t, e, r, _){
          m['__GetResponseAnalyticsObject'] = e;m[e] = m[e] || function() {(m[e].q = m[e].q || []).push(arguments)};
          r = o.createElement(n);_ = o.getElementsByTagName(n)[0];r.async = 1;r.src = t;r.setAttribute('crossorigin', 'use-credentials');_.parentNode .insertBefore(r, _);
      })(window, document, 'script', 'https://ga.getresponse.com/script/40f3e781-0ff7-4e1c-8d4e-c512cfbb37d6/ga.js', 'GrTracking');


  </script>
  <!-- End GetResponse Analytics -->

<!-- END POP UPS LEADS AQUISITIONS -->

<script src="{{asset('frontend/assets/js/chat.js')}}"></script>

</head>

{{-- Top part --}}

<body>
    
    <!-- Header  -->

   <header id="header" class="fixed-top" style="border-bottom: 1.5px solid rgba(192,192,192,0.4)">

            @yield('promotion')

            <div class="container d-flex align-items-center mt-2">

            <!-- <h1 class="logo me-auto"><a href="index.html">OMNIDATA</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/" class="logo me-auto">
                <img src="{{asset('frontend/img/logo_vetorizada.png')}}" alt="" class="img-fluid">
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                <li class="dropdown"><a href="#"><span>Sobre nós</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="{{route('site.omnidata')}}">OMNIDATA</a></li>
                    <li><a href="{{route('site.team')}}" >Nossa Equipa</a></li>
                    <li><a href="{{route('site.certificados-e-premios')}}">Certificados e Prémios</a></li>
                    <li><a href="{{route('site.clientes')}}" >Clientes</a></li>
                    <li><a href="{{route('site.galeria')}}">Galeria</a></li>
                    <li><a href="{{route('jobs.carreiras')}}">Carreiras</a></li>
                    </ul>
                </li>
                <li><a href="{{route('site.parceiros')}}">Parceiros</a></li>
                <li class="dropdown"><a href="#"><span>Soluções</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                  <li><a href="{{route('site.redes_sem_fio')}}">Redes sem fio</a></li>
                  <li><a href="{{route('site.seguranca')}}" >Segurança</a></li>
                  <li><a href="{{route('site.cabeamento-utp')}}">Cabeamento UTP</a></li>
                  <li><a href="{{route('site.storage')}}" >Storage</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                  <li><a href="{{route('site.servico-suporte-ti')}}">Serviço de suporte em TI</a></li>
                  <li><a href="{{route('site.sistema-de-informacao')}}" >Sistema de informações</a></li>
                  <li><a href="{{route('site.gestao-de-ti')}}">Gestão de T.I</a></li>
                  <li><a href="{{route('site.gestao-de-infraestruturas')}}" >Gestão de Insfraestruturas</a></li>
                  </ul>
                </li>
                <li><a href="{{route('site.noticias')}}">Notícias</a></li>
                <li><a href="{{route('site.contactos')}}">Contactos</a></li>
                
                <li>
                    <select class="form-select" onchange="doGTranslate(this);" style="margin-left: 10px;">
                    <option value="pt|pt">PT | Português</option>
                    <option value="pt|en"> EN | English</option>
                    </select>
                <div id="google_translate_element2"></div>
                </li>
            
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            </div>
            
    </header>
        
    <!--  End Header -->

    {{-- /* Content */ --}}

    @yield('content')

    {{-- /* End content */ --}}

{{-- /* Footer part */ --}}
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>OMNIDATA</h3>
              <p>
                A OMNIdata é uma empresa Angolana, constituída em 20 de Setembro 1996, integradora de soluções no âmbito de telecomunicação e informática, com grande experiência e elevado grau de responsabilidade.
              </p>
              <div class="social-links mt-3">
                {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Mapa do site</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">Sobre nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços e soluções</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Termos e Condições</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/login">G-smart IT </a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviço e suporte em T.I</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestão de Infraestutura</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sistemas de informação</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestão de T.I</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subscreva a nossa newsletter</h4>
            <p>Receba informações e descontos em primeira mão em todos os nossos serviços</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscrever">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>OMNIDATA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Powered by <a href="#">G-smart Solutions</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->


 <!-- Vendor JS Files --> 
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!--Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

  
<!--Bothelp.io widget -->
<script type="text/javascript" class="animate__animated animate__bounce">!function(){var e={"buttons":[{"type":"whatsapp","token":"+244993428983"},{"type":"email","token":"salomoalteza@gmail.com"}],"color":"#F0645A","position":"right","bottomSpacing":"","callToActionMessage":"Olá, quer ajuda?","displayOn":"everywhere","lang":"en"},t=document.location.protocol+"//bothelp.io",o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=t+"/widget-folder/widget-page.js",o.onload=function(){new BhWidgetPage.init(e)};var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(o,n)}();</script>
<!--Bothelp.io widget -->

</body>
</html>