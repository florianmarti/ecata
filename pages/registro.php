<?php 
require "../templates/head.php"
?>
        
     

        <!--  ====== header-area-start=======================================  -->
        <?php require "../templates/header.php"?>
        <!--  header-area-end  -->
         


        <!--  ====== header extra info start================================== -->
        <!-- side-mobile-menu start -->
        <div class="side-mobile-menu white-bg pt-10 pb-30 pl-35 pr-30 pb-100">
            <div class="d-fle justify-content-between w-100">
                <div class="close-icon d-inline-block float-right clear-both mt-15 mb-10">
                    <a href="javascript:void(0);"><span class="icon-clear theme-color"><i class="fa fa-times"></i></span></a>
                </div>
            </div>
            <div class="side-menu-search header-search-content mt-80 pr-15">
                <form action="#" class="position-relative">
                    <input class="w-100 rounded-0 pb-2" type="text" placeholder="Type Keyword...">
                    <a class="position-absolute right-0 top-0 dark-black-color d-block" href="#"><i class="fas fa-search"></i></a>
                </form>
            </div>

            <div class="mobile-menu mt-50 w-100"></div>
            <ul class="social-link pt-85 clear-both">
                <li class="d-inline-block">
                    <a class="facebook-color text-center pr-15 d-inline-block transition-3" href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="d-inline-block">
                    <a class="twitter-color text-center pr-15 d-inline-block transition-3" href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="d-inline-block">
                    <a class="google-plus-color text-center pr-15 d-inline-block transition-3" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="d-inline-block">
                    <a class="linked-in-color text-center d-inline-block transition-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul><!-- social-link -->

            <!-- mobile phone area -->
            <div class="mobile-phone-contact phone-contact mt-30 mb-30">
                <h6 class="f-500 mb-0 d-inline-block pr-2">Call Us</h6>
                <a class="theme-color f-700" href="tell:+8801234567890">+8801234567890</a>
            </div><!-- /mobile phone area -->
            
            <!-- mobile subscribe area -->
            <div class="mobile-subscribe pb-55">
                <h6 class="mb-1">Subscribe to Our Newsletter</h6>
                <form action="#">
                    <div class="subscribe-info mt-15 position-relative">
                        <input class="sub-name w-100 primary-border2 pl-20 pt-15 pb-15 pr-10 secondary-color rounded-0" type="email" name="email" id="m-email" placeholder="Submit email">
                        <span class="secondary-color d-inline-block position-absolute pointer"><i class="far fa-envelope"></i></span>
                    </div>
                </form>
            </div>

        </div><!-- /side-mobile-menu -->
        <div class="body-overlay"></div>


        <!-- header-search-details start -->
        <div class="header-search-details text-center white-bg pt-50 pb-50 pl-10 pr-10">
            <div class="close-icon position-absolute top-0 right-0 mx-4 my-3">
                <a href="javascript:void(0);" class="secondary-color"><i class="fa fa-times"></i></a>
            </div>
            <div class="header-search-content">
                <h3 class="mt-5 pt-5 pb-50">Search</h3>
                <form action="#" class="header-search-form position-absolute">
                    <input class="w-100 rounded-0 pb-20" type="text" placeholder="Type Keyword...">
                    <a class="position-absolute right-0 top-0 dark-black-color d-block" href="#"><i class="fas fa-search"></i></a>
                </form>
            </div>
        </div>
        <!-- header-search-details end -->

        <!-- header extra info end  -->
   

        <main>
            <!-- ======other-page-area-start=========================================== -->
            <div class="other-page-area">
                <div class="page-height  primary-overlay d-flex align-items-center position-relative">
                    <div class="other-page-bg position-absolute w-100 h-100 bg-no-repeat bg-cover z-index-1" data-background="images/about-page/about-page-hero.jpg"></div><!-- home2 slider bg -->

                    <div class="container">
                        <div class="row">

                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="page-content text-center mt-110">

                                    <h1 class="text-white mb-15 text-capitalize" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="150">Mi <span class="f-700">Cuenta</span></h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item"><a class="text-white" href="index.html">Inicio</a></li>
                                        <li class="breadcrumb-item active text-capitalize text-white" aria-current="page">Mi Cuenta</li>
                                        </ol>
                                    </nav>

                                </div>
                            </div><!-- /col -->

                        </div><!-- /row -->
                    </div><!-- /container -->
                </div>
            </div>
            <!-- slider-area-end  -->


            <!-- ====== login-area-start=========================================== -->
            <div class="login-register-area mt-160 mb-105 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="register-area mb-60 bg-light p-4 rounded">
                    <h4 class="text-uppercase text-center mb-4">Sign up</h4>
                    <form action="#">
                                       <div class="register-email mb-20">
                                        <div class="log-email">
                                            <input class="u-name w-100 primary-border2 pl-20 pt-15 pb-15 pr-10"
                                            type="text" name="u-name" id="u-name" required placeholder="Username*">
                                         </div>
                                         <div class="log-email mt-15">
                                            <input class="u-email w-100 primary-border2 pl-20 pt-15 pb-15 pr-10"
                                            type="email" name="u-email" id="u-email" required placeholder="Email address *">
                                         </div>
                                         <div class="log-pass mt-15">
                                            <input class="r-pass w-100 primary-border2 pl-20 pt-15 pb-15 pr-10"
                                            type="password" name="r-pass" id="r-pass" required placeholder="Password">
                                         </div>
                                       </div>
                                   </form>
                </div>
            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>
<!-- /login-area -->
            <!-- login-area-end -->





        </main>

        <!-- ====== footer-area-start ============================================ -->
        
   <?php require "../templates/footer.php"?>  