<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>EngageIT</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">
          <img src="images/logo1.png" alt="Logo" style="height: 40px; margin-right: 10px;">
          <a class="navbar-brand " href="index.html"> EngageIt<span>solution</span> </a>
         
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand navbar_brand_mobile" href="index.html"> Solution<span>EngageIT</span> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page1') }}">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('page2') }}">Services</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('page3') }}"> A propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('page4') }}">Plus Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('page5') }}">Besoin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>
                      Connexion
                    </span>
                  </a>
                </li>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>Bienvennu au <span>SolutionEngageIT</span></h2>
            </div>
            <p>
              Simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever
              since the 1500s, when an unknown printer took a galley of type
              and scrambled it to make a type specimen book. It has s
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding2">
      <div class="container">
        <div class="info_logo">
          <a class="navbar-brand" href="index.html"> Solution<span>EngageIT</span> </a>
        </div>
        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Useful Link
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="index.html">Accueil <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="about.html">A propos </a>
                  </li>
                  <li class="">
                    <a class="" href="service.html">Services </a>
                  </li>
                  <li class="">
                    <a class="" href="portfolio.html"> Plus Information </a>
                  </li>
                  <li class="">
                    <a class="" href="contact.html"> Besoin </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                Welding
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur
                adipiscinaliquaLoreadipiscing
              </p>
            </div>
            <div class="col-md-3 mx-auto  ">
              <h5>
                social media
              </h5>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <h5>
                Our welding center
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur
                adipiscinaliquaLoreadipiscing
              </p>
            </div>
          </div>
        </div>
        <div class="info_bottom">
          <div class="row">
            <div class="col-lg-9">
              <div class="info_contact ">
                <div class="row">
                  <div class="col-md-3">
                    <a href="#" class="link-box">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>
                        Location
                      </span>
                    </a>
                  </div>
                  <div class="col-md-5">
                    <a href="#" class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                        Call +225 014071****
                      </span>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="link-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <span>
                        solutionengageit@gmail.com
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info_form ">
                <form action="">
                  <input type="email" placeholder="Enter Your Email" />
                  <button>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>