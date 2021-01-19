<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Spanning Career') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="app-assets/images/logo/cbitss.png">
  <link href="css/css.css" rel="stylesheet">
  <!-- Start: Vendor CSS -->
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/timeline/vertical-timeline.css">

  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">

  <!-- END: Theme CSS-->

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/chat-application.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/users.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.min.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END: Custom CSS-->

  <!-- BEGIN: Font Awsesome CSS-->
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/customs.css">
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <!-- End: Font Awsesome CSS-->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-image: linear-gradient(to right, #244484, #0040bf);">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="{{ route('post-job') }}">
                                        {{ __('Post A Job') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="css/customstyle.js" type="text/javascript"></script>
</body>
</html>
