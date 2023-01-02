<?php include 'inc/inc.seo.php'; ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                        <h1><?=$title;?></h1>
                    </div>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="contato" alt="Contato" title="Contato"><?=$title;?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Entre em Contato</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contato_envia.php" method="post" >
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" required name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'"
                                        placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" required name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Insira o endereço de e-mail'" placeholder="E-mail">
                                </div>
                            </div>
                            <input type="hidden" name="zoiao" value="">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" required name="telefone" id="telefone" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'"
                                        placeholder="Telefone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" required name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'"
                                        placeholder=" Mensagem"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LetNRIhAAAAAAHJnlxFBpqsuGqDH4dVu_kKMagL"></div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                        </div>
                    </form>


                </div>

                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-home"></i></span>
                        <div class="media-body">
                            <h3>Av. Manuel Antônio Gonçalves, 687</h3>
                            <p>Jardim Guanca, São Paulo - SP</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-tablet-alt"></i></span>
                        <div class="media-body">
                            <!-- <h3><a href="tel:1128026358">(11) 2802-6358</a></h3> -->
                            <h3><a href="tel:11947056081">(11) 94705-6081</a></h3>
                            <h3><a href="tel:11940235823">(11) 94023-5823</a></h3>
                            <!-- <p>Seg. a Sex: 08hs às 17:30</p> -->
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-mail-bulk"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:contato@acovalentesucatas.com.br">contato@acovalentesucatas.com.br</a>
                            </h3>
                            <p>Envie-nos um e-mail a qualquer momento!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-block mb-5 pb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.082815234112!2d-46.570824099999996!3d-23.4935264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5f66c5cea915%3A0xf1158c88c6a039a2!2sAv.%20Manuel%20Ant%C3%B4nio%20Gon%C3%A7alves%2C%20687%20-%20Jardim%20Guanca%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002152-000!5e0!3m2!1spt-BR!2sbr!4v1657288448395!5m2!1spt-BR!2sbr"
                    width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->






    <!-- start footer Area -->
    <?php include 'inc/inc.footer.php'; ?>
    <!-- End footer Area -->

</body>

</html>