<?php 
    session_start();
    require 'providers/Database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Red.Es | Agencia de ecoturismo </title>

    <!-- Favicon -->
    <link rel="icon" href="img/bg-img/Logo.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

    <!-- Search Form Area -->
    <div class="fancy-search-form d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Close Btn -->
                    <div class="search-close-btn" id="closeBtn">
                        <i class="ti-close" aria-hidden="true"></i>
                    </div>
                    <!-- Form -->
                    <form action="#" method="get">
                        <input type="search" name="fancySearch" id="search" placeholder="| Enter Your Search...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a href="index.html"><img src="img/bg-img/Logo.ico" class="logo-brand" alt="logo" width="50px"/>
                        <a class="navbar-brand" href="index.php">RED.ES</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Inicio<span class="sr-only"></span></a>
                               <!-- </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="static-page.html">Static Page</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Cursos</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="question.html">Preguntas frecuentes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contactanos</a>
                                </li> 


                            </ul>
                            <!-- Search & log Area -->

                            <div class="fancy-search-and-shop-area nav-item">

                                 <a href="dashboard.php" class="btn fancy-btn fancy-light text-center">Inicio sesión</a>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img bg-overlay animated-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        
                        <h2>Fundación Red Escolar de Aventura</h2>
                        <a href="#" class="btn fancy-btn">Sobre nosotros</a>
                        <a href="contact.html" class="btn fancy-btn">Contactanos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Top Feature Area Start ***** -->
   
    <!-- ***** Top Feature Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-us-text">
                        <h2>Fundación Red Escolar de Aventura</h2>
                        <p>Buscamos jóvenes líderes que quieran cambiar el mundo.</p>
                        <p>Si eres estudiante y buscas un lugar para hacer tu Servicio Social Escolar, te invitamos a conocer FUNREDES. Haz parte de nuestro maravilloso grupo de jóvenes activistas que luchan por el medio ambiente.</p>
                        <a href="question.html" class="btn fancy-btn fancy-dark">Leer más</a>
                    </div>
                </div>
                <div class="skills-side-thumb-right">       
                        <img src="img/bg-img/about-1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Skills Area Start ***** -->
    <section class="fancy-skills-area section-padding-200"> 
        <!-- Side Thumb -->
                <div class="container">
            <div class="row">
           <div class="skills-side-thumb-right">       
                        <img src="img/bg-img/skills.jpg" alt="">
                </div>

 
                <div class="col-12 col-md-6 col-xl-5 ml-auto">
                    <div class="section-heading">
                        <h2>¿Quiénes somos?</h2>
                        <p>La fundación Red Escolar de Aventura es una entidad sin ánimo de lucro enfocado a la educación ambiental y el ecoturismo para niños y jóvenes regulado por la Alcaldía Mayor de Bogotá.</p>
                    </div>

                    <a href="question.html" class="btn fancy-btn fancy-dark">Conoce más</a>
                </div>
            </div>
        </div>
    </section>
<!---------------------------------- -->
    <section class="fancy-blog-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Servicios que ofrecemos</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/blog-img/blog-1.jpg" alt="">
                        <div class="blog-content">
                            <h5><a href="static-page.html">Promotoría ambiental</a></h5>
                            <p>Fomentar el conocimiento y aprecio de los recursos naturales y de los procesos ecológicos para la erradicación de la pobreza y a elevar la calidad de vida de la
                                población.</p>
                            <a href="static-page.html">Saber mas</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <img src="img/blog-img/blog-2.jpg" alt="">
                        <div class="blog-content">
                            <h5><a href="static-page.html">Ecoturismo</a></h5>
                            <p>Buscar que se salvaguarden los recursos naturales y se tenga oportunidad de aprovecharlos, mientras se fomenta un crecimiento social, cultural y económico de la población local.</p>
                            <a href="static-page.html">Saber mas</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1.5s">
                        <img src="img/blog-img/blog-3.jpg" alt="">
                        <div class="blog-content">
                            <h5><a href="static-page.html">Gestión escolar de riesgo</a></h5>
                            <p>Conocer los riesgos que en un momento determinado pueden afectar a la comunidad escolar, trabajar sobre sus causas para evitar que esos riesgos se conviertan en desastres.</p>
                            <a href="static-page.html">Saber mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        <div class="footer-content section-padding-60-50">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget -->
                    <div class="col-3 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            
                            <div class="footer-social-widegt d-flex align-items-center ">
                                <li><a href="https://www.facebook.com/Funredes/?ref=br_rs" target="_blank"><img src="img/icons/facebook.svg" class="img-fluid p-3"></a></li>
                                <li ><a href="https://www.youtube.com/user/Redesaventura" target="_blank"><img src="img/icons/youtube.svg" class="img-fluid p-3"></a></li>
                                <li ><a href="https://www.instagram.com/fun_red.es/" target="_blank"><img src="img/icons/instagram.svg" class="img-fluid p-3"></a></li>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Footer Copywrite -->
        <div class="footer-copywrite-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p class="text-info"><a href="https://colorlib.com" target="_blank">
                                    En colaboracion con: <i class="fa fa-heart-o" aria-hidden="true"></i> by Colorlib</a>  Todos los derechos reservados | Copyright © 2020 
                                </p>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>