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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Vendor CSS-->
    <link href="../../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../assets/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <style>
        a {
            text-decoration: none;
        }
        #map { height: 300px; }
    </style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="client">
                            <img src="assets/images/icon/logo-white.png" alt="CoolAdmin" style="width: 40px" />
                        </a>
                    </div>
                    <div>
                        <h1>BIENVENUE SUR FLIGHT TRACKER...</h1>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="history">
                                    <i class="fa-solid fa-clock-rotate-left" style="color: #ffffff;"></i>
                                    Historique
                                    <span class="bot-line"></span>
                                </a>

                            </li>
                            <li>
                                <a href="saved_vols">
                                    <i class="fa-solid fa-bookmark" style="color: #ffffff;"></i>
                                    <span class="bot-line"></span>Vols Enregistrés</a>
                            </li>

                            <li>
                                <a href="aboutus">
                                    <i class="fa-solid fa-a" style="color: #ffffff;"></i>
                                    <span class="bot-line"></span>propos de nous</a>
                            </li>

                        </ul>
                    </div>
                    <div class="header__tool">
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
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"> {{Auth::user()->name}} {{Auth::user()->lastname}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="client">
                                                <img src="assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="client">{{Auth::user()->name}}</a>
                                            </h5>
                                            <a href="client"> <span class="email">{{Auth::user()->email}}</span></a>
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
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="client">
                            <img src="assets/images/icon/logo-white.png" alt="CoolAdmin" style="width: 40px" />
                        </a>
                    </div>
                    <div>
                        <h1>BIENVENUE SUR FLIGHT TRACKER...</h1>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="history">
                                    <i class="fa-solid fa-clock-rotate-left" style="color: #ffffff;"></i>
                                    Historique
                                    <span class="bot-line"></span>
                                </a>

                            </li>
                            <li>
                                <a href="saved_vols">
                                    <i class="fa-solid fa-bookmark" style="color: #ffffff;"></i>
                                    <span class="bot-line"></span>Vols Enregistrés</a>
                            </li>

                            <li>
                                <a href="aboutus">
                                    <i class="fa-solid fa-a" style="color: #ffffff;"></i>
                                    <span class="bot-line"></span>propos de nous</a>
                            </li>

                        </ul>
                    </div>
                    <div class="header__tool">
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
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"> {{Auth::user()->name}} {{Auth::user()->lastname}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="client">
                                                <img src="assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="client">{{Auth::user()->name}}</a>
                                            </h5>
                                            <a href="client"> <span class="email">{{Auth::user()->email}}</span></a>
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
        </header>





           <!-- MAIN CONTENT-->
           <div class="main-content">
            @yield('main')
            </div>

        </div>






    <!-- Jquery JS-->
    <script src="../../../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../../../assets/vendor/wow/wow.min.js"></script>
    <script src="../../../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>
    @yield('script')
</body>

</html>


<!-- end document-->
