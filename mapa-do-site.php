<?php include 'inc/inc.seo.php'; ?>


</head>

<body>

   <!--================Header Menu Area =================-->
   <?php include 'inc/inc.header.php'; ?>
   <!--================Home Banner Area =================-->
   <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
         <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
               <div class="mb-3 mb-md-0">
                  <h1><?= $title; ?></h1>
               </div>
               <div class="page_link">
                  <a href="/">Home</a>
                  <a href="informacoes"><?= $title; ?></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================End Home Banner Area =================-->





   <!--================About  Area =================-->
   <section class="about-area mt-5 mb-5">
      <div class="container">
         <div class="row align-items-center">

            <div class="col-md-6 ml-auto">

               <ul style="list-style: inside;">
                  <li><a href="/" alt="Termonunes" title="Termonunes">home</a></li>
                  <li><a href="sobre-nos">sobre nos</a></li>
                  <li><a alt="Galeria" title="Galeria">Galeria</a></li>
                  <li><a href="servicos" alt="Serviços" title="Serviços">Serviços</a>
                     <ul>
                        <li><a href="compra-e-venda-de-sucata" alt="Compra e Venda de sucata" title="Compra e Venda de sucata">Compra e Venda de Sucata</a></li>
                     </ul>
                  </li>
                  <li><a href="informacoes" alt="Informações" title="Informações">Informações</a></li>
                  <li><a href="politica-de-privacidade" alt="Politica de Privacidade" title="Politica de Privacidade">Politica
                        de Privacidade</a></li>

               </ul>
            </div>




         </div>
      </div>
   </section>
   <!--================About Area End =================-->

   <!-- ================ testimonial section start ================= -->
   <!-- <section class="testimonial">
      <div class="container">
         <div class="testi_slider owl-carousel owl-theme">
            <div class="item">
               <div class="testi_item">
                  <div class="testimonial_image">
                     <img src="img/elements/tes1.jpg" alt="<?= $title; ?>">
                  </div>
                  <div class="testi_item_content">
                     <p>
                        “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw
                        very years created for seed have without. Can't him fowl his can not ready for game”
                     </p>
                     <h4>- Dr. Suzanne Holroyd -</h4>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="testi_item">
                  <div class="testimonial_image">
                     <img src="img/elements/tes1.jpg" alt="<?= $title; ?>">
                  </div>
                  <div class="testi_item_content">
                     <p>
                        “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw
                        very years created for seed have without. Can't him fowl his can not ready for game”
                     </p>
                     <h4>- Dr. Suzanne Holroyd -</h4>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="testi_item">
                  <div class="testimonial_image">
                     <img src="img/elements/tes1.jpg" alt="<?= $title; ?>">
                  </div>
                  <div class="testi_item_content">
                     <p>
                        “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw
                        very years created for seed have without. Can't him fowl his can not ready for game”
                     </p>
                     <h4>- Dr. Suzanne Holroyd -</h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- ================ testimonial section end ================= -->



   <!--================ Start Brands Area =================-->

   <!--================ End Brands Area =================-->

   <!-- start footer Area -->
   <?php include 'inc/inc.footer.php'; ?>
   <!-- End footer Area -->

</body>

</html>