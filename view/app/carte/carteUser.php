<?php ?>

<style> #marker {
        background-image: url('https://image.shutterstock.com/image-vector/nursery-room-icon-vector-flat-260nw-1418621558.jpg');
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
    }</style>

<div class="clear"></div>
<div id='map' style='width: 100%; height: 600px;margin-top: 150px;margin-bottom: 50px;'></div>
<div class="clear"></div>


<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiczRzNG0iLCJhIjoiY2s4cXp3OXg1MDRlMDNsdGxweHNyaGh0ZiJ9.cVEr5FCPeU4qpNREKvdIRA';


    var map = new mapboxgl.Map({

        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [2.25, 46.25], // starting position
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
    map.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            language: 'FR',
        })
    );





    map.on('load', function(){
        var geojson = {
            type: 'FeatureCollection',
            features: [{
                geometry: {
                    type: 'Point',
                    coordinates: [0.47, 49.43],
                },
                properties:{
                    title: 'maison Samuel',
                    description: 'test en dure',

                }

            }]
        };

        <?php foreach ($pros as $pro){ ?>
        geojson.features.push({
            type:'Feature',
            geometry:{
                type: 'Point',
                coordinates: <?php echo '['.$pro->longitude.', '. $pro->latitude.']'; ?>,

            },
            properties:{
                title: <?php echo "'" .$pro->nom. "'"; ?>,
                description: <?php echo "'". 'Email:'.  $pro->email .' '. 'Adresse: ' . $pro->adresse."'"; ?>,

            }

        });
        var pro = <?php echo '[' . $pro->longitude . ', ' . $pro->latitude . ']'; ?>;
        <?php
        $message = '<p>'.'Email:' . $pro->email . '<br /> ' . 'Adresse: ' . $pro->adresse.'</p>';
        $lien = '<a href="/childguard/public/calendrier/'.$prenom.'/'.$pro->nom.'">'.'Le planning'.'</a>';
        ?>
        var popup = new mapboxgl.Popup({offset: 25}).setHTML('<?php echo $lien; echo $message ?>');
        var el = document.createElement('div');
        el.id = 'marker';

// create the marker
        new mapboxgl.Marker(el)
            .setLngLat(pro)
            .setPopup(popup) // sets a popup on this marker
            .addTo(map);
        <?php } ?>




    });










</script>



