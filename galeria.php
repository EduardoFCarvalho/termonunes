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
                  <a href="/" alt="Termonunes" title="Termonunes">Home</a>
                  <a href="galeria" alt="Galeria" title="Galeria"><?= $title; ?></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================End Home Banner Area =================-->


   <!-- ================ contact section start ================= -->
   <section class="contact-section ">
      <div class="container">

         <div class="row p-5">
            <div class="col-lg-12">
               <div class="section-tittle text-center mb-0">
                  <span>Nossa</span>
                  <h2 class="wow zoomIn">Galeria</h2>
               </div>
            </div>
         </div>

         <div class="row align-items-center p-4">


            <?php
            $diretoria = "img/galeria/";
            $imagens = glob($diretoria . "*.webp");
            foreach ($imagens as $imagem) {
               echo '
                  <div class="col-md-3 mb-3 mt-3 card-obj-fit">
                    <a href="' . $imagem . '" data-fancybox="gallery"   >
                        <img class="" src="' . $imagem . '"" alt="<?=$title;?>" />
                    </a>
                </div>
                    ';
            }

            ?>

            <div class=" col-md-3 mb-3 mt-3">
               <a class="grouped_elements" rel="group1" href="' . $imagem . '">
                  <img src="' . $imagem . '" alt="<?= $title; ?>" />
               </a>
            </div>
         </div>
      </div>
   </section>
   <!-- ================ contact section end ================= -->




   <!-- start footer Area -->
   <?php include 'inc/inc.footer.php'; ?>
   <!-- End footer Area -->

</body>

</html>