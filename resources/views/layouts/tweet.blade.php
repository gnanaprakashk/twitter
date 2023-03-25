<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="header">
            <div class="header-content">
                <ul class="global-actions">
                    <li>
                        <span class="selected-dot"></span>
                        <div class="global-actions-button-content"><span id="home-icon"></span>
                            <p><a href="{{ route('home') }}">Home</a></p>
                        </div>
                        <div class="button-bottom-highlight"></div>
                    </li>

                    <li>
                        <div class="global-actions-button-content"><span id="notifications-icon"></span>
                            <p>Notifications</p>
                        </div>
                        <div class="button-bottom-highlight-inactive"></div>
                    </li>

                    <li>
                        <div class="global-actions-button-content"><span id="messages-icon"></span>
                            <p>Messages</p>
                        </div>
                        <div class="button-bottom-highlight-inactive"></div>
                    </li>
                </ul>

                <button class="compose-tweet" onclick="createTweet()">
                    <div class="wrap">
                        <span></span>
                        <p>Tweet</p>
                    </div>
                </button>

                <img src="{{url('images/avatars/1.png')}}" alt="" class="profile-picture-small">

                <div class="search">
                    <input type="text" placeholder="Search Twitter" />
                    <p><span></span></p>
                </div>

                <img src="{{url('images/logo.png')}}" alt="" class="logo" />
            </div>
        </div>

        <div class="page-wrap">
            @include('feeds.left-sidebar')
            <div class="central-content top-level-panel">   
                @yield('content')
            </div>
            @include('feeds.right-sidebar')
        </div>
        @include('notification')
        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/custom-script.js') }}" defer></script>

    </body>
</html>
