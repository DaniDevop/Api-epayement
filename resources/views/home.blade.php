<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <title>Pay cash</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('/assets/assets/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/assets/css/templatemo-tale-seo-agency.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/assets/css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/assets/css/animate.css')}}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+000 1234 5678</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>payCash@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>Liberté 6 extension</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">

              <li class="scroll-to-section"><a href="#infos">Register</a></li>
              <li class="scroll-to-section"><a href="{{route('login.client')}}">Connexion</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>Pay cash AGENCY</h6>
            <div class="line-dec"></div>
            <h4>Pay <em>Cash</em></h4>
            <p>Bienvenue sur notre plate-forme de paiement en ligne
              Nous facilitons l échange et le paiement en ligne de vos clients
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-4">
                <div id="map">

                </div>
              </div>
              <div class="col-lg-8">
                <form id="contact-form" action="{{route('demande.marchand')}}" method="post">
                    @csrf
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>Contact Us</em> &amp; Faire une demande </h2>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="name" id="name" placeholder="Nom" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="prenom" id="surname" placeholder="Prenom"
                          autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..."
                          required="">
                      </fieldset>
                    </div>

                    <div class="col-lg-6">
                        <fieldset>
                          <input type="password" name="password" placeholder="Mot de passe"
                            required>
                        </fieldset>
                      </div>

                      <div class="col-lg-6">
                        <fieldset>
                          <input type="password" name="confirm_password" placeholder="Confirmation-Password"
                            required>
                        </fieldset>
                      </div>

                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Valider la demande</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">

                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">

                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 <a href="#">Pays Cash</a>


        </p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('/assets/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('/assets/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('/assets/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('/assets/assets/js/tabs.js')}}"></script>
  <script src="{{asset('/assets/assets/js/popup.js')}}"></script>
  <script src="{{asset('/assets/assets/js/custom.js')}}"></script>

<script>

</script>

</body>

</html>
