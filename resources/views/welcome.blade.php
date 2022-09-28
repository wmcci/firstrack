<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Kouassi Christian">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{asset('theme/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">



  <title>FirsTrack</title>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">

  <div class="site-mobile-menu site-navbar-target text-white">
    <div class="site-mobile-menu-header text-white">
      <div class="site-mobile-menu-close text-white">
        <span class="icofont-close js-menu-toggle text-white"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body text-white"></div>
  </div>



  <nav class="site-nav dark js-site-navbar mb-5 site-navbar-target">
    <div class="container">
      <div class="site-navigation">
        {{-- style="margin-left: -7rem; --}}
        <a href="/" "><img src="{{asset('theme/images/logo_firstrack.png')}}" width="200" alt="Not found"></a>

        <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
          <li class="active"><a href="#home-section" class="nav-link text-white">Accueil</a></li>
          <li><a href="#pricing-section" class="nav-link text-white">Nos Services</a></li>
          <li><a href="#features-section" class="nav-link text-white">Nos solutions</a></li>
          <li><a href="#contact-section" class="nav-link text-white">Contacts</a></li>
        </ul>


           <ul class="js-clone-nav d-none mt-1 d-lg-inline-block site-menu ">
             <!-- <li class="cta-button-outline"><a href="signin.html">Sign in</a></li> -->
             {{-- <li class="cta-primary"><a href="#contact-section">Appelez dès maintenant</a></li> --}}
           </ul>

        <a href="#" style="background-color: rgb(0, 0, 0); color:white;" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
          data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>

 <div class="untree_co-hero pb-0" id="home-section">
     <div class="container">
        <div class="row">

             <div class="col-6">

                 <video style="margin:-5rem 8rem; width:60vw;"   autoplay muted loop >
                      <source src="{{URL::asset("uploads/logf.mp4")}}" type="video/mp4">
                     Votre navigateur ne suporte pas le meta tag des vidéos
                  </video>

             </div>
        </div>
    </div>

 </div>


  <div class="untree_co-hero pb-0" id="home-section">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="dots"></div>
          <div class="row justify-content-center">
            <div class="col-md-7 text-center mb-5">
              <h3 data-aos="fade-up" data-aos-delay="0" class="text-white"><span style="color:orange ;">Logiciel de
                  suivi GPS</span> <br>
                Gérez l'historique, les rapports, les événements et les notifications, le contrôle des appareils à
                distance, la facturation personnalisée, les applications de suivi de téléphone mobile et plus de 700
                trackers GPS étroitement pris en charge.</h3>
            </div>
          </div>
          <div class="row align-items-center">

            <div class="col-lg-4">
              <div class="intro">

                <div class="excerpt" data-aos="fade-up" data-aos-delay="100">
                  <span class="caption">Bienvenue sur firstrack</span>
                  {{-- <h2 class="font-weight-bold text-white">Explorez Notre plateforme</h2> --}}
                  <p class="text-white"> Firstrack est un logiciel de géolocalisation mis à votre disposition pour assurer la sécurité, Gérez l'historique, les rapports, les événements, les notifications, le contrôle des appareils à distance, la facturation personnalisée, les applications de suivi de téléphone mobile et plus de 700 trackers GPS étroitement pris en charge.</p>
                </div> <!-- /.excerpt -->
                <p data-aos="fade-up" data-aos-delay="200">
                  <a href="#features-section" class="btn btn-outline-primary smoothscroll mr-1">Nos solutions</a>
                  <a href="#pricing-section" class="btn btn-outline-primary smoothscroll">Nos Services</a>
                </p>
              </div>

            </div> <!-- /.col-lg-5 -->
            <div class="col-lg-8">
              <div class="illustration">
                <img src="{{asset('theme/images/laptop.png')}}" alt="Image" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->
    <!-- <div class="illustration">

    </div> -->
  </div>

  {{-- End Home section --}}

  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
          <!-- <span class="caption">Features</span> -->
          <h2 class="heading" style="color: orange">L'avantage d'utiliser notre produit</h2>
          <p class="text-white">Application simple, et puissante et plus personnelle conçue pour vous</p>
        </div>
      </div> <!-- /.row -->

      <div class="row">
        <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="service horizontal d-flex">
            <div class="service-icon color-1 mb-4">
              <svg class="bi bi-app-indicator" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3 style="color: orange">Vaste gamme d'appareils</h3>
              <p class="text-white">Le système est compatible avec 500 types de trackers. Dans la plupart des cas, le partenaire de
                Firstrack choisit d'installer un nouvel équipement ou de travailler avec les appareils que le client
                possède.</p>
              <!-- <p><a href="#" class="read-more">Learn More</a></p> -->
            </div> <!-- /.service-contents-->
          </div> <!-- /.service -->
        </div>

        <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="service horizontal d-flex">
            <div class="service-icon color-2 mb-4">
              <svg class="bi bi-arrow-repeat" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z" />
                <path fill-rule="evenodd"
                  d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3 style="color: orange">Système hautement sécurisé</h3>
              <p class="text-white">Une plateforme très sécurisée afin de pourvoir protéger tous vos données gps</p>
              <!-- <p><a href="#" class="read-more">Learn More</a></p> -->
            </div> <!-- /.service-contents-->
          </div> <!-- /.service -->
        </div>

        <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
          <div class="service horizontal d-flex">
            <div class="service-icon color-3 mb-4">
              <svg class="bi bi-briefcase" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6h-1v6a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-6H0v6z" />
                <path fill-rule="evenodd"
                  d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v2.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 0 0-.5.5v1.616l6.871 1.832a.5.5 0 0 0 .258 0L15 6.116V4.5a.5.5 0 0 0-.5-.5h-13zM5 2.5A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3 style="color: orange">Support technique 24/7</h3>
              <p class="text-white">Vous pouvez joindre le support technique de plusieurs manières mais la plus recommandée est de nous
                contacter par e-mail.</p>
                {{-- <span style="text-decoration: underline;">support@firstrack.ci</span> --}}
              <!-- <p><a href="#" class="read-more">Learn More</a></p> -->
            </div> <!-- /.service-contents-->
          </div> <!-- /.service -->
        </div>


      </div> <!-- /.row -->

    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->


  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4">
          <!-- <span class="caption" data-aos="fade-up" data-aos-delay="0">Digital Services</span> -->
          <h3 class="heading mb-4 " data-aos="fade-up" data-aos-delay="100" style="color: orange">Une solution complète pour votre business
          </h3>
          <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
            <p class="text-white">Grâce à Firstrack, géolocalisez en temps réel des personnes proches, des marchandises importantes et
              pratiquez un sport à risque en toute sécurité. Notre traceur GPS fonctionne de manière autonome.</p>

          </div>
        </div>
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="400">


            @php
              $videos = DB::table('videos')->first();
            @endphp



       @if($videos)
           {{-- <a href="{{asset('storage/'.$videos->fichier) }}"> --}}
            {{-- <a href="{{asset('storage/'.$videos->fichier) }}" class="btn-video" data-fancybox> --}}
                 <video style="margin-left:1.3rem; border-radius:1rem;  width: 50vw;" controls autoplay muted>
                    <source src="{{URL::asset("storage/$videos->fichier")}}" type="video/mp4">
                    Votre navigateur ne suporte pas le meta tag des vidéos
               </video>
        @else
             <img src="https://images.unsplash.com/photo-1500099817043-86d46000d58f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=800&h=250&q=80" class="object-cover">
         @endif

          </a>
        </div> <!-- /.col-md-4 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->



  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 order-lg-2 js-custom-dots">

          <a href="#" class="service link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
            <div class="service-icon color-1 mb-4">
              <svg class="bi bi-app-indicator" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3>Conçu pour les véhicules de tous types</h3>
              <p>Solution spécialisée sur la base de FeetTracking Interface conviviale pour les utilisateurs Navigation intuitive</p>
            </div> <!-- /.service-contents-->
          </a> <!-- /.service -->

          <a href="#" class="service link horizontal d-flex" data-aos="fade-left" data-aos-delay="100">
            <div class="service-icon color-2 mb-4">
              <svg class="bi bi-arrow-repeat" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z" />
                <path fill-rule="evenodd"
                  d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3>Conçu pour les bateaux</h3>
              <p>Le système télématique de Firstrack pour les embarcations maritimes et fluviales est basé sur des outils précis de mesure de la consommation de carburant.</p>
            </div> <!-- /.service-contents-->
          </a> <!-- /.service -->


          <a href="#" class="service link horizontal d-flex" data-aos="fade-left" data-aos-delay="200">
            <div class="service-icon color-3 mb-4">
              <svg class="bi bi-briefcase" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6h-1v6a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-6H0v6z" />
                <path fill-rule="evenodd"
                  d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v2.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 0 0-.5.5v1.616l6.871 1.832a.5.5 0 0 0 .258 0L15 6.116V4.5a.5.5 0 0 0-.5-.5h-13zM5 2.5A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3>Conçu pour les citernes</h3>
              {{-- et un Software qui les analyse et les met à la disposition des utilisateurs --}}
              <p class="text-justify">La solution de gestion du carburant de FIRSTRACK fonctionne grâce à la communication entre un Hardware qui détecte toutes les données nécessaires...</p>
            </div> <!-- /.service-contents-->
          </a> <!-- /.service -->


        </div>
        <div class="col-lg-7">
          <div class="img-shadow">
            <div class="owl-single no-dots owl-carousel">
              <div class="item">
                <!-- <span class="number">1/3</span> -->
                <img src="{{asset('theme/images/lp-display.png')}}" alt="Image" class="img-fluid">
              </div>
              <div class="item">
                <!-- <span class="number">2/3</span> -->
                <img src="{{asset('theme/images/lp-display.png')}}" alt="Image" class="img-fluid">
              </div>
              <div class="item">
                <!-- <span class="number">3/3</span> -->
                <img src="{{asset('theme/images/lp-display.png')}}" alt="Image" class="img-fluid">
              </div>

            </div>

          </div>

        </div> <!-- /.col-md-4 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">

      <div class="row">
        <div class="col-12 mb-5" data-aos="fade-up">
          {{-- <span class="caption">Fonctionnalités</span> --}}
          <h2 class="heading" style="color:orange">Firstrack vous offre une multitude de fonctionnalités adaptées à tous vos besoins</h2>
        </div>

        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="service">
            <div class="service-icon color-1 mb-4">
              <svg class="bi bi-app-indicator" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3 class="text-white">SUIVI PAR GPS</h3>
              <p class="text-white">Vous permet d’analyser les déplacements des véhicules en temps réel et de fournir
                des données sur la
                vitesse et l’endroit exact de chaque véhicule grâce à la géolocalisation gps.</p>
            </div> <!-- /.service-contents-->
          </div> <!-- /.service -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="service">
            <div class="service-icon color-2 mb-4">
              <svg class="bi bi-arrow-repeat" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z" />
                <path fill-rule="evenodd"
                  d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3 class="text-white">ALERTES ET NOTIFICATIONS</h3>
              <p class="text-justify text-white">Définissez et paramétrez vous-même vos alertes en temps réel selon les événements
                de votre choix.</p>
            </div> <!-- /.service-contents-->
          </div> <!-- /.service -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="service">
            <div class="service-icon color-3 mb-4">
              <svg class="bi bi-briefcase" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6h-1v6a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-6H0v6z" />
                <path fill-rule="evenodd"
                  d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v2.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 0 0-.5.5v1.616l6.871 1.832a.5.5 0 0 0 .258 0L15 6.116V4.5a.5.5 0 0 0-.5-.5h-13zM5 2.5A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3 class="text-white">ZONES DE SURVEILLANCE</h3>
              <p class="text-white">Vous pouvez programmer des zones de surveillance (geofencing) sur la carte et
                recevoir des alertes lorsque vos véhicules entrent ou sortent de ces zones.</p>
            </div> <!-- /.service-contents-->
          </div> <!-- /.service -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="service">
            <div class="service-icon color-4 mb-4">
              <svg class="bi bi-collection" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z" />
              </svg>
            </div> <!-- /.icon -->
            <div class="service-contents">
              <h3 class="text-white">FONCTIONNALITES SUR MESURE</h3>
              <p class="text-white">Firstrack étudie toute demande de développement de fonctionnalités sur mesure
                afin de vous proposer un environnement de travail toujours plus adapté.</p>
            </div> <!-- /.service-contents-->
          </div> <!-- /.service -->
        </div> <!-- /.col-lg-3 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->

    {{-- Comment section here --}}

    <video class="mt-5" style="margin-left:22rem; border-radius:1rem;  width: 50vw; height: 45vh; box-shadow: 10px 5px 5px orange;"  controls autoplay muted>
        <source src="{{URL::asset("uploads/camion.mp4")}}" type="video/mp4">
        Votre navigateur ne suporte pas le meta tag des vidéos
   </video>

  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section bg-light" id="pricing-section">
    <div class="container">

      <div class="row pricing-title">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
          <!-- <span class="caption">Tarification</span> -->
          <h2 class="heading">Nos Services</h2>
          <p>Firstrack dispose de plusieurs services qui sont :</p>
        </div>
      </div> <!-- /.row -->

      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing">
                <div class="body">
                  <div class="price">
                    <span class="price mt-5" style="font-size: 1.4rem;">Firstrack Bateau</span>
                      {{-- <span class="price"><span>25.000</span><sup>FCFA</sup></span> --}}
                    {{-- <span class="d-block plan mb-4">Plan A</span> --}}
                  </div>
                  <ul class="list-unstyled ul-check primary mb-5">
                   <li>Détection des navires maritimes et fluviaux</li>
                   <li>Suivi de la consommation de carburant</li>
                   <li>Réduction des pertes de carburant</li>
                   <li>Réception des alertes en temps réel</li>
                   {{-- <li>Gestion de l’inventaire de stock de carburant</li> --}}
                  </ul>
                  {{-- <p class="text-center mb-0"><a href="#" class="btn btn-outline-primary">Contactez-nous</a></p> --}}
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing">
                <div class="body">
                  <div class="price">
                    <span class="price" style="font-size: 1.4rem;">Citerne Fixe</span>
                    {{-- <span class="d-block plan mb-4">Plan B</span> --}}
                  </div>
                  <ul class="list-unstyled ul-check primary mb-5">
                    <li>Contôle en temps réel le niveau du carburant</li>
                    <li>Contrôle en temps réel les livraisons de carburant</li>
                    <li>Alerte sur la baisse du carburant</li>
                    <li>Alerte sur le niveau  bas dans la citerne</li>
                  </ul>
                  {{-- <p class="text-center mb-0"><a href="#" class="btn btn-outline-primary">Contactez-nous</a></p> --}}
                </div>
              </div> <!-- /.pricing -->

            </div> <!-- /.col-lg-4 -->

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing">

                <div class="body">
                  <div class="price">
                    <span class="price" style="font-size:1.4rem;"><span>Diesel Plus</span>
                    {{-- <span class="d-block plan mb-4">Plan C</span> --}}
                  </div>
                  <ul class="list-unstyled ul-check primary mb-5">
                    <li>Identification des utilisateurs</li>
                    <li>Identification des véhicules</li>
                    <li>Transmission en temps réel des services</li>
                    <li>Consultation des services sur l'application</li>
                  </ul>
                  {{-- <p class="text-center mb-0"><a href="#" class="btn btn-outline-primary">Contactez-nous</a></p> --}}
                </div>
              </div> <!-- /.pricing -->
            </div> <!-- /.col-lg-4 -->

             <div class="col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing">

                <div class="body">
                  <div class="price">
                    <span class="price" style="font-size:1.4rem;"><span>FleetBus</span>
                    {{-- <span class="d-block plan mb-4">Plan C</span> --}}
                  </div>
                  <ul class="list-unstyled ul-check primary mb-5">
                      <li>Gestion des horaires</li>
                      {{-- <li>Allocation des unités pour les routes</li> --}}
                      <li>Rapports détaillés sur les arrêts.</li>
                      <li>Suivi en temps réel du bus</li>
                      <li>Notifications rapides Rapports.</li>
                      {{-- <li>Géo zones</li>
                        <li>Carte.</li>
                        <li>Recherche d'adresse.</li>
                        <li>Création de routes automatique ou manuel</li>
                       <li>Suivi en temps réel sur la carte avec les fonctions de mise à l'échelle et la navigation pratique.</li>
                       <li>Rapports en termes d'unités et des routes</li>
                       --}}
                  </ul>
                  {{-- <p class="text-center mb-0"><a href="#" class="btn btn-outline-primary">Contactez-nous</a></p> --}}
                </div>
              </div> <!-- /.pricing -->
            </div> <!-- /.col-lg-4 -->

             <div class="col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing">

                <div class="body">
                  <div class="price">
                    <span class="price" style="font-size:1.4rem;"><span>Fuel Monitoring</span>
                    {{-- <span class="d-block plan mb-4">Plan C</span> --}}
                  </div>
                  <ul class="list-unstyled ul-check primary mb-5">

                    <li>Notifications en cas d’accès aux dômes</li>
                    <li>Notifications en cas d’ouverture de vanne</li>
                    <li>Traçage des routes avec alarme</li>
                    <li>Suivi sur smartphone</li>
                    {{-- <li>Alerte en cas de dépassement de vitesse</li>
                    <li>Identification du conducteur par badge DALLAS (Option).</li>
                    <li>Nombreux rapports PDF ou Excel disponibles.</li> --}}
                  </ul>
                  {{-- <p class="text-center mb-0"><a href="#" class="btn btn-outline-primary">Contactez-nous</a></p> --}}
                </div>
              </div> <!-- /.pricing -->
            </div> <!-- /.col-lg-4 -->

             <div class="col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing">

                <div class="body">
                  <div class="price">
                    <span class="price" style="font-size:1.4rem"><span>Generator</span>
                    {{-- <span class="d-block plan mb-4">Plan C</span> --}}
                  </div>
                  <ul class="list-unstyled ul-check primary mb-5">
                    {{-- <li>Réduction des pertes de carburant</li> --}}
                    <li>Réception des alertes en temps réel</li>
                    <li>Réduction des anomalies des générateurs</li>
                    {{-- <li>Surveiller le niveau de carburant et la consommation.</li> --}}
                    <li>Surveiller le niveau de carburant</li>
                    <li>Surveiller la tension de la batterie.</li>
                    {{-- <li>Superviser et gérer les groupes électrogènes efficacement.</li>
                    <li>Gérer l’inventaire de stock de carburant et le carburant réellement consommé.</li>
                    <li>Géo localiser les groupes électrogènes sur une seule cartographie.</li>
                    <li>Conserver un enregistrement automatique des heures de fonctionnement.</li>
                    <li>Alarmes par e-mail et SMS.</li>
                    <li>Maintenir l’efficacité de l’équipement le plus près possible de l’efficacité d’origine.</li> --}}

                  </ul>
                  {{-- <p class="text-center mb-0"><a href="#" class="btn btn-outline-primary">Contactez-nous</a></p> --}}
                </div>
              </div> <!-- /.pricing -->
            </div> <!-- /.col-lg-4 -->:

             <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing">

                <div class="body">
                  <div class="price">
                    <span class="price" style="font-size: 1.4rem;"><span>personal tracker Dati</span>
                    {{-- <span class="d-block plan mb-4">Plan C</span> --}}
                  </div>
                  <ul class="list-unstyled ul-check primary mb-5">
                    <li>Boutton SOS</li>
                    <li>Détecteur de chute</li>
                    <li>Accéléromètre & Gyroscope</li>
                    <li>Boitier compact et grande autonomie</li>
                    {{-- <li>Bluetooth</li>
                     <li>100% ETANCHE</li> --}}
                  </ul>
                  {{-- <p class="text-center mb-0"><a href="#" class="btn btn-outline-primary">Contactez-nous</a></p> --}}
                </div>
              </div> <!-- /.pricing -->
            </div> <!-- /.col-lg-4 -->

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing">

                <div class="body">
                  <div class="price">
                    <span class="price" style="font-size:1.4rem;"><span>Taxitrack</span>
                    {{-- <span class="d-block plan mb-4">Plan C</span> --}}
                  </div>
                  <ul class="list-unstyled ul-check primary mb-5">
                    <li>Historique de déplacement</li>
                    <li>Générateur des rapports</li>
                    <li>Gestionnaire de notification</li>
                    <li>Rapport Excel, Pdf et Html</li>
                    {{-- <li>Identification chauffeur (EN OPTION).</li>
                    <li>Rapport nombre de clients transportés</li> --}}
                    {{-- <li>Rapport heure de montée et de descente</li>
                    <li>Rapport lieu de montée et de descente</li> --}}
                  </ul>
                  {{-- <p class="text-center mb-0"><a href="#" class="btn btn-outline-primary">Contactez-nous</a></p> --}}
                </div>
              </div> <!-- /.pricing -->
            </div> <!-- /.col-lg-4 -->
          </div> <!-- /.row -->
        </div> <!-- /.col-lg-8 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->


  {{-- <div class="untree_co-section" id="testimonials-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-12 text-center">
          <!-- <span class="caption">Document de présentation</span> -->
          <h2 class="heading">Nos documents de présentation</h2>

          <div>
            <a href="#" class="js-custom-prev-v2 cusotm-slider-nav custom-prev"><span><svg class="bi bi-arrow-left"
                  width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z" />
                  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg></span></a>
            <a href="#" class="js-custom-next-v2 cusotm-slider-nav custom-next"><span>
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg></span>
            </a>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">

        <div class="col-lg-12" data-aos="fade" data-aos-delay="200">
          <div class="owl-2-slider owl-carousel">

            @php
                $fichiers = DB::table('fichiers')->get();
            @endphp


        @foreach ($fichiers as $fs)


            <div class="item">
              <div class="untree_co-testimonial d-flex">

                <div class="text">

                  <div class="author d-flex">
                    <div class="pic mr-3">
                      <a href="{{asset('storage/'.$fs->fichier) }}" target="_blank"><img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"></a>
                    </div>
                    <div>
                      <strong class="d-block">{{ $fs->description }}</strong><span class="d-block">Cliquer sur l'image pour le télécharger</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>

           @endforeach

          </div>
        </div>
      </div>
    </div>
  </div> --}}



   <div class="untree_co-section " id="features-section" style="background-image: url({{ asset('theme/images/goudron.jpg') }}); background-position: center; background-size: cover;">
        {{-- bg-light after untree_co-section --}}
    <div class="container">

      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
          {{-- <span class="caption">Blog</span> --}}
          <h2 class="heading display-1 text-center text-white" style="text-transform:uppercase;">Nos solutions</h2>
          <p class="text-white">Plongez vous au coeur de notre solution tout en lisant nos documents de présentation</p>
        </div>
      </div> <!-- /.row -->

      <div class="row">
         <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="0" >
          <div class="news-item" style="background-image: url({{ asset('theme/images/citerne.jpg') }}); background-position: center; background-size: cover; height:12rem">
            <div class="vcard d-flex align-items-center mb-4">
              <div class="img-wrap">
                {{-- <img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"> --}}
              </div>

              <div class="post-meta">
                {{-- <strong class="text-white">Citerne FixeFirstrack</strong> --}}
                {{-- <span>Jun 14, 2020</span> --}}
              </div>
            </div>
            <div class="news-contents mb-4">
              {{-- <h3 class="text-white"><a href="#" class="text-white">La nouvelle solution de gestion de carburant</a></h3> --}}
              {{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
            </div>
            {{-- <p class="mb-0"><a href="#" class="read-more-arrow">
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg>
              </a></p> --}}
          </div>

          <div class="text mt-2 mb-3 text-center"><a href="{{ asset('theme/docs/catalogue.pdf') }}" target="_blank" class="text-white" >Ensemble de toutes les fonctionnalités de Firstrack (Catalogue)</a></div>
        </div>

        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="100" >
          <div class="news-item" style="background-image: url({{ asset('theme/images/mine.jpg') }}); background-position: center; background-size: cover; height:12rem">
            <div class="vcard d-flex align-items-center mb-4">
              <div class="img-wrap">
                {{-- <img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"> --}}
              </div>

              <div class="post-meta">
                {{-- <strong class="text-white">Citerne FixeFirstrack</strong> --}}
                {{-- <span>Jun 14, 2020</span> --}}
              </div>
            </div>
            <div class="news-contents mb-4">
              {{-- <h3 class="text-white"><a href="#" class="text-white">La nouvelle solution de gestion de carburant</a></h3> --}}
              {{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
            </div>
            {{-- <p class="mb-0"><a href="#" class="read-more-arrow">
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg>
              </a></p> --}}
          </div>

          <div class="text mt-2"><a href="{{ asset('theme/docs/mine.pdf') }}" target="_blank" class="text-white">Dispositif d'alarme pour travailleurs isolé</a></div>
        </div>

        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="250" >
          <div class="news-item" style="background-image: url({{ asset('theme/images/citerne.jpg') }}); background-position: center; background-size: cover; height:12rem">
            <div class="vcard d-flex align-items-center mb-4">
              <div class="img-wrap">
                {{-- <img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"> --}}
              </div>

              <div class="post-meta">
                {{-- <strong class="text-white">Citerne FixeFirstrack</strong> --}}
                {{-- <span>Jun 14, 2020</span> --}}
              </div>
            </div>
            <div class="news-contents mb-4">
              {{-- <h3 class="text-white"><a href="#" class="text-white">La nouvelle solution de gestion de carburant</a></h3> --}}
              {{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
            </div>
            {{-- <p class="mb-0"><a href="#" class="read-more-arrow">
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg>
              </a></p> --}}
          </div>

          <div class="text mt-2"><a href="{{ asset('theme/docs/citerne.pdf') }}" target="_blank" class="text-white">La nouvelle solution de gestion de carburant</a></div>
        </div>

         <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="300" >
          <div class="news-item" style="background-image: url({{ asset('theme/images/bateau.jpg') }}); background-position: center; background-size: cover; height:12rem">
            <div class="vcard d-flex align-items-center mb-4">
              <div class="img-wrap">
                {{-- <img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"> --}}
              </div>

              <div class="post-meta">
                {{-- <strong class="text-white">Citerne FixeFirstrack</strong> --}}
                {{-- <span>Jun 14, 2020</span> --}}
              </div>
            </div>
            <div class="news-contents mb-4">
              {{-- <h3 class="text-white"><a href="#" class="text-white">La nouvelle solution de gestion de carburant</a></h3> --}}
              {{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
            </div>
            {{-- <p class="mb-0"><a href="#" class="read-more-arrow">
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg>
              </a></p> --}}
          </div>

          <div class="text mt-2"><a href{{ asset('theme/docs/bateau.pdf') }} target="_blank" class="text-white">Solution de suivi des bateaux et navires</a></div>
        </div>

         <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="100" >
          <div class="news-item" style="background-image: url({{ asset('theme/images/diesel.jpg') }}); background-position: center; background-size: cover; height:12rem">
            <div class="vcard d-flex align-items-center mb-4">
              <div class="img-wrap">
                {{-- <img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"> --}}
              </div>

              <div class="post-meta">
                {{-- <strong class="text-white">Citerne FixeFirstrack</strong> --}}
                {{-- <span>Jun 14, 2020</span> --}}
              </div>
            </div>
            <div class="news-contents mb-4">
              {{-- <h3 class="text-white"><a href="#" class="text-white">La nouvelle solution de gestion de carburant</a></h3> --}}
              {{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
            </div>
            {{-- <p class="mb-0"><a href="#" class="read-more-arrow">
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg>
              </a></p> --}}
          </div>

          <div class="text mt-2"><a href="{{ asset('theme/docs/diesel.pdf') }}" target="_blank" class="text-white">Solution de contrôle et de gestion de carburant</a></div>
        </div>

         <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="200" >
          <div class="news-item" style="background-image: url({{ asset('theme/images/F1.jpg') }}); background-position: center; background-size: cover; height:12rem">
            <div class="vcard d-flex align-items-center mb-4">
              <div class="img-wrap">
                {{-- <img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"> --}}
              </div>

              <div class="post-meta">
                {{-- <strong class="text-white">Citerne FixeFirstrack</strong> --}}
                {{-- <span>Jun 14, 2020</span> --}}
              </div>
            </div>
            <div class="news-contents mb-4">
              {{-- <h3 class="text-white"><a href="#" class="text-white">La nouvelle solution de gestion de carburant</a></h3> --}}
              {{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
            </div>
            {{-- <p class="mb-0"><a href="#" class="read-more-arrow">
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg>
              </a></p> --}}
          </div>

          <div class="text mt-2"><a href="{{ asset('theme/docs/fuel.pdf') }}" target="_blank" class="text-white">Contôle de livraison de carburant citernes</a></div>
        </div>

        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="350" >
          <div class="news-item mt-3" style="background-image: url({{ asset('theme/images/generator.jpg') }}); background-position: center; background-size: cover; height:12rem">
            <div class="vcard d-flex align-items-center mb-4">
              <div class="img-wrap">
                {{-- <img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"> --}}
              </div>

              <div class="post-meta">
                {{-- <strong class="text-white">Citerne FixeFirstrack</strong> --}}
                {{-- <span>Jun 14, 2020</span> --}}
              </div>
            </div>
            <div class="news-contents mb-4">
              {{-- <h3 class="text-white"><a href="#" class="text-white">La nouvelle solution de gestion de carburant</a></h3> --}}
              {{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
            </div>
            {{-- <p class="mb-0"><a href="#" class="read-more-arrow">
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg>
              </a></p> --}}
          </div>

          <div class="text mt-2"><a href="{{ asset('theme/docs/generator.pdf') }}" target="_blank" class="text-white">Solution de suivi des groupes electrogènes</a></div>
        </div>

         <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="200" >
          <div class="news-item mt-3" style="background-image: url({{ asset('theme/images/citerne.jpg') }}); background-position: center; background-size: cover; height:12rem">
            <div class="vcard d-flex align-items-center mb-4">
              <div class="img-wrap">
                {{-- <img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"> --}}
              </div>

              <div class="post-meta">
                {{-- <strong class="text-white">Citerne FixeFirstrack</strong> --}}
                {{-- <span>Jun 14, 2020</span> --}}
              </div>
            </div>
            <div class="news-contents mb-4">
              {{-- <h3 class="text-white"><a href="#" class="text-white">La nouvelle solution de gestion de carburant</a></h3> --}}
              {{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
            </div>
            {{-- <p class="mb-0"><a href="#" class="read-more-arrow">
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg>
              </a></p> --}}
          </div>

          <div class="text mt-2"><a href="{{ asset('theme/docs/fleet.pdf') }}" target="_blank" class="text-white">Solution de suivi de transport en commun</a></div>
        </div>

        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="300" >
          <div class="news-item mt-3" style="background-image: url({{ asset('theme/images/taxi.jpg') }}); background-position: center; background-size: cover; height:12rem">
            <div class="vcard d-flex align-items-center mb-4">
              <div class="img-wrap">
                {{-- <img src="{{asset('theme/images/image_pdf.png')}}" alt="Image" class="img-fluid"> --}}
              </div>

              <div class="post-meta">
                {{-- <strong class="text-white">Citerne FixeFirstrack</strong> --}}
                {{-- <span>Jun 14, 2020</span> --}}
              </div>
            </div>
            <div class="news-contents mb-4">
              {{-- <h3 class="text-white"><a href="#" class="text-white">La nouvelle solution de gestion de carburant</a></h3> --}}
              {{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
            </div>
            {{-- <p class="mb-0"><a href="#" class="read-more-arrow">
                <svg class="bi bi-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                </svg>
              </a></p> --}}
          </div>

          <div class="text mt-2"><a href="{{ asset('theme/docs/taxi.pdf') }}" target="_blank" class="text-white"> Solution de géolocalisation et de gestion des taxis </a></div>
        </div>

      </div>
    </div>
  </div>


  <div class="untree_co-section" id="contact-section" style="background-color: white">
    <div class="container">
      <div class="row mb-5" data-aos="fade-up" data-aos-delay="0">
        <div class="col-12 text-center">
          {{-- <span class="caption">Contact</span> --}}
          <h2 class="heading " style="color: orange">Contactez-nous</h2>
          <p>N'hésitez pas à nous contacter pour plus d'informations</p>
        </div>
      </div> <!-- /.row -->
      <div class="row">

        <div class="col-lg-7">


          <form class="contact-form" action="{{ route('insert_contact') }}" method="POST" data-aos="fade-up" data-aos-delay="100" id="frmContact">
            @csrf
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="fname">Nom</label>
                  <input type="text" name="nom" placeholder="Ex: Diabaté" class="form-control @error('nom') is-invalid  @enderror" required="required" value="{{ old('nom') }}" id="fname">
                    @error('nom')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="lname">Prénoms</label>
                  <input type="text" name="prenoms" placeholder="Ex: Issouf" value="{{ old('prenoms') }}" class="form-control @error('prenoms') is-invalid  @enderror" required="required" id="lname">
                   @error('prenoms')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label class="" for="email">Adresse e-mail</label>
                  <input type="email" name="email" placeholder="Ex: issoufd@gmail.com" class="form-control @error('email') is-invalid  @enderror" value="{{ old('email') }}" required="required" id="email">
                   @error('email')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>


              <div class="col-6">
                <div class="form-group">
                  <label class="" for="email">Numéro de téléphone</label>
                  <input type="tel" name="numTel" placeholder="Ex: 0707070707" class="form-control @error('numTel') is-invalid  @enderror" required="required" value="{{ old('numTel') }}" id="tel">
                   @error('numTel')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
            </div>


            <div class="form-group">
              <label class="" for="message">Votre message</label>
              <textarea name="message" class="form-control @error('message') is-invalid  @enderror" id="message" required="required" cols="30" rows="5" style="resize: none;" placeholder="Ex: Je veux en savoir plus sur votre produit firstrack"> {{ old('message') }}</textarea>
               @error('message')
                      <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-outline-primary">Envoyez votre message</button>
          </form>
        </div> <!-- /.col-lg-7 -->
        <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
          <div class="quick-contact">
            <h3 class="h5 mb-4">Plus d'informations</h3>
            <address class="text-black d-flex"><span class="mt-1 icon-room mr-2"></span><span>
                Non loin du stade d'angré</span></address>
            <ul class="list-unstyled ul-links mb-4">
              <li><a href="tel://11234567890" class="d-flex"><span class="mt-1 icon-phone mr-2"></span><span>+(225) 27
                    22 59 97 22</span></a></li>

              <li><a href="tel://11234567890" class="d-flex"><span class="mt-1 icon-phone mr-2"></span><span>+(225) 07
                    09 67 60 51</span></a></li>

              <li><a href="mailto:info@mydomain.com" class="d-flex"><span
                    class="mt-1 icon-envelope mr-2"></span><span>support@firstrack.ci</span></a></li>

              <li><a href="https://untree.co/" target="_blank" class="d-flex"><span
                    class="mt-1 icon-globe mr-2"></span><span>https://www.firstrack.ci/</span></a></li>
            </ul>
          </div>
        </div> <!-- /.col-lg-4 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section bg-light -->


  <div class="site-footer">

    <div class="footer-dots"></div> <!-- /.footer-dots -->
    <div class="container">

      <div class="row">
        <div class="col-lg-4">
          <div class="">
            <p><a href="/"><img src="{{asset('theme/images/logo_firstrack.png')}}" alt=""></a></p>
            <p>Grâce à Firstrack, géolocalisez en temps réel des personnes proches, des marchandises importantes et
              pratiquez un sport à risque en toute sécurité. Notre traceur GPS fonctionne de manière autonome.</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Suivez-nous sur</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
               <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2 ml-auto">
          <div class="widget">
            <h3>Liens rapide</h3>
            <ul class="list-unstyled float-left links">
              <li class="smoothscroll"><a href="#home-section">Accueil</a></li>
              <li><a href="#pricing-section">Nos Services</a></li>
              <li><a href="#features-section">Nos solutions</a></li>
              <li><a href="#contact-section">Contacts</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-1">
          <div class="widget">
            <!-- <h3>Services</h3> -->
            <ul class="list-unstyled float-left links">
              <!-- <li><a href="#">Built for Developers</a></li>
              <li><a href="#">Modern Design</a></li>
              <li><a href="#">Building Stunning Websites</a></li>
              <li><a href="#">Bring Ideas To Life</a></li> -->
            </ul>
          </div>
        </div>


        <div class="col-lg-4">
          <div class="widget">
            <h3>Nos Contacts</h3>
            <address>22ème, Non loin du stade d'angré</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://2722599722">+(225) 27 22 59 97 22</a></li>
              <li><a href="tel://0709676051">+(225) 07 09 67 60 51 </a></li>
              <li><a href="mailto:support@firstrack.ci">support@firstrack.ci</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p class="copyright">Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script>.Tous droit reservé. &mdash; Fait par <a href="https://www.wmcci.com" target="_blank">wmcci</a>
            <!-- License information: https://untree.co/license/ -->
          </p>
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <script src="{{asset('theme/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('theme/js/popper.min.js')}}"></script>
  <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('theme/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('theme/js/aos.js')}}"></script>

  <script src="{{asset('theme/js/custom.js')}}"></script>
  <script src="{{asset('theme/js/contactForm.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script type="text/javascript">
 toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
</script>

<script>

   @if (Session::has('message'))

   var type = "{{ Session::get('alert-type', 'info') }}"

   switch(type){

    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;

    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
   }

   @endif


</script>

</body>

</html>
