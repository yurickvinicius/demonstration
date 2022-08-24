<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Baker Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/template/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('/template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/template/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('/template/assets/css/my.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Baker - v2.2.1
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Yurick</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">Inicio</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#services">Tecnologias</a></li>
          <li><a href="#profile">Perfil</a></li>
          <li><a href="#faq">Fag</a></li>
          <li><a href="#contact">Contato</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Bem-vindo ao meu Web Site</h1>
      <h2>Sou um desenvolvedor experiente de sistemas web full-stack</h2>
      <a href="#about" class="btn-get-started scrollto">Vamos Começar</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('/template/assets/img/clients/mysql.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('/template/assets/img/clients/postgresql.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('/template/assets/img/clients/git.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('/template/assets/img/clients/php.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('/template/assets/img/clients/laravel.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('/template/assets/img/clients/javascript-1.png') }}" class="img-fluid" alt="">
          </div>

        </div>
        

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container text-center">

        <div class="row">
          
          <div class="col-lg-12 pt-4 pt-lg-0">
            <h3>Amante de Tecnologia</h3>
            <p>
            Mais de quinze anos trabalhando e estudando na área de tecnologia da informação com foco principalmente no desenvolvimento de sistemas para web utilizando a linguagem PHP. Abaixo estão algumas informações relevantes, como currículo e sistema de teste.
            </p>
            <div class="row">
              <div class="col-md-4">
                <i class="bx bx-receipt"></i>
                <h4>Curriculum</h4>
                
                <div>
                  <button type="button" class="generationButton" data-toggle="modal" data-target="#modalCurriculum">
                    Click Here
                  </button>
                </div>

              </div>
              <div class="col-md-4">
                <i class="bx bx-play-circle"></i>
                <h4>Audio Recording</h4>
                
                <div>
                  <audio controls>
                    <source src="{{ asset('/audio/grav.mp3') }}" type="audio/mpeg">
                  </audio>
                </div>
              </div>

              <div class="col-md-4">
                <i class="bx bx-clipboard"></i>
                <h4>System Test</h4>
                
                <div>
                  <button type="button" class="generationButton" data-toggle="modal" data-target="#modalSystem">
                    Click Here
                  </button>
                </div>
              </div>
              @include('modal.system')
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Tecnologias</h2>
          <p>Segue abaixo as principais tecnologias que tenho domínio e experiencia</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="{{ asset('/template/assets/img/clients/mysql.png') }}" class="img-fluid img-150-100" alt="">              
              <p class="pt-3">Banco de dados que tenho anos de experiencia e grande conhecimento</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="{{ asset('/template/assets/img/clients/postgresql.png') }}" class="img-fluid img-150-100" alt="">
              <p class="pt-3">Banco de dados que tenho anos de experiencia e grande conhecimento</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="{{ asset('/template/assets/img/clients/php.png') }}" class="img-fluid img-150-100" alt="">
              <p class="pt-3">Linguagem de programação que mais domino e com anos de experiencia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="{{ asset('/template/assets/img/clients/git.png') }}" class="img-fluid img-150-100" alt="">
              <p class="pt-3">Tenho um bom conhecimento na tecnologia GIT</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="{{ asset('/template/assets/img/clients/javascript-1.png') }}" class="img-fluid img-150-100" alt="">
              <p class="pt-3">Linguagem de script a qual possuo um bom conhecimento</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="{{ asset('/template/assets/img/clients/jquery.png') }}" class="img-fluid img-150-100" alt="">
              <p class="pt-3">Biblioteca Js para manipular o DOM, tenho grande conhecimento</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="{{ asset('/template/assets/img/clients/laravel.png') }}" class="img-fluid img-150-100" alt="">
              <p class="pt-3">Framework PHP que possuo um grande conhecimento</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="{{ asset('/template/assets/img/clients/bootstrap.png') }}" class="img-fluid img-150-100" alt="">
              <p class="pt-3">Framework Front End que tenho um bom conhecimento</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="profile" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Perfil</h2>
          <p>Segue abaixo um pouco sobre meu perfil e algumas informações relevantes</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('/template/assets/img/team/yuri-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="#"><i class="icofont-twitter"></i></a>
                  <a href="#"><i class="icofont-facebook"></i></a>
                  <a href="#"><i class="icofont-instagram"></i></a>
                  <a href="#"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Yurick Ribas</h4>
                <span>Programador FullStack</span>
              </div>
            </div>
          </div>

          <div class="col-lg-9 align-items-stretch">
            <div class="member">
              <div class="member-info">
                <h4>Yurick Ribas</h4>
                <span>Programador FullStack</span>
                
                <div class="pt-5 pb-5">Meu nome é Yurick Vinicius Ribas e tenho uma bagagem de mais de 15 anos de experiencia na área, 
                quando comecei ainda não existia nem a biblioteca Jquery era tudo com Javascript e sem padrão de browsers, também 
                não era comum ver frameworks PHP e a parte de front era construída com tabelas de html, era mais trabalhoso no passado
                hoje já possui uma diversidade de ferramentas para tudo que é problema. Sou uma pessoa autodidata e bem comunicativa 
                adoro tecnologia sempre quando posso estou estudando algo novo. Estou montando esse site apenas para fins 
                de curriculum.
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Perguntas Frequentes</h2>
          <p>Algumas perguntas que ouço com freqüência.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Possui curso superior? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Curso superior incompleto em Sistemas para Internet na UTFPR, estou no ultimo ano porém o mesmo se encontra trancado.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Tem algum conhecimento em AWS? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Pouco conhecimento em AWS e conhecimento razoavel em nuvem, no momento estou estudano AWS
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Tem dificuldade em fazer integração com outras aplicações? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  A pricípio dificuldade nenhuma mas depende da ferramenta que será utilizado para gerar o Token como por exemplo o JWT.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Possui conhecimento para desenvolver app mobile? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Tenho um certo conhecimento, a alguns anos atraz eu desenvolvia com o Ionic 1.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Baker</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Baker</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/template/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/template/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/template/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/template/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/template/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('/template/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/template/assets/vendor/venobox/venobox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/template/assets/js/main.js') }}"></script>

</body>

</html>

<!--- #### Modal #### --->


@include('modal.curriculum')

<!---- Fim Modal  ---->