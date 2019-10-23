<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>aaaa</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ asset('js/leaflet_create.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <link rel="stylesheet" href="/css/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
</head>
<body>
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('moke.create') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="moke_name">イベント名</label>
                    <input type="text" class="form-control" name="moke_name" id="moke_name"/>
                </div>
                <div class="form-group">
                    <label for="address">イベント開催場所</label>
                    <input type="text" class="form-control" name="address" id="address"/>
                </div>
                <div class="form-group">
                    <label for="due_date">イベント開始時刻</label>
                    <input type="datetime-local" class="form-control" name="due_date" id="due_date"/>
                </div>
                <div class="form-group">
                    <label for="end_date">イベント終了時刻</label>
                    <input type="datetime-local" class="form-control" name="end_date" id="end_date"/>
                </div>
                <div class="form-group">
                    <label for="moke_detail">コメント</label>
                    <textarea class="form-control" name="moke_detail" id="moke_detail"></textarea>
                </div>
                <div class="form-group">
                    <label for="cordinate">場所</label>
                    <input type="hidden"  name="lat" id="lat" />
                    <input type="hidden"  name="lng" id="lng" />
                    <div id="mapid"></div>
                </div>

                   


<script type="text/javascript">


var mymap = L.map('mapid').setView([51.505, -0.09], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 18,
	id: 'mapbox.streets',
	accessToken: 'pk.eyJ1Ijoiam9tYTA3MTAiLCJhIjoiY2sxazlrdzBwMjlkczNjbnR3MWFmaTdhdCJ9.vl8SAy54e_LRnbE5F3eVUQ'
}).addTo(mymap);
</script>

                
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>
</body>