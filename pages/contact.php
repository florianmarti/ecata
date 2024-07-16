
<?php 
include "../templates/head.php" //head
?>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        
        <!--  ====== header-area-start=======================================  -->
        <?php include "../templates/header.php"?>
        <!--  header-area-end  -->


        
   

        <main>
            <!-- ======other-page-area-start=========================================== -->
            <div class="other-page-area">
                <div class="page-height  primary-overlay d-flex align-items-center position-relative">
                    <div class="other-page-bg position-absolute w-100 h-100 bg-no-repeat bg-cover z-index-1" data-background="/images/about-page/about-page-hero.jpg"></div><!-- home2 slider bg -->

                    <div class="container">
                        <div class="row">

                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="page-content text-center mt-110">

                                    <h1 class="text-white mb-15 text-capitalize" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="150"><span class="f-700">Contacto</span> directo</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item"><a class="text-white" href="/">Inicio</a></li>
                                        <li class="breadcrumb-item active text-capitalize text-white" aria-current="page">Contacto</li>
                                        </ol>
                                    </nav>

                                </div>
                            </div><!-- /col -->

                        </div><!-- /row -->
                    </div><!-- /container -->
                </div>
            </div>
            <!-- slider-area-end  -->


   <!-- ====== contact-area-start
            ==================================================== -->
            <div class="contact-area contact-page mb-165 mt-165">
                <div class="contact-wrapper position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12  col-sm-12 col-12">
                                <div class="contact-wrapper">
                                    <ul class="contact-info-content d-md-flex justify-content-between d-lg-block mb-lg-0 mb-5">
                                        <li class="contact-location s-contact text-md-center text-lg-left mb-35 transition-3 d-lg-flex d-flex d-md-block">
                                            <div class="contact-icon contact-icon-bg-1 d-inline-block text-center mr-30">
                                                <span class="text-white d-inline-block"><i class="fas fa-map-marker-alt"></i></span>
                                            </div><!-- /contact-icon -->
                                            <div class="contact-text">
                                                <h4 class="mb-10">Direccion</h4>
                                                <p class="secondary-color mb-0">Donde el vino exista
                                                    <br> Estaremos</p>
                                            </div>
                                        </li><!-- /contact-location -->

                                         

                                        <li class="contact-email s-contact text-md-center text-lg-left mb-35 transition-3 d-lg-flex d-flex d-md-block">
                                            <div class="contact-icon contact-icon-bg-3 d-inline-block text-center mr-30">
                                                <span class="text-white d-inline-block"><i class="fas fa-envelope"></i></span>
                                            </div><!-- /contact-icon -->
                                            <div class="contact-text">
                                                <h4 class="mb-10">Email</h4>
                                                <p class="mb-0">
                                                    <a class="secondary-color2 primary-hover d-block" href="#">info@ecatas.com</a>
                                                </p>
                                            </div>
                                        </li><!-- /contact-email -->
                                    </ul><!-- /contact-info-content -->
                                </div><!-- /contact-wrapper -->
                            </div><!-- /col -->
                            <div class="col-xl-8 col-lg-8 col-md-12  col-sm-12 col-12">
                                <div class="contact-wrapper mt--5">
                                    <div class="contact-form">
                                        <div class="con-title px-md-5 px-lg-0 text-md-center text-lg-left">
                                            <h4 class="mb-30">Sientete libre de escribirnos</h4>
                                            <p class="mb-2">Responderemos en 24 horas.</p>
                                        </div><!-- /title -->
                                        <form action="/php/mail.php" method="POST" id="contact-form">
                                            <div class="contact-info text-md-center text-lg-left pt-20">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-30" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                                        <input class="name w-100 primary-border2 pl-20 pt-15 pb-15 pr-10" type="text" name="inputName" id="inputName" placeholder="Nombre *" required><!-- /name -->
                                                    </div><!-- /col -->
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-30" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                                                        <input class="email w-100 primary-border2 pl-20 pt-15 pb-15 pr-10" type="email" name="inputEmail" id="inputEmail" placeholder="Email *" required><!-- /email -->
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="row ">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-30" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                                        <textarea class="massage w-100 primary-border2 pl-20 pt-20" name="inputMessage" id="inputMessage" placeholder="Mensaje *" required></textarea><!-- /textarea -->
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="my-btn">
                                                    <button class="btn primary-bg2 text-uppercase rounded-0 f-500" type="submit" name="submit" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="form-message mt-20"></p>
                                    </div><!-- /contact-form -->
                                </div><!-- /contact-wrapper -->
                            </div><!-- /col -->
                        </div><!-- /row -->
                        <div class="row over-hidden contact-page-map mt-150">
                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="500">
                                <div class="map-wrapper z-index-1" id="mapwrapper"></div>
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div><!-- /contact-wrapper -->
            </div>
            <!-- contact-area-end  -->
        


        </main>

        
          <!-- ====== footer-area-start ============================================ -->
          <?php include "../templates/footer.php"?>