<?php ?>

<div class="clear"></div>
<div id='map' style='width: 100%; height: 600px;margin-top: 150px;margin-bottom: 50px;'></div>
<div class="clear"></div>
<?php foreach($pros as $pro) { ?>
    <tr>
        <td><?= $pro->nom; ?></td>
        <td><?= $pro->prix; ?> €/heure</td>
        <td><?= $pro->email; ?></td>
        <td><?= $pro->heureDebut; ?></td>
        <td><?= $pro->heureFin; ?></td>
        <td><?= $pro->adresse; ?></td>
        <td>
            <a>Voir</a>
        </td>
    </tr>
<?php } ?>
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
                            description: 'test en dure'
                        }

                    }]
                };

                <?php foreach ($pros as $pro){ ?>
                    geojson.features.push({
                        type:'Feature',
                        geometry:{
                                    type: 'Point',
                                    coordinates: <?php echo '['.$pro->longitude.','. $pro->latitude.']'; ?>,
                        },
                        properties:{
                            title: <?php echo $pro->nom; ?>,
                            description: <?php echo '<p>Email: '. $pro->email .'</p>' . '<p>Adresse: ' . $pro->adresse . '</p>'; ?>,
                            // essayer d'afficher depuis le tableau
                        }

                    });
                <?php } ?>
            });

           geojson.features.forEach(function (marker) {

               //Instantiation de l'image du pointeur également à gérer sur le style (mapbox.css)
               // create a HTML element for each feature
               var el = document.createElement('div');
               el.className = 'marker';


               // make a marker for each feature and add to the map
               new mapboxgl.Marker(el)
                   .setLngLat(marker.geometry.coordinates)
                   .addTo(map)
                   .setPopup(new mapboxgl.Popup({offset: 25}) // add popups
                       .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
                   .addTo(map);

           });







</script>



