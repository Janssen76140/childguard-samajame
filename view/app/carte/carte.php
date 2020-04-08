<?php ?>

<div class="clear"></div>
<div id='map' style='width: 100%; height: 600px;margin-top: 150px;margin-bottom: 50px;'></div>
<div class="clear"></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiczRzNG0iLCJhIjoiY2s4cXp3OXg1MDRlMDNsdGxweHNyaGh0ZiJ9.cVEr5FCPeU4qpNREKvdIRA';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-96, 37.8], // starting position
        zoom: 4 // starting zoom
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