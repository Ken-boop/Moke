
var marker = L.marker();



function onMapClick(e) {
	lat = e.latlng.lat;
	lng = e.latlng.lng;

	
	marker
		.setLatLng(e.latlng)
		.addTo(mymap);


	document.getElementById("lat").value=lat;	
	document.getElementById("lng").value=lng;	

	
}

mymap.on('click', onMapClick);