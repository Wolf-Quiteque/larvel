@extends('site.layout.master')

@section('page_title', 'Contactos')

@section('content')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contactos</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contactos</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">


        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localização:</h4>
                <p>Avenida 21 de Janeiro (Morro Bento 2) Luanda, Angola</p>
                <p>Belas Business Park, Ed. Namibe, 8º andar</p>
                <p>#loja - serpa pinto</p>
                <p>#loja - miramar</p>
                <p>#loja - morro bento-nosso centro</p>
                <p>#loja - futungo</p>


              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@omnidata.co.ao</p>
                <p>reclamacoes@omnidata.co.ao</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefone:</h4>
                <p>(+244) 222 725 975</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <iframe style="border:0; width: 100%; height: 400px;"  
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15767.380117337849!2d13.1823869!3d-8.8939964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5a1349eff928714!2sOMNIdata%20Trading%20Lda.!5e0!3m2!1spt-PT!2sao!4v1656973637219!5m2!1spt-PT!2sao" width="600" 
            allowfullscreen frameborder="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

    
@endsection