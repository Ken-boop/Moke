<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/leaflet_create.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"； type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <link rel="stylesheet" href="/css/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
</head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
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
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('moke.update' , ['moke'=>$moke->id] )}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="moke_name">イベント名</label>
                    <input type="text" class="form-control" name="moke_name" id="moke_name" value="{{old('moke_name',$moke->moke_name)}}">
                </div>
                <div class="form-group">
                    <label for="moke_detail">詳細</label>
                    <textarea class="form-control" name="moke_detail" id="moke_detail">{{old('moke_detail',$moke->moke_detail)}}</textarea>
                </div>
                <div class="form-group">
                    <label for="due_date">開始時刻</label>
                    <input type="datetime-local" class="form-control" name="due_date" id="due_date" value="{{old('due_date',$moke->due_date)}}">
                </div>
                <div class="form-group">
                    <label for="end_date">終了時刻</label>
                    <input type="datetime-local" class="form-control" name="end_date" id="end_date" value="{{old('end_date',$moke->end_date)}}">
                </div>
                <div class="form-group">
                    <label for="address">場所</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{old('address',$moke->address)}}">
                </div>
                <div class="form-group">
                    <label for="cordinate">場所</label>
                    <input type="hidden"  name="lat" id="lat" />
                    <input type="hidden"  name="lng" id="lng" />
                <div id="mapid_detail"></div>
<script type="text/javascript">
var mymap = L.map('mapid_detail').setView([{{ $moke->lat }}, {{ $moke->lng}}], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 18,
	id: 'mapbox.streets',
	accessToken: 'pk.eyJ1Ijoiam9tYTA3MTAiLCJhIjoiY2sxazlrdzBwMjlkczNjbnR3MWFmaTdhdCJ9.vl8SAy54e_LRnbE5F3eVUQ'
}).addTo(mymap);

// var marker = L.marker([{{ $moke->lat }}, {{ $moke->lng}}]).addTo(mymap);

</script>
                    </div>
                                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
