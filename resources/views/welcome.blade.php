@extends('layouts.app')

@section('content')
    <script src="{{asset('js/home.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>Radius</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">Radius is a platform that suggests new fashion
                        styles and makes recommendations for new items.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" onclick="action('login')">Start here</a>
                </div>
            </div>
        </div>
    </header>
    @include('layouts.auth')
    @include('auth.login')
    @include('auth.register')
@endsection