<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Favicons -->
        <link href="{{ asset('vendor/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('vendor/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;
        0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,
        600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;
        200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body class="index-page">
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="#" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('img/tecolote-cabeza.png') }}" alt="">
                <h1 class="sitename">Tech-Olote</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                <li><a href="#hero" class="active">Principal</a></li>
                <li><a href="#about">Acerca de</a></li>
                <li><a href="#SectionTitle">Servicios</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn" href="{{ route('login') }}">Inicia sesión</a>

            </div>
        </header>

        <main class="main">
            <!-- Hero Section -->
            <section id="hero" class="hero section dark-background">
                <img src="{{ asset('img/tecolote-cabeza-2.png') }}" alt="" data-aos="fade-in">
                <div class="container d-flex flex-column align-items-center">
                    <h2 data-aos="fade-up" data-aos-delay="100">DESCUBRE. APRENDE. CREA.</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Aprende sobre robótica con nosotros</p>
                    <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="space-x-4">
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-700 text-white rounded-lg shadow-lg hover:bg-green-800 transition-all">
                                    Iniciar Sesión
                                </a>
                            @endif
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-lg hover:bg-green-700 transition-all">
                                    Registrarse
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </section><!-- /Hero Section -->

            <!-- About Section -->
            <section id="about" class="about section">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3>Formación centrada en ti</h3>
                            <!-- <img src="{{ asset('img/tecolote-logo.png') }}" class="img-fluid rounded-4 mb-4" alt=""> -->
                            <p>En un mundo que cambia a pasos acelerados, aprender nunca ha sido tan importante.</p>
                            <p>En Tech-Olote diseñamos experiencias de aprendizaje personalizadas, pensadas para adaptarse a tus intereses y tu nivel de conocimiento.</p>
                            <p>Te acompañamos desde los conceptos básicos hasta los proyectos más complejos, con una metodología práctica, didáctica y respaldada por profesionales del área tecnológica.</p>
                            <p>Nuestro enfoque no es solo enseñarte a programar robots, sino ayudarte a desarrollar pensamiento lógico, creatividad y la capacidad de resolver problemas reales.</p>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                            <div class="content ps-0 ps-lg-5">
                                <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Aprendizaje práctico y aplicado.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Contenido actualizado por expertos.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Flexibilidad para tu ritmo de vida.</span></li>
                                </ul>
                                <p>
                                Aprende cuando quieras y desde donde estés. Nuestra plataforma está diseñada para que avances a tu propio ritmo, sin horarios rígidos y con todo el contenido disponible 24/7.
                                Nuestros cursos están estructurados en torno a proyectos reales. Desde el primer día trabajarás con sensores, microcontroladores y estructuras robóticas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /About Section -->

            <!-- Section Title -->
            <section id="SectionTitle" class="container section-title" data-aos="fade-up"> 
                    <h2>Nuestros servicios</h2>
                    <p>En tres bloques explicados<br></p>
            </section>
            <!-- Services Section -->
            <section id="services" class="services section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-5">
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="service-item">
                                <div class="details position-relative">
                                    <h3>Nivel Inicial</h3>
                                    <p>Aprenderás los fundamentos de la robótica y programación desde cero. Te familiarizarás con componentes básicos y programarás tu primer robot.</p>
                                </div>
                            </div>
                        </div><!-- End Service Item -->
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="service-item">
                                <div class="details position-relative">
                                <h3>Nivel Intermedio</h3>
                                <p>Profundizarás en tu lógica, el control de múltiples dispositivos, y el diseño de proyectos integradores. Programarás comportamientos y tareas complejas.</p>
                                </div>
                            </div>
                        </div><!-- End Service Item -->
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                            <div class="service-item">
                                <div class="details position-relative">
                                <h3>Nivel Avanzado</h3>
                                <p>Desarrollarás sistemas inteligentes, visión por computadora, redes neuronales, procesamiento de datos y navegación autónoma. ¡Lleva tus habilidades a otro nivel!</p>
                                </div>
                            </div>
                        </div><!-- End Service Item -->
                    </div>
                </div>
            </section><!-- /Services Section -->
        </main>    

        <footer id="footer" class="footer dark-background">
            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="#" class="logo d-flex align-items-center me-auto">
                            <img src="{{ asset('img/tecolote-cabeza.png') }}" alt="">
                            <span class="sitename">Tech-Olote</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Carretera Transpeninsular Ensenada - Tijuana No. 3917
                            Colonia Playitas C.P. 22860</p>
                            <p>Ensenada, Baja California, México</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>(646) 152 8211</span></p>
                            <p><strong>Email:</strong> <span>aenciso@uabc.edu.mx</span></p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Principal</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">Acerca De</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://www.uabc.mx/">UABC</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://ciencias.ens.uabc.mx/">Facultad de Ciencias</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Nuestros servicios</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://www.uabc.mx/">UABC</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Difusión UABC</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">IA</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Diseño web</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 footer-newsletter">
                        <h4>Noticias</h4>
                        <p>Regístrate en nuestra hoja informativa y recibe las noticias más recientes sobre nuestros servicios.</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Regístrate"></div>
                            <div class="loading">Cargando...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Tu registro ha sido añadido. ¡Gracias!</div>
                        </form>
                    </div>
                    
                </div>
            </div>
            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Tech-Olote</strong> <span>All Rights Reserved</span></p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
                </div>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>