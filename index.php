<?php include 'inc/inc.seo.php'; ?>

</head>

<body>
  <?php include 'inc/inc.header.php'; ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" id="btn1-slide"></li> -->
      <!-- <li data-target=" #carouselExampleIndicators" data-slide-to="1" id="btn2-slide"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" id="btn3-slide"></li> -->
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="servicos">
          <picture>
            <source class="d-block w-100" media="(max-width: 768px)" srcset="img/banner/banner1.jpg">
            <source class="d-block w-100" media="(min-width: 769px)" srcset="img/banner/banner1.jpg">
            <img src="img/banner/banner1.jpg" alt="Compra e Venda" title="Compra e Venda" class="d-block w-100">
          </picture>
        </a>

      </div>

      <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a> -->
    </div>

    <div class="site-section  pt-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-4">
            <h1 class="section-title mb-3">Bem-vindo a Termonunes</h1>
          </div>

          <div class="col-lg-12 ml-auto">
            <div class="row mb-4 justify-content-around">
              <div class="col-12 text-center mb-4">
                <h2 class="section-title mb-4">Conheça Nossos Serviços</h2>
              </div>

              <div class="col-md-4 mt-3 mb-3">
                <div class="service new-card text-center ">
                  <i class="fas fa-recycle"></i>
                  <a href=''>
                    <h2 class="text-center mt-3">Chiller</h2>
                  </a>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ratione tempora perspiciatis
                    architecto quia a. Est accusamus sapiente sit? Modi, ipsum illo. Harum quisquam eos quas. A ea
                    excepturi ut.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row no-gutters bg-green">
        <div class="col-md-12">
          <h3>Não compramos sucatas de carros!</h3>
        </div>
      </div>
    </div>

    <section class="about-area pt-5 pb-4">
      <div class="container">
        <div class="row align-items-lg-center justify-content-center">
          <div class="col-md-6 mb-5 mb-lg-0 position-relative">
            <img src="img/about/sobre-nos.jpg" class="img-fluid rounded-circle" alt="Image" title="Image">
          </div>
          <div class="col-md-5 ">

            <h3 class="section-sub-title">Sobre Nós</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam id, tenetur itaque voluptates vel ut
              cumque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam id, tenetur itaque voluptates vel ut
              cumque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam id, tenetur itaque voluptates vel ut
              cumque?</p>
            <p><a href="sobre-nos" class="btn main_btn">Saiba mais</a></p>
          </div>
        </div>
      </div>
    </section>
    <div class="site-section  pt-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center mb-4">
            <h3 class="section-title mb-4">Galeria</h3>
          </div>
          <div class="col-md-3 mb-3 mt-3 card-obj-fit">
            <a href="img/galeria/chiller-(1).jpg" data-fancybox="gallery" alt="<?= $title; ?>" title="<?= $title; ?>">
              <img class="" src="img/galeria/chiller-(1).jpg" alt="<?= $title; ?>" title="<?= $title; ?>" />
            </a>
            <p class="mt-2">Chiller 1</p>
          </div>
          <div class="col-md-3 mb-3 mt-3 card-obj-fit">
            <a href="img/galeria/chiller-(2).jpg" data-fancybox="gallery" alt="<?= $title; ?>" title="<?= $title; ?>">
              <img class="" src="img/galeria/chiller-(2).jpg" alt="<?= $title; ?>" title="<?= $title; ?>" />
            </a>
            <p class="mt-2">Chiller 2</p>
          </div>
          <div class="col-md-3 mb-3 mt-3 card-obj-fit">
            <a href="img/galeria/chiller-(3).jpg" data-fancybox="gallery" alt="<?= $title; ?>" title="<?= $title; ?>">
              <img class="" src="img/galeria/chiller-(3).jpg" alt="<?= $title; ?>" title="<?= $title; ?>" />
            </a>
            <p class="mt-2">Chiller 3</p>
          </div>
          <div class="col-md-3 mb-3 mt-3 card-obj-fit">
            <a href="img/galeria/chiller-(4).jpg" data-fancybox="gallery" alt="<?= $title; ?>" title="<?= $title; ?>">
              <img class="" src="img/galeria/chiller-(4).jpg" alt="<?= $title; ?>" title="<?= $title; ?>" />
            </a>
            <p class="mt-2">Chiller 4</p>
          </div>
          <div class="col-md-3 mb-3 mt-3 card-obj-fit">
            <a href="img/galeria/chiller-(5).jpg" data-fancybox="gallery" alt="<?= $title; ?>" title="<?= $title; ?>">
              <img class="" src="img/galeria/chiller-(5).jpg" alt="<?= $title; ?>" title="<?= $title; ?>" />
            </a>
            <p class="mt-2">Chiller 5</p>
          </div>
          <div class="col-md-3 mb-3 mt-3 card-obj-fit">
            <a href="img/galeria/chiller-(6).jpg" data-fancybox="gallery" alt="<?= $title; ?>" title="<?= $title; ?>">
              <img class="" src="img/galeria/chiller-(6).jpg" alt="<?= $title; ?>" title="<?= $title; ?>" />
            </a>
            <p class="mt-2">Chiller 6</p>
          </div>
          <div class="col-md-3 mb-3 mt-3 card-obj-fit">
            <a href="img/galeria/chiller-(7).jpg" data-fancybox="gallery" alt="<?= $title; ?>" title="<?= $title; ?>">
              <img class="" src="img/galeria/chiller-(7).jpg" alt="<?= $title; ?>" title="<?= $title; ?>" />
            </a>
            <p class="mt-2">Chiller 7</p>
          </div>
          <div class="col-md-3 mb-3 mt-3 card-obj-fit">
            <a href="img/galeria/chiller-(8).jpg" data-fancybox="gallery" alt="<?= $title; ?>" title="<?= $title; ?>">
              <img class="" src="img/galeria/chiller-(8).jpg" alt="<?= $title; ?>" title="<?= $title; ?>" />
            </a>
            <p class="mt-2">Chiller 8</p>
          </div>
          <div class="col-md-12 text-center pb-5 pt-3">
            <a href="galeria" alt="Galeria" title="Galeria" class="btn main_btn">VEJA MAIS</a>
          </div>

        </div>
      </div>
    </div>



    <?php include 'inc/inc.parallax.php'; ?>

    <?php include 'inc/inc.footer.php'; ?>


</body>

</html>