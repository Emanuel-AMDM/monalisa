@extends('layouts.pages')
@section('contentpage')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-7">
            <h2 data-aos="fade-down">Conheça a <span>Monalisa Scolari</span></h2>
            <p data-aos="fade-up">
              Monalisa é daquelas que é apaixonada por moda, tem uma rotina corrida como a de muita gente, ela adora compartilhar o dia a dia real, sem filtro e sem perfeição. 
              Fala sobre moda de um jeito leve, dá dicas de maquiagem rápida, truques que facilitam a vida e mostra que dá, sim, pra se cuidar no meio da correria. 
              E o melhor: ela sempre tem um cupom de desconto pra quem acompanha e quer aproveitar essas marcas também.
            </p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Saiba Mais</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url('{{ url('/img/hero-carousel/hero-carousel-1.jpg') }}')">
      </div>
      <div class="carousel-item" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-2.jpg')}}')"></div>
      <div class="carousel-item" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-3.jpg')}}')"></div>
      <div class="carousel-item" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-4.jpg')}}')"></div>
      <div class="carousel-item" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-5.jpg')}}')"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Cupons e Trabalhos Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>CUPONS DE DESCONTO</h2>
          <p>Aproveite os cupons exclusivos das marcas preferidas da Monalisa.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <a href="http://www.Fitaup.com/influ-c">
              <div class="card-item rounded">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg rounded-left" style="background-image: url('{{url('/img/fitaup.jpg')}}');"></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">FITA UP</h4>
                      <p class="text-justify"> Produtos confortáveis, práticos e pensados pra valorizar você e seu corpo. Do básico ao ousado, encontre a solução perfeita para todos os seios.
                        </br>
                        <strong style="color:#AF5567;">15% de desconto usando o cupom: MONALISA.</strong>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <a href="http://www.guavaskin.com/loja">
              <div class="card-item rounded">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg rounded-left" style="background-image: url('{{url('/img/guava.jpg')}}');"></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">GUAVA</h4>
                      <p> Veio para simplificar a sua rotina de beleza com make rápida, multifuncional e skincare, fácil de usar e levar, e que cuida da sua pele. </br>
                        <strong style="color:#AF5567;">10% de desconto usando o cupom: MONALISA.</strong>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <a href="https://olhar.site/kiwtshop-monalisascolari-ghwz3">
              <div class="card-item rounded">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg rounded-left" style="background-image: url('{{url('/img/kiwt.jpg')}}');"></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">KIWT</h4>
                      <p class="text-justify"> Encontre peças que combinam autenticidade, conforto e estilo. Sem níquel, com banho de ouro 18K ou prata e acabamento hipoalergênico, pra usar todos os dias sem deixar de ser cool e despojada.
                        </br>
                        <strong style="color:#AF5567;">10% de desconto usando o cupom: MONA10.</strong>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <a href="https://nacarpratas.com.br">
              <div class="card-item rounded">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg rounded-left" style="background-image: url('{{url('/img/nacarpratas.jpg')}}');"></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">NÁCAR PRATAS</h4>
                      <p class="text-justify">Joias em prata 925 com design delicado e atemporal como anéis, colares, pulseiras e muito mais.
                        </br>
                        <strong style="color:#AF5567;">10% de desconto usando o cupom: MONALISA.</strong>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div><!-- End Card Item -->

           <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
              <a href="https://minhacea.cea.com.br/?lcea=MTI3MTI5XzZhYTE0Yw">
                <div class="card-item rounded">
                  <div class="row">
                    <div class="col-xl-5">
                      <div class="card-bg rounded-left" style="background-image: url('{{url('/img/c&a.jpg')}}');"></div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title">C&A</h4>
                        <p class="text-justify">Desde o básico até o look completo: roupas para sair, treinar ou relaxar. Roupa feminina, infantil, masculina, bolsas, acessórios, calçados e até maquiagem, tudo em um só lugar.
                          </br>
                          <strong style="color:#AF5567;">10% de desconto usando o código de consultora: SCOLARI</strong>.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card-item rounded">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg rounded-left" style="background-image: url('{{url('/img/renner.jpg')}}');"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">RENNER</h4>
                    <p class="text-justify">Você encontra do look do dia a dia ao visual pra sair. Tem moda feminina, masculina, infantil, roupas básicas, bolsas, acessórios, calçados e perfumes. Tudo pra montar seu estilo completo, do seu jeito.
                      </br>
                      <strong style="color:#AF5567;">Desconto usando o cupom de desconto: SCOLARI</strong>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
        
        </div>
      </div>
    </section><!-- End Cupons e Trabalhos Section -->


    <!-- ======= Serviços da Monalisa Scolari ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>SERVIÇOS</h2>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-ticket"></i>
              </div>
              <h3>Cupons Exclusivos</h3>
              <p>Descontos especiais em várias marcas que eu uso, gosto e recomento para você economizar.</p>
              <a href="{{url('/services/cupons')}}" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-book-open"></i>
              </div>
              <h3>Manual de Estilo</h3>
              <p>Descubra seu estilo pessoal com inspirações diárias, sugestões de peças e truques práticos. Tenha mais confiança, economize tempo, evite compras por impulso e conte com orientação profissional para montar um guarda-roupa versátil, atual e sustentável.
              </p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-shirt"></i>
              </div>
              <h3>Análise de Closet</h3>
              <p>Organize seu guarda-roupa, identifique o que falta e evite compras desnecessárias. Economize tempo e dinheiro enquanto renova seu estilo criando combinações novas com peças que você já tem.</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-suitcase"></i>
              </div>
              <h3>Montagem de Mala para viagem</h3>
              <p>Montar a mala com ajuda profissional reduz o estresse, economiza tempo e evita esquecimentos. Você leva só o essencial, com tudo bem organizado, adaptado ao destino e pronto pra viagem, com mais praticidade e menos peso.</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-route"></i>
              </div>
              <h3>Guia de Viagem</h3>
              <p>Garanta looks prontos para cada ocasião, com peças versáteis que otimizam espaço na mala. Seu estilo adaptado ao clima e ao destino, sugestão de acessórios inteligentes e reduza o estresse com tudo planejado. Assim, você viaja com mais praticidade, leveza e confiança no visual.</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-clapperboard"></i>
              </div>
              <h3>Produção de Conteúdo e UGC</h3>
              <p>Conteúdo autêntico, inspirador e com mais conexão com o público. A produção de estilo valoriza o visual, enquanto o UGC traz verdade e engajamento. Juntos, elevam a marca com alcance orgânico e relevância real.</p>
              <a href="#" class="readmore stretched-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Serviços Alternativos ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url('{{url('/img/monalisa-alt-services.jpg')}}');" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Monalisa Scolari: Cupons exclusivos e gestão de Instagram para sua marca</h3>
            <p>Com vasta experiência, Monalisa oferece cupons de desconto para as melhores lojas e ajuda negócios como a Jupuglia a crescer nas redes sociais.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-tag-fill flex-shrink-0"></i>
              <div>
                <h4><a href="#" class="stretched-link">Cupons Guava</a></h4>
                <p>Descontos exclusivos em produtos selecionados da loja Guava, com ofertas especiais para seguidores da Monalisa.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-basket3-fill flex-shrink-0"></i>
              <div>
                <h4><a href="#" class="stretched-link">Cupons Fitup</a></h4>
                <p>Aproveite promoções imperdíveis nas lojas Fitup, com descontos especiais para você renovar seu estilo.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-gift-fill flex-shrink-0"></i>
              <div>
                <h4><a href="#" class="stretched-link">Cupons Kiwty</a></h4>
                <p>Economize nas compras da Kiwty com cupons exclusivos fornecidos pela Monalisa para seus seguidores.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-instagram flex-shrink-0"></i>
              <div>
                <h4><a href="#" class="stretched-link">Gestão de Instagram - Jupuglia</a></h4>
                <p>Monalisa administra e impulsiona o Instagram da loja Jupuglia, criando conteúdo de qualidade e atraindo novos clientes.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->


    <!-- ======= Features Section - Monalisa Scolari ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Cupons Exclusivos</h4>
            </a>
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Gestão de Instagram</h4>
            </a>
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Consultoria Personalizada</h4>
            </a>
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Suporte Dedicado</h4>
            </a>
          </li>

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Ofertas e Cupons Exclusivos para Você</h3>
                <p class="fst-italic">
                  Tenha acesso a descontos exclusivos em diversas lojas parceiras. Economize nas suas compras com cupons que só a Monalisa Scolari oferece.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Descontos atualizados semanalmente.</li>
                  <li><i class="bi bi-check2-all"></i> Cupons válidos em lojas físicas e online.</li>
                  <li><i class="bi bi-check2-all"></i> Acesso fácil pelo celular ou computador.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{url('/img/features-coupons.jpg')}}" alt="Cupons Exclusivos" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Gestão Profissional de Instagram</h3>
                <p class="fst-italic">
                  Impulsione sua marca nas redes sociais com estratégias personalizadas para o seu público-alvo, aumentando seu alcance e engajamento.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Criação de conteúdo relevante e criativo.</li>
                  <li><i class="bi bi-check2-all"></i> Análise de métricas para otimização contínua.</li>
                  <li><i class="bi bi-check2-all"></i> Crescimento orgânico e sustentável.</li>
                  <li><i class="bi bi-check2-all"></i> Atendimento personalizado e suporte constante.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{url('/img/features-instagram.jpg')}}" alt="Gestão de Instagram" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Consultoria Personalizada</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Avaliação detalhada das necessidades do seu negócio.</li>
                  <li><i class="bi bi-check2-all"></i> Planejamento estratégico alinhado aos seus objetivos.</li>
                  <li><i class="bi bi-check2-all"></i> Orientação prática para resultados reais.</li>
                </ul>
                <p class="fst-italic">
                  Conte com acompanhamento profissional para tirar suas dúvidas e maximizar seu potencial.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{url('/img/features-consultoria.jpg')}}" alt="Consultoria Personalizada" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Suporte Dedicado e Ágil</h3>
                <p class="fst-italic">
                  Atendimento exclusivo para resolver suas dúvidas e auxiliar na melhor experiência possível com nossos serviços.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Resposta rápida via chat e e-mail.</li>
                  <li><i class="bi bi-check2-all"></i> Equipe qualificada e atenciosa.</li>
                  <li><i class="bi bi-check2-all"></i> Soluções personalizadas para você.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{url('/img/features-suporte.jpg')}}" alt="Suporte Dedicado" class="img-fluid">
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Features Section - Monalisa Scolari -->


    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Portfólio de Serviços</h2>
          <p>Veja alguns dos trabalhos realizados pela Monalisa Scolari para impulsionar negócios e marcas.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-instagram">Gestão Instagram</li>
            <li data-filter=".filter-consultoria">Consultoria</li>
            <li data-filter=".filter-cupons">Criação de Cupons</li>
            <li data-filter=".filter-treinamentos">Treinamentos</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-instagram">
              <div class="portfolio-content h-100">
                <img src="{{url('/img/projects/instagram-1.jpg')}}" class="img-fluid" alt="Gestão Instagram">
                <div class="portfolio-info">
                  <h4>Gestão Instagram - Cliente A</h4>
                  <p>Estratégia e crescimento de seguidores ativos</p>
                  <a href="{{url('/img/projects/instagram-1.jpg')}}" title="Gestão Instagram - Cliente A"
                    data-gallery="portfolio-gallery-instagram" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="Mais detalhes" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-consultoria">
              <div class="portfolio-content h-100">
                <img src="{{url('/img/projects/consultoria-1.jpg')}}" class="img-fluid" alt="Consultoria">
                <div class="portfolio-info">
                  <h4>Consultoria - Empresa B</h4>
                  <p>Planejamento personalizado para aumento de vendas</p>
                  <a href="{{url('/img/projects/consultoria-1.jpg')}}" title="Consultoria - Empresa B"
                    data-gallery="portfolio-gallery-consultoria" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="Mais detalhes" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-cupons">
              <div class="portfolio-content h-100">
                <img src="{{url('/img/projects/cupons-1.jpg')}}" class="img-fluid" alt="Criação de Cupons">
                <div class="portfolio-info">
                  <h4>Cupons Promocionais - Loja C</h4>
                  <p>Campanha de cupons para fidelização de clientes</p>
                  <a href="{{url('/img/projects/cupons-1.jpg')}}" title="Cupons Promocionais - Loja C"
                    data-gallery="portfolio-gallery-cupons" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="Mais detalhes" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-treinamentos">
              <div class="portfolio-content h-100">
                <img src="{{url('/img/projects/treinamentos-1.jpg')}}" class="img-fluid" alt="Treinamentos">
                <div class="portfolio-info">
                  <h4>Treinamento de Vendas - Equipe D</h4>
                  <p>Capacitação focada em técnicas de vendas e atendimento</p>
                  <a href="{{url('/img/projects/treinamentos-1.jpg')}}" title="Treinamento de Vendas - Equipe D"
                    data-gallery="portfolio-gallery-treinamentos" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="Mais detalhes" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <!-- Pode adicionar mais itens semelhantes aqui -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->


    <!-- ======= Depoimentos ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Depoimentos</h2>
          <p>O que os clientes dizem sobre a experiência de trabalhar com a Monalisa Scolari.</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{url('/img/testimonials/cliente1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Ana Paula Mendes</h3>
                  <h4>Empreendedora</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    A consultoria da Monalisa foi essencial para reposicionar minha marca no Instagram. Resultado: mais engajamento e mais vendas!
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{url('/img/testimonials/cliente2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Lucas Andrade</h3>
                  <h4>Coach de Carreira</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Profissional incrível! O planejamento de conteúdo que a Monalisa criou para o meu perfil transformou minha presença digital.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{url('/img/testimonials/cliente3.jpg')}}" class="testimonial-img" alt="">
                  <h3>Renata Lopes</h3>
                  <h4>Artesã</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fiz o treinamento de redes sociais com a Monalisa e recomendo demais! Didática excelente e muito prática.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Depoimentos -->

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Trabalhe com Monalisa Scolari</h3>
              <p>Monalisa oferece cupons exclusivos para as lojas Guava, Fitup e Kiwty, garantindo descontos incríveis para você.</p>
              <p>Além disso, ela cuida da gestão de Instagram de marcas como a Jupuglia, aumentando o engajamento e fortalecendo a presença digital.</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Entre em contato</h3>
              <p>Quer saber mais sobre os cupons ou contratar o serviço de gerenciamento de redes sociais? Envie uma mensagem para Monalisa!</p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Nome" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Telefone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Enviando...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua mensagem foi enviada com sucesso. Obrigada!</div>

                  <button type="submit">Enviar</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

@endsection