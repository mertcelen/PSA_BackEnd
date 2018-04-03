@if(isset($status) && $status == 2)
<?php die('YOU ARE BANNED'); ?>
@endif
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/styles.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Radius</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
<div>
    @auth
        <header>
            <nav class="navbar navbar-expand-lg navbar-custom">
                <style>

                </style>
                <a class="navbar-brand"
                   href="#"><strong>Radius</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="photos">My Photos <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings">Settings<span class="sr-only"></span></a>
                            </li>
                            @if(Auth::user()->isAdmin())
                                <li class="nav-item">
                                    <a class="nav-link" href="admin">Admin Panel<span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://sql.psactis.me" target="_blank">phpMyAdmin<span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://api.psactis.me" target="_blank">ApiDoc<span class="sr-only"></span></a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                    <ul class="navbar-nav navbar-right">
                        @auth
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <li class="nav-item">
                                <a class="nav-link" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <img src="/avatar/{{Auth::user()->avatar}}.jpg" width="30px" height="30px"/>
                                    <b>Logout from {{Auth::user()->name}}</b>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </header>
    @endauth

    <div class="container px-2 py-2">
        @yield('content')
    </div>
</div>
@include('layouts.loading')
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
</html>
