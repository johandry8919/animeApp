<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
   
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/elegant-icons.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/plyr.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/nice-select.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/slicknav.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css">
</head>
<body>
    <div id="app">
    

            <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href={{ url('/') }}>
                            <img src={{ asset('img/logo.png') }} alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
                                <li><a href="categories">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                         <li><a href={{ route('categories') }}>Categories</a></li>
                                        <li><a href={{ route('anime-details') }}>Anime Details</a></li>
                                        <li><a href={{ route('anime-watching') }}>Anime Watching</a></li>
                                        <li><a href={{ route('blog-details') }}>Blog Details</a></li>
                                        <li><a href={{ route('register') }}>Sign Up</a></li>
                                        <li><a href={{ route('login') }}>Login</a></li> 
                                    </ul>
                                </li>
                                <li><a href={{ url('/') }}>Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href={{ route('login') }}><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>



    
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href={{ url('/') }}><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="{{ url('/') }}">Homepage</a></li>
                            {{-- <li><a href={{ route('categories') }}>Categories</a></li> --}}
                            {{-- <li><a href={{ route('blog') }}>Our Blog</a></li> --}}
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>

    <script src={{asset('js/jquery-3.3.1.min.js')}}></script>
    <script src={{asset('js/bootstrap.min.js')}}></script>
    <script src={{asset('js/player.js')}}></script>
    <script src={{asset('js/jquery.nice-select.min.js')}}></script>
    <script src={{asset('js/mixitup.min.js')}}></script>
    <script src={{asset('js/jquery.slicknav.js')}}></script>
    <script src={{asset('js/owl.carousel.min.js')}}></script>
    <script src={{asset('js/main.js')}}></script>
</body>
</html>
