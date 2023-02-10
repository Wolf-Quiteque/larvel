@extends('site.layout.master')

@section('page_title', 'Storage')

@section('content')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Storage</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Storage</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">

          <div class="d-flex flex-wrap justify-content-center">
            <img style="width: 900px !important; height: 500px !important;" src="https://s3.eu-west-3.amazonaws.com/dealna/images/data-center%20(1).jpg" alt="">
          </div>

            <h1 class="mt-3" style="text-align: center; margin-bottom:20px;">Storage</h1>

            <br>

            <div>

                <p>
                    A capacidade de armazenamento de informações e dados da sua empresa, deve acompanhar o seu crescimento e evolução. Nem sempre, a compra de múltiplos HDs externos será a melhor solução para o seu negócio, sendo necessário um sistema de Storage para atender de forma mais adequada à todas as necessidades do seu negócio.
                </p>

                <p>
                    Para que a empresa tenha o melhor armazenamento para as suas necessidades, é importante conhecer os tipos de Storage disponíveis no mercado. Veja a seguir:
                </p>
 
            </div>
            <br>
            <div>
            <h2 class="mt-4 mb-4">DAS – Direct Attached Storage</h2>

                <p>
                    Esse dispositivo é conectado diretamente aos computadores (sejam eles estações de trabalhos ou servidores), e é basicamente uma extensão do armazenamento. Ele proporciona alta versatilidade para grandes volumes de informação, possibilita o backup e o compartilhamento de dados entre os computadores. Além disso, ele pode otimizar a performance de algumas aplicações. 
                </p>
            </div>
            <br>
            <div>
            <h2 class="mt-4 mb-4">NAS – Network Attached Storage</h2>

                <p>
                    Esse tipo de dispositivo é conectado diretamente na rede, e possui um sistema operacional completo, podendo ser utilizado como servidor. Por meio dele, é possível centralizar e gerenciar os dados, além de compartilhar essas informações. Diferentemente do DAS, esse tipo de Storage pode ser compartilhado por múltiplos usuários, além de realizar o armazenamento via blocos, e não arquivos.
                </p>
            </div>
            <br>
            <div>
            <h2 class="mt-4 mb-4">SAN – Storage Area Network</h2>

                <p>
                    O SAN se trata de uma rede de armazenamento dedicada, que é conectada diretamente à rede e realiza o armazenamento por blocos. Esse tipo de rede garante um melhor desempenho, segurança e velocidade, além de centralizar o Storage. É considerada uma das melhores soluções em armazenamento.
                </p>
            </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

    
@endsection