@extends('layouts.pages')
@section('contentpage')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>MONALISA SCOLARI</h2>
        <p class="text-white">MODA E ESTILO</p>
        <ol>
          <li><a href="{{url('/')}}">Início</a></li>
          <li>Sobre</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');"></div>

          <div class="col-lg-7">
            <h2>Quem é: @monalisascolari</h2>
            <div class="our-story">
              <h4>DESDE 2002</h4>
              <h3>Minha história</h3>
              <p>Monalisa é uma jovem inspiradora, com um talento notável para a
                comunicação e um forte desejo de fazer a diferença na vida das
                pessoas.
                <br>
                Sua jornada acadêmica e experiência internacional demonstram
                sua dedicação à sua paixão pela moda e estilo, bem como sua
                determinação em adquirir conhecimentos e experiências valiosas.
                <br>
                Ela se formou em Design de Moda na faculdade Belas Artes e foi se
                aprofundar na área em Florença, na Itália pelo Istituto Marangoni.
                Seu propósito é ajudar mulheres a encontrarem seu estilo, projetar a
                imagem que desejam transmitir ao mundo e dar dicas para facilitar
                o dia a dia de cada uma delas.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span> Manual de estilo</span></li>
                <li><i class="bi bi-check-circle"></i> <span> Personal Shopper</span></li>
                <li><i class="bi bi-check-circle"></i> <span> Guia de viagem</span></li>
                <li><i class="bi bi-check-circle"></i> <span> Análise do closet</span></li>
              </ul>
              {{-- <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
              </div> --}}
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    {{-- <section id="alt-services-2" class="alt-services section-bg mb-5">
      <div class="container" data-aos="fade-up">

        <h3>Trabalhos</h3>

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Manual de Estilo
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row justify-content-around gy-4">
                  <div class="col-lg-6 img-bg" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');" data-aos="zoom-in"
                    data-aos-delay="100"></div>

                  <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Manual de Estilo</h3>
                    <p> Em resumo, contratar um profissional de estilo oferece uma série de benefícios, ajudando a aprimorar
                      sua imagem pessoal, simplificar suas escolhas de moda e promover um guarda-roupa mais funcional e
                      alinhado ao seu estilo de vida.
                    </p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                      <i class="bi bi-easel flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Aprimoramento da imagem pessoal</a></h4>
                        <p>Profissionais de estilo são especialistas em entender o que
                        funciona melhor para o seu tipo de corpo, estilo de vida e personalidade, contribuindo para uma
                        imagem pessoal mais atraente e confiante.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                      <i class="fa-solid fa-clock flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Economia de tempo</a></h4>
                        <p>Ao contar com a orientação de um manual de estilo, você economiza tempo na
                        escolha de roupas e na combinação de peças, resultando em um processo de vestir-se mais eficiente.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                      <i class="fa-solid fa-money-bills flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Compras mais conscientes</a></h4>
                        <p>Um profissional de estilo pode ajudar a identificar lacunas no seu
                        guarda-roupa, orientando em compras mais conscientes e direcionadas para peças que realmente
                        complementam seu estilo e são versáteis.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                      <i class="fa-solid fa-user-check flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Autoconfiança aprimorada</a></h4>
                        <p>Ao receber orientações personalizadas, você desenvolve uma
                          compreensão mais profunda do que funciona para você, promovendo autoconfiança na sua aparência
                          e nas escolhas de moda.</p>
                      </div>
                    </div><!-- End Icon Box -->

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Personal Shopper
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row justify-content-around gy-4">
                  <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Personal Shopper</h3>
                    <p>Em resumo, a contratação de um personal shopper vai além da praticidade, proporcionando uma
                      experiência de compra mais eficiente, personalizada e alinhada às necessidades e estilo de vida do
                      cliente.
                    </p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                      <i class="fa-solid fa-clock flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Economia de tempo</a></h4>
                        <p>O personal shopper poupa o cliente do tempo investido na busca por produtos
                        específicos, realizando essa tarefa de maneira eficiente.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                      <i class="bi bi-patch-check flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Personalização do serviço</a></h4>
                        <p>Cada cliente é único, e o personal shopper adapta suas
                        recomendações de acordo com as preferências individuais, garantindo um serviço altamente
                        personalizado.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                      <i class="fa-solid fa-shop-slash flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Evitar compras impulsivas</a></h4>
                        <p>Com orientação profissional, há uma redução do risco de compras
                          impulsivas, uma vez que o personal shopper auxilia na tomada de decisões mais ponderadas.
                        </p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                      <i class="fa-solid fa-shirt flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Expertise em estilo</a></h4>
                        <p>Profissionais dessa área possuem conhecimento aprofundado em moda e estilo,
                        ajudando os clientes a fazerem escolhas que melhor se adequam ao seu gosto pessoal e às últimas
                        tendências.</p>
                      </div>
                    </div><!-- End Icon Box -->
                  </div>

                  <div class="col-lg-6 img-bg" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');" data-aos="zoom-in"
                    data-aos-delay="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Montagem de mala para viagem
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row justify-content-around gy-4">
                  <div class="col-lg-6 img-bg" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');" data-aos="zoom-in"
                    data-aos-delay="100"></div>

                  <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Montagem de mala para viagem</h3>
                    <p>Em resumo, contratar alguém para fazer a montagem da mala para viagem oferece conveniência,
                      eficiência e a garantia de que sua bagagem estará bem preparada para a jornada, otimizando espaço
                      e minimizando preocupações.
                    </p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                      <i class="fa-solid fa-clock flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Economia de tempo</a></h4>
                        <p>Ao delegar a tarefa de montagem da mala, você economiza tempo,
                        especialmente se estiver lidando com uma viagem de última hora ou se tiver uma agenda ocupada.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                      <i class="fa-solid fa-face-tired flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Redução do estresse pré-viagem</a></h4>
                        <p>Delegar a tarefa de montagem da mala pode ajudar a reduzir o
                        estresse pré-viagem, permitindo que você se concentre em outros aspectos importantes da sua
                        jornada.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                      <i class="fa-solid fa-circle-check flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Eficiência na organização</a></h4>
                        <p>Um profissional pode otimizar a disposição dos itens na mala,
                        maximizando o espaço disponível e garantindo que tudo seja empacotado de forma organizada.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                      <i class="fa-solid fa-thumbs-up flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Minimização de esquecimentos</a></h4>
                        <p>Com a ajuda de alguém experiente, há menos probabilidade de
                        esquecer itens essenciais, pois o profissional pode seguir uma lista detalhada e garantir que tudo seja
                        incluído.</p>
                      </div>
                    </div><!-- End Icon Box -->

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFor">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                Análise do closet
              </button>
            </h2>
            <div id="collapseFor" class="accordion-collapse collapse" aria-labelledby="headingFor" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row justify-content-around gy-4">
                  <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Análise do closet</h3>
                    <p>Fazer uma análise do guarda-roupa traz mais praticidade e clareza na hora de se vestir. 
                      Com organização eficiente, identificação de lacunas e reaproveitamento criativo das peças, você economiza tempo e 
                      dinheiro, evita compras desnecessárias e descobre novas possibilidades com o que já tem.
                    </p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                      <i class="fa-solid fa-clock flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Economia de tempo e dinheiro</a></h4>
                        <p>Ao conhecer melhor o que você possui, você pode evitar comprar
                        itens duplicados ou desnecessários. Isso pode ajudar a economizar tempo e dinheiro, direcionando
                        seus gastos para as peças que realmente precisa ou deseja.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                      <i class="bi bi-patch-check flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Organização eficiente</a></h4>
                        <p>Uma análise do guarda-roupa permite que você avalie o que possui,
                        identifique itens desnecessários, e organize seu espaço de forma mais eficiente. Isso pode ajudar a
                        maximizar o espaço disponível e tornar mais fácil encontrar e acessar suas roupas diárias.</p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                      <i class="fa-solid fa-door-closed flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Identificação de lacunas no guarda-roupa</a></h4>
                        <p>Ao examinar suas roupas, você pode identificar itens
                        ausentes para certas ocasiões e preencher essas lacunas em sua coleção.
                        </p>
                      </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                      <i class="fa-solid fa-brain flex-shrink-0"></i>
                      <div>
                        <h4><a href="" class="stretched-link">Renovação e criatividade</a></h4>
                        <p> Ao revisitar seu guarda-roupa, você pode encontrar novas maneiras de
                        usar peças antigas de maneiras inovadoras, revitalizando seu estilo sem fazer novas compras.
                        </p>
                      </div>
                    </div><!-- End Icon Box -->
                  </div>

                  <div class="col-lg-6 img-bg" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');" data-aos="zoom-in"
                    data-aos-delay="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section 2 --> --}}

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">
        <h3 class="mb-5">Abordagem de trabalho</h3>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-1 color-blue flex-shrink-0"></i>
              <div>
                <h6>Reunião de alinhamento e entrega de questionário</h6>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-2 color-orange flex-shrink-0"></i>
              <div>
                <h6>Análise das respostas</h6>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-3 color-green flex-shrink-0"></i>
              <div>
                <h6>Produção do Manual de Estilo</h6>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-4 color-pink flex-shrink-0"></i>
              <div>
                <h6>Entrega do material em PDF</h6>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-5 color-pink flex-shrink-0"></i>
              <div>
                <h6> Encontro virtual para esclarecimento de dúvidas, se necessário</h6>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-6 color-pink flex-shrink-0"></i>
              <div>
                <h6>Assistência via WhatsApp conforme necessário</h6>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');" data-aos="zoom-in"
            data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Manual de Estilo</h3>
            <p> Em resumo, contratar um profissional de estilo oferece uma série de benefícios, ajudando a aprimorar
              sua imagem pessoal, simplificar suas escolhas de moda e promover um guarda-roupa mais funcional e
              alinhado ao seu estilo de vida.
            </p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Aprimoramento da imagem pessoal</a></h4>
                <p>Profissionais de estilo são especialistas em entender o que
                funciona melhor para o seu tipo de corpo, estilo de vida e personalidade, contribuindo para uma
                imagem pessoal mais atraente e confiante.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="fa-solid fa-clock flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Economia de tempo</a></h4>
                <p>Ao contar com a orientação de um manual de estilo, você economiza tempo na
                escolha de roupas e na combinação de peças, resultando em um processo de vestir-se mais eficiente.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-money-bills flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Compras mais conscientes</a></h4>
                <p>Um profissional de estilo pode ajudar a identificar lacunas no seu
                guarda-roupa, orientando em compras mais conscientes e direcionadas para peças que realmente
                complementam seu estilo e são versáteis.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-solid fa-user-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Autoconfiança aprimorada</a></h4>
                <p>Ao receber orientações personalizadas, você desenvolve uma
                  compreensão mais profunda do que funciona para você, promovendo autoconfiança na sua aparência
                  e nas escolhas de moda.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Personal Shopper</h3>
            <p>Em resumo, a contratação de um personal shopper vai além da praticidade, proporcionando uma
              experiência de compra mais eficiente, personalizada e alinhada às necessidades e estilo de vida do
              cliente.
            </p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="fa-solid fa-clock flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Economia de tempo</a></h4>
                <p>O personal shopper poupa o cliente do tempo investido na busca por produtos
                específicos, realizando essa tarefa de maneira eficiente.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Personalização do serviço</a></h4>
                <p>Cada cliente é único, e o personal shopper adapta suas
                recomendações de acordo com as preferências individuais, garantindo um serviço altamente
                personalizado.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-shop-slash flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Evitar compras impulsivas</a></h4>
                <p>Com orientação profissional, há uma redução do risco de compras
                  impulsivas, uma vez que o personal shopper auxilia na tomada de decisões mais ponderadas.
                </p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-solid fa-shirt flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Expertise em estilo</a></h4>
                <p>Profissionais dessa área possuem conhecimento aprofundado em moda e estilo,
                ajudando os clientes a fazerem escolhas que melhor se adequam ao seu gosto pessoal e às últimas
                tendências.</p>
              </div>
            </div><!-- End Icon Box -->
          </div>

          <div class="col-lg-6 img-bg" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');" data-aos="zoom-in"
            data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Alt Services Section 2 -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');" data-aos="zoom-in"
            data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Montagem de mala para viagem</h3>
            <p>Em resumo, contratar alguém para fazer a montagem da mala para viagem oferece conveniência,
              eficiência e a garantia de que sua bagagem estará bem preparada para a jornada, otimizando espaço
              e minimizando preocupações.
            </p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="fa-solid fa-clock flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Economia de tempo</a></h4>
                <p>Ao delegar a tarefa de montagem da mala, você economiza tempo,
                especialmente se estiver lidando com uma viagem de última hora ou se tiver uma agenda ocupada.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="fa-solid fa-face-tired flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Redução do estresse pré-viagem</a></h4>
                <p>Delegar a tarefa de montagem da mala pode ajudar a reduzir o
                estresse pré-viagem, permitindo que você se concentre em outros aspectos importantes da sua
                jornada.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-circle-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Eficiência na organização</a></h4>
                <p>Um profissional pode otimizar a disposição dos itens na mala,
                maximizando o espaço disponível e garantindo que tudo seja empacotado de forma organizada.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-solid fa-thumbs-up flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Minimização de esquecimentos</a></h4>
                <p>Com a ajuda de alguém experiente, há menos probabilidade de
                esquecer itens essenciais, pois o profissional pode seguir uma lista detalhada e garantir que tudo seja
                incluído.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Análise do closet</h3>
            <p>Fazer uma análise do guarda-roupa traz mais praticidade e clareza na hora de se vestir. 
              Com organização eficiente, identificação de lacunas e reaproveitamento criativo das peças, você economiza tempo e 
              dinheiro, evita compras desnecessárias e descobre novas possibilidades com o que já tem.
            </p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="fa-solid fa-clock flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Economia de tempo e dinheiro</a></h4>
                <p>Ao conhecer melhor o que você possui, você pode evitar comprar
                itens duplicados ou desnecessários. Isso pode ajudar a economizar tempo e dinheiro, direcionando
                seus gastos para as peças que realmente precisa ou deseja.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Organização eficiente</a></h4>
                <p>Uma análise do guarda-roupa permite que você avalie o que possui,
                identifique itens desnecessários, e organize seu espaço de forma mais eficiente. Isso pode ajudar a
                maximizar o espaço disponível e tornar mais fácil encontrar e acessar suas roupas diárias.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-door-closed flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Identificação de lacunas no guarda-roupa</a></h4>
                <p>Ao examinar suas roupas, você pode identificar itens
                ausentes para certas ocasiões e preencher essas lacunas em sua coleção.
                </p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-solid fa-brain flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Renovação e criatividade</a></h4>
                <p> Ao revisitar seu guarda-roupa, você pode encontrar novas maneiras de
                usar peças antigas de maneiras inovadoras, revitalizando seu estilo sem fazer novas compras.
                </p>
              </div>
            </div><!-- End Icon Box -->
          </div>

          <div class="col-lg-6 img-bg" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');" data-aos="zoom-in"
            data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Alt Services Section 2 -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Orçamentos</h2>
        </div>

        <div class="row gy-5">
          <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{url('/img/team/manualdeestilo.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4> Manual de estilo: R$500,00</h4>
              <span>Forma de pagamento: PIX</span>
              <p>50% do valor no início + 50% do valor na entrega ou  100% do valor no início</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{url('/img/team/personalshopper.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Personal Shopper: R$300,00 online - R$500,00 presencial</h4>
              <span>Forma de pagamento: PIX</span>
              <p>100% do valor no início</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{url('/img/team/guiadeviagem.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Guia de viagem: R$300,00 online - R$500,00 presencial</h4>
              <span>Forma de pagamento: PIX</span>
              <p>100% do valor no início</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{url('/img/team/analisecloset.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Análise closet: R$300,00 online - R$500,00 presencial</h4>
              <span>Forma de pagamento: PIX</span>
              <p>100% do valor no início</p>
            </div>
          </div><!-- End Team Member -->
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
            reprehenderit sunt deleniti</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{url('/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{url('/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{url('/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{url('/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{url('/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                    quid.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
@endsection