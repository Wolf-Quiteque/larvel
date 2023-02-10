@extends('site.layout.master')

@section('page_title','Certificados e Prémios')

@section('content')
    
  <main id="main" style="background-color:white;">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Certificados e Prêmios</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Certificados e Prêmios</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <img src="frontend/img/certificates/certificate1.png" class="img-fluid" alt="">
             
              <div class="btn-wrap">
              <h3>ISO 9001:2015</h3>
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
             
              <img src="frontend/img/certificates/certificate2.png" class="img-fluid" alt="">
              <div class="btn-wrap">
              <h3>CAE</h3>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <img src="frontend/img/certificates/certificate3.png" class="img-fluid" alt="">
              <div class="btn-wrap">
              <h3>CAE</h3>

              </div>
            </div>
          </div>


             <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <img src="frontend/img/certificates/certificate4.png" class="img-fluid" alt="">
              <div class="btn-wrap">
              <h3>DELLEMC</h3>

              </div>
            </div>
          </div>

          
        </div>

        <div class="row" style="margin-top:60px;">

           <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
             <img src="frontend/img/certificates/certificate5.png" class="img-fluid" alt="">
              <div class="btn-wrap">
              <h3>WORLD CONFEDERATION OF BUSINESSES</h3>

              </div>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <img src="frontend/img/certificates/certificate6.png" class="img-fluid" alt="">
              <div class="btn-wrap">
              <h3>THE BIZZ 2016</h3>

              </div>
            </div>
          </div>


            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <img src="frontend/img/certificates/certificate7.png" class="img-fluid" alt="">
          
              <div class="btn-wrap">
              <h3>THE BIZZ 2017</h3>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

@endsection