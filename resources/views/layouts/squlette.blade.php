<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Flight Tracker ✈️</title>

    <!-- Fontfaces CSS-->
    <link href="../../../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- assets/vendor CSS-->
    <link href="../../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../../assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="accueil">
                            <img src="assets/images/icon/logo.png" alt="CoolAdmin"   width="80" height="5cl" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="accueil">
                                <i class="fas fa-tachometer-alt"></i>Accueil</a>

                        </li>
                        <li>
                            <a href="gerer_compte">
                                <i class="fas fa-users"></i>Liste des clients</a>
                        </li>
                        <li>
                            <a href="historique">
                                <i class="fas fa-table"></i>historique</a>
                        </li>
                        <li>
                            <a href="gerer_vol">
                                <i class="far fa-check-square"></i>Liste de vols</a>
                        </li>
                        <li>
                            <a href="calendar">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="maps">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>


                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="accueil">
                    <img src="assets/images/icon/logo.png" alt="Cool Admin"  width="80" height="10" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="accueil">
                                <i class="fas fa-tachometer-alt"></i>Accueil</a>

                        </li>
                        <li>
                            <a href="gerer_compte">
                                <i class="fas fa-users"></i>Liste des clients</a>
                        </li>
                        <li>
                            <a href="historique">
                                <i class="fas fa-table"></i>historique</a>
                        </li>
                        <li>
                            <a href="gerer_vol">
                                <i class="far fa-check-square"></i>Liste des vols</a>
                        </li>
                        <li>
                            <a href="calendar">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="maps">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <marquee behavior="" direction="">

                                <h1>BIENVENUE SUR FLIGHT TRACKER...</h1>
                            </marquee>
                            <div class="header-button">
                                <div class="noti-wrap">

                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>

                                        @if ($messages->count() <> 0)
                                        <span class="quantity">{{ $messages->count() }}</span>
                                        @else

                                        @endif

                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have {{$messages->count()}} New messages</p>
                                            </div>
                                            @foreach ($messages as $msg)

                                        <a style="text-decoration: none"; href="http://localhost:8000/chatify/{{ $msg->from_id }}">
                                                    <div class="email__item">
                                                        <div class="image img-cir img-40">
                                                            <img src="assets/images/icon/avatar-01.jpg" alt="Cynthia Harvey" />
                                                        </div>
                                                        <div class="content">
                                                            <p>{{$msg->from_id}}</p>
                                                            <span>{{$msg->body}}, 3 min ago</span>
                                                        </div>
                                                    </div>
                                                </a>


                                            @endforeach


                                            <div class="email__footer">
                                                <a href="http://localhost:8000/chatify">See all reclamations</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="accueil">{{Auth::user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="accueil">
                                                        <img src="assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="accueil">{{Auth::user()->name}} {{Auth::user()->lastname}}</a>
                                                    </h5>
                                                    <span class="email"><a href="accueil">{{Auth::user()->email}}</a></span>
                                                </div>
                                            </div>

                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                   <i class="zmdi zmdi-power"></i>  {{ __('Logout') }}
                                                 </a>


                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                     @csrf
                                                 </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <style>

                #map { height: 300px; }
            </style>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('main')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- assets/vendor JS       -->
    <script src="assets/vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
