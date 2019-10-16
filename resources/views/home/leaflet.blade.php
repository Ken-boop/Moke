<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>aaaa</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
<a href="{{ route('moke.create') }}" class="btn btn-primary btn-block">イベント登録</a>

<a href="{{ route('friend.index', ['user' => $user_id]) }}" class="btn btn-warning">友達登録</a>

<div id="mapid"></div>

<script type="text/javascript">
var mokes = {!! json_encode($mokes->toArray()) !!}

var mymap = L.map('mapid').setView([51.505, -0.09], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 18,
	id: 'mapbox.streets',
	accessToken: 'pk.eyJ1Ijoiam9tYTA3MTAiLCJhIjoiY2sxazlrdzBwMjlkczNjbnR3MWFmaTdhdCJ9.vl8SAy54e_LRnbE5F3eVUQ'
}).addTo(mymap);
// var moke0=mokes[0];
// console.log(mokes)

var marker = L.marker([51.5, -0.09]).addTo(mymap);
marker.bindPopup("<b>{{$mokes[0]->moke_name}}</b><br>{{$mokes[0]->moke_detail}}").openPopup();
var marker = L.marker([51.49, -0.095]).addTo(mymap);
marker.bindPopup("<b>{{$mokes[1]->moke_name}}</b><br>{{$mokes[1]->moke_detail}}").openPopup();
var marker = L.marker([51.498, -0.08]).addTo(mymap);
marker.bindPopup("<b>{{$mokes[2]->moke_name}}</b><br>{{$mokes[2]->moke_detail}}").openPopup();

</script>
{{$mokes[0]->moke_name}}
@foreach ($mokes as $moke)
        <div class="m-4 p-4 border border-primary">
            <p>{{ $moke->moke_name }}</p>
            <p>{{ $moke->due_date }}</p>
            <p>{{ $moke->end_date }}</p>
            <p>{{ $moke->moke_detail }}</p>
            <p>{{ $moke->address }}</p>
            <p>{{ $moke->created_at }}</p>
            <a class="btn btn-success" href="{{ route('moke.edit', ['moke' => $moke->moke_id]) }}">イベント編集</a>
        </div>
@endforeach

</body>
</html>