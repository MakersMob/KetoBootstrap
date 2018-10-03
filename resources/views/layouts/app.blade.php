<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="UYl9xcBl6uGEb78YenOCA724Uxa-ppdMsQnFZt-B79g" />
    <meta name="google-site-verification" content="gThN8HtB6TekSYHSkIMPPdMdDryPiGFnn40Wawh2BRs" />

    <title>{{ $title OR 'Keto Bootstrap: Lose Weight with the Keto Diet' }}</title>
    <meta name="description" content="{{ $description or 'Learn how to drop the fat and keep it off by eating delicious foods with the Ketogenic Diet.' }}"/>
    <meta property="og:type" content="{{ $type or 'article'}}" />
    <meta property="og:title" content="{{ $title or '28-Day Weight Loss Challenge' }}" />
    <meta property="og:description" content="{{ $description or 'Learn how to drop the fat and keep it off by eating delicious foods with the Ketogenic Diet.' }}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="Keto Bootstrap" />
    <meta property="og:image" content="https://s3-us-west-2.amazonaws.com/ketodash-master/wp-content/uploads/2017/01/18221125/favicon.png">
    <meta property="article:author" content="Paul Scrivens" />
    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="//js.stripe.com/v3/"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('headScripts')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://s3-us-west-2.amazonaws.com/ketodash-master/blog/wp-content/uploads/2018/08/09032004/logo-64.png" alt="Keto Bootstrap"> Keto Bootstrap
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('keto-diet*')) active @endif" href="/keto-diet">Diet Guide</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('keto-shopping-list*')) active @endif" href="/keto-shopping-list">Shopping List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('keto-meal-plan*')) active @endif" href="/keto-meal-plan">7-Day Meal Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('recipe*')) active @endif" href="/recipes">Recipes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('join*')) active @endif" href="/join">Join the Challenge</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle @if(Request::is('challenge*')) active @endif" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" href="#">Challenges</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/challenge/keto-bootcamp">Keto Bootcamp</a>
                                    <a class="dropdown-item" href="/challenge/28-day-weight-loss-challenge">Weight Loss</a>
                                    <a class="dropdown-item" href="/challenge/28-day-workout-challenge">Workout</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('recipe*') || Request::is('keto-recipes*')) active @endif" href="/recipes">Recipes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('meal-plan*')) active @endif" href="/meal-plan">Meal Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('macros*')) active @endif" href="/macros">Macros</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link @if(Request::is('wins*')) active @endif" href="/wins">#wins</a>
                            </li>-->
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hi, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/user/recipes">Saved Recipes</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>&copy; Makers Mob LLC. | <a href="/keto-diet">Ketogenic Diet Guide</a> | <a href="/keto-shopping-list">Keto Shopping List</a> | <a href="/blog">Keto Blog</a> | <a href="/keto-meal-plan">Keto Diet Menu</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @yield('footScripts')
    @if (ENV('APP_ENV') == 'production')
        <!-- All -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51364-104"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-51364-104');
        </script>
    @endif
</body>
</html>