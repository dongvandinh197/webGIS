<?php

    require('getdata.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Manager University</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-gJWVjz180MvwCrGGkC4xE5FjhWkTxHIR/+GgT8j2B3KKMgh6waEjPgzzh7lL7JZT" crossorigin="anonymous">   
   <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div class="alert alert-dismissible alert-primary text-center" style="margin-bottom: -5px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4 class="alert-heading ">Web GIS Application for Managerment University In Ha Noi City</h4>
          <p class="mb-0">Build In PHP + MySQL . </p>
          <p style="display: inline;width: 50px;">Team Building</p>
          <span class="badge badge-pill badge-success">Đinh Văn Đông</span> 
          <span class="badge badge-pill badge-success">Trần Thị Diệu Ninh</span> 
          <br>
          <br>
          <p style="display: inline;width: 50px;">App can be :</p>
          <button type="button" class="btn btn-outline-success"><a href="place.php">Find Location University</a></button>  
          <button type="button" class="btn btn-outline-success"><a href="direction.php">Direction Between Two University</a></button>
          <button type="button" class="btn btn-outline-success"><a href="list_uni.php">List University</a></button>

      </div>

    <div id="map"></div>
<script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: 21.027219, lng: 105.836450}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }

      var locations = [
      <?php while ($row = $q->fetch()): ?>
        <?php echo '{lat: '.$row['lat'].','.' lng: '.$row['lng'].'},' ?>
                            
      <?php endwhile; ?>
        // {lat: -33.718234, lng: 147.154312},
        // {lat: -33.718234, lng: 150.363181},
        // {lat: -33.727111, lng: 150.371124},
        // {lat: -33.848588, lng: 151.209834},
        // {lat: -33.851702, lng: 151.216968},
        // {lat: -34.671264, lng: 150.863657},
        // {lat: -35.304724, lng: 148.662905},
        // {lat: -36.817685, lng: 175.699196},
        // {lat: -36.828611, lng: 175.790222},
        // {lat: -37.750000, lng: 145.116667},
        // {lat: -37.759859, lng: 145.128708},
        // {lat: -37.765015, lng: 145.133858},
        // {lat: -37.770104, lng: 145.143299},
        // {lat: -37.773700, lng: 145.145187},
        // {lat: -37.774785, lng: 145.137978},
        // {lat: -37.819616, lng: 144.968119},
        // {lat: -38.330766, lng: 144.695692},
        // {lat: -39.927193, lng: 175.053218},
        // {lat: -41.330162, lng: 174.865694},
        // {lat: -42.734358, lng: 147.439506},
        // {lat: -42.734358, lng: 147.501315},
        // {lat: -42.735258, lng: 147.438000},
        // {lat: -43.999792, lng: 170.463352}
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxp79gF8JcjPxEX5bRkF-p1FuDB9kKwho&libraries=places&callback=initMap"
        async defer></script> 
  </body>
</html>