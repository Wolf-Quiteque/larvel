<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Omnidata - Encontrar Vagas</title>
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

  @include('carreiras.includes.styles')

</head>

<body>

  <!-- ======= Header ======= -->
  @include('carreiras.includes.menu')
  <!-- End Header -->


  <main id="main">

    <div style="background-color:#f1f3f7;">
        <form style="width: 800px; margin:0 auto; padding:50px;" action="" method="post">
            <div class="mb-4">
                <label for="">Palavra-chave</label>
                <input class="form-control" type="text" name="" id="" placeholder="Helpdesk, IT">
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="">País</label>
                    <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Selecionar País</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                <div class="col">
                    <label for="">Província</label>
                    <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Selecionar Província</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                <div class="col">
                    <label for="">Tipo de emprego</label>
                    <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Selecionar</option>
                        <option value="1">Estágio</option>
                        <option value="2">Meio Período</option>
                        <option value="3">Tempo inteiro</option>
                      </select>
                </div>
                <div class="col">
                    <label for="">Áreas de interesse</label>
                    <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Selecionar</option>
                        <option value="1">Estágio</option>
                        <option value="2">Meio Período</option>
                        <option value="3">Tempo inteiro</option>
                      </select>
                </div>
            </div>

            <div class="row d-flex flex justify-content-end">
                <button type="button" class="btn" style="margin-right: 5px; background-color: #BF3072; color:white;">Pesquisar</button>
                <button type="button" class="btn btn-outline-secondary" style="margin-right: 5px;">Limpar</button>
            </div>
            
        </form>
    </div>

    <div class="container mt-4">
        <h3 class="mb-4">Resultado da pesquisa</h3>

        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Oportunidade</th>
                    <th>Área de interesse</th>
                    <th>Tipo de emprego</th>
                    <th>Localização</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="http://">Programador web</a>
                    </td>
                    <td>Programação</td>
                    <td>Tempo integral</td>
                    <td>Luanda, Viana</td>
                </tr>
                <tr>
                    <td>
                        <a href="http://">Programador web</a>
                    </td>
                    <td>Programação</td>
                    <td>Tempo integral</td>
                    <td>Luanda, Viana</td>
                </tr>
                <tr>
                    <td>
                        <a href="http://">Programador web</a>
                    </td>
                    <td>Programação</td>
                    <td>Tempo integral</td>
                    <td>Luanda, Viana</td>
                </tr>
                <tr>
                    <td>
                        <a href="http://">Programador web</a>
                    </td>
                    <td>Programação</td>
                    <td>Tempo integral</td>
                    <td>Luanda, Viana</td>
                </tr>
                <tr>
                    <td>
                        <a href="http://">Programador web</a>
                    </td>
                    <td>Programação</td>
                    <td>Tempo integral</td>
                    <td>Luanda, Viana</td>
                </tr>
                <tr>
                    <td>
                        <a href="http://">Programador web</a>
                    </td>
                    <td>Programação</td>
                    <td>Tempo integral</td>
                    <td>Luanda, Viana</td>
                </tr>
                <tr>
                    <td>
                        <a href="http://">Programador web</a>
                    </td>
                    <td>Programação</td>
                    <td>Tempo integral</td>
                    <td>Luanda, Viana</td>
                </tr>
            </tbody>
        </table>

        <br> <br>

    </div>

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

  {{-- Data tables --}}
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
  </script>
  {{-- End data tables --}}

  <!-- Template Main JS File -->
  <script src="carreiras/assets/js/main.js"></script>



</body>

</html>