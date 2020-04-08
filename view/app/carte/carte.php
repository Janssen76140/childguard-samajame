<?php ?>


<div id='map' style='width: 90%; height: 1000px;padding-top: 250px;padding-left: 5%; padding-right: 5%;'></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiczRzNG0iLCJhIjoiY2s4cXp3OXg1MDRlMDNsdGxweHNyaGh0ZiJ9.cVEr5FCPeU4qpNREKvdIRA';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-96, 37.8], // starting position
        zoom: 3 // starting zoom
    });

    // Add geolocate control to the map.
    map.addControl(
        new mapboxgl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
            trackUserLocation: true
        })
    );
</script>