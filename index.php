<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">


    <title>Hotel Manaus</title>
    <?php
    session_start();
        include_once("headLink.php");
    ?>
    <style>
        #teste:hover{
            color:blue
        }
        </style>
</head>
<body>
    <?php
       
        include("menu.php");
    ?>

   <div class="home">
        
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_subtitle">Hotel de luxo</div>
                                        <div class="home_title">Ótimos serviços, Bem localizado</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider_2.jpg)"></div>
                    <div class="home_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_subtitle">Hotel de luxo</div>
                                        <div class="home_title">Ótimos serviços, Bem localizado</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider_3.jpg)"></div>
                    <div class="home_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_subtitle">Hotel de luxo</div>
                                        <div class="home_title" >Ótimos serviços, Bem localizado</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots">
                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                    <li class="home_slider_custom_dot active">01</li>
                    <li class="home_slider_custom_dot">02</li>
                    <li class="home_slider_custom_dot">03</li>
                </ul>
            </div>

        </div>
    </div>


<div class="intro">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Intro Content -->
                <div class="col-lg-5 intro_col">
                    <div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up">
                        <div class="intro_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">Hotel de Luxo</div>
                                <div class="section_title"><h2>Relaxe em Nosso Hotel</h2></div>
                            </div>
                            <div class="intro_text">
                                <p>Quartos aconchegantes esperam por você, temos todos os tipos de acomodações, cadastre-se no link abaixo para obter total acesso!</p>
                            </div>
                            <div class="intro_link"><a href="cadastro.php">Ver Quartos</a></div>
                            <a href="reserva.php" class="button_container intro_button"><div class="button text-center"><span>Faça uma Reserva</span></div></a>
                        </div>
                    </div>
                </div>

                <!-- Intro Image -->
                <div class="col-lg-7 intro_col">
                    <div class="intro_images magic_up">
                        <!-- Image credit: https://unsplash.com/@yuni_ladyday2 -->
                        <div class="intro_1 intro_img"><img src="images/intro_1.jpg" alt=""></div>
                        <!-- Image credit: https://unsplash.com/@liliane -->
                        <div class="intro_2 intro_img"><img src="images/intro_2.jpg" alt=""></div>
                        <!-- Image credit: https://unsplash.com/@brucemars -->
                        <div class="intro_3 intro_img"><img src="images/intro_3.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="big_room">
        <div class="container-fluid">
            <div class="row row-xl-eq-height">
                <div class="col-xl-6 order-xl-1 order-2">
                    <div class="big_room_slider_container">

                        <!-- Big Room SLider -->
                        <div class="owl-carousel owl-theme big_room_slider">
                            
                            <!-- Slide -->
                            <div class="owl-item">
                                <!-- Image credit: https://unsplash.com/@jbriscoe -->
                                <div class="background_image" style="background-image:url(images/casal1.jpg)"></div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item">
                                <!-- Image credit: https://unsplash.com/@jbriscoe -->
                                <div class="background_image" style="background-image:url(images/casal2.jpg)"></div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item">
                                <!-- Image credit: https://unsplash.com/@jbriscoe -->
                                <div class="background_image" style="background-image:url(images/bg.jpg)"></div>
                            </div>

                        </div>

                        <div class="big_room_slider_nav_container d-flex flex-row align-items-start justify-content-start">
                            <div class="big_room_slider_prev big_room_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            <div class="big_room_slider_next big_room_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-2 order-1">
                    <div class="big_room_content">
                        <div class="big_room_content_inner magic_up">
                            <div class="section_title_container">
                                <div class="section_subtitle">Hotel de Luxo</div>
                                <div class="section_title"><h2>Conheça nossos quartos de Casal</h2></div>
                            </div>
                            <div class="big_room_text">
                                <p>Além da localização privilegiada, , o Hotel Manaus oferece apartamentos Deluxe Couple, para duas pessoas, com conforto e comodidade para noites de sono tranquilas e relaxantes, num ambiente clean e espaçoso. </p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial_stars">
                                    <ul class="d-flex flex-row align-items-start justfy-content-start">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial_text">“ Os quartos são muito bons, recomendo eles.</div>
                                <div class="testimonial_author d-flex flex-row align-items-center justify-content-start">
                                    <div class="testimonial_author_image"><img src="images/testimonial.png" alt=""></div>
                                    <div class="testimonial_author_name"><a href="#">Sérgio camillo</a><span>, Cliente</span></div>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Gallery -->

    <div class="gallery">
        <div class="gallery_slider_container">
            
            <!-- Gallery Slider -->
            <div class="owl-carousel owl-theme gallery_slider magic_up">
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="images/gallery_1.jpg"><img src="images/gallery_1.jpg" alt=""></a>
                </div>
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="images/gallery_2.jpg"><img src="images/gallery_2.jpg" alt=""></a>
                </div>
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="images/gallery_3.jpg"><img src="images/gallery_3.jpg" alt=""></a>
                </div>
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="images/gallery_4.jpg"><img src="images/gallery_4.jpg" alt=""></a>
                </div>
                <div class="owl-item gallery_item">
                    <div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
                    <a class="colorbox" href="images/gallery_5.jpg"><img src="images/gallery_5.jpg" alt=""></a>
                </div>
            </div>

        </div>

        <!-- Nav -->
        <div class="gallery_slider_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col clearfix">
                        <div class="gallery_slider_nav_content d-flex flex-row align-items-start justify-content-start">
                            <div class="gallery_slider_prev gallery_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            <div class="gallery_slider_next gallery_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>

    </div>


    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Logo -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_logo_container">
                        <div class="footer_logo">
                            <a href="#" class="text-center">
                                <div class="footer_logo_subtitle">hotel</div>
                                <div class="footer_logo_title">Manaus</div>
                                <div class="footer_logo_stars">
                                    <ul class="d-flex flex-row align-items-start justfy-content-start">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
                    </div>
                </div>

                <!-- Footer Menu -->
                <div class="col-lg-5 footer_col">
                    <div class="footer_menu">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="index.php">Início</a></li>
                            <li><a href="reserva.php">Faça sua Reserva</a></li>
                            <li><a href="cadastro.php">Cadastrar</a></li>
                        </ul>
                        <div class="footer_menu_text">
                            <p>Hotel Manaus</p>
                        </div>
                    </div>
                </div>

                <!-- Footer Contact -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_contact clearfix">
                        <div class="footer_contact_content float-lg-right">
                            <ul>
                                <li>Endereço: <span>Rua das Flores</span></li>
                                <li>Telefone: <span>+55 92 98414 0234</span></li>
                                <li>Email: <span>wagner@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>







    <script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>