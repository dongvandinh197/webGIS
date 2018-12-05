<?php 
  require('getdata.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Displaying Text Directions With setPanel()</title>
    <link rel="stylesheet" href="./css/direction.css">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-gJWVjz180MvwCrGGkC4xE5FjhWkTxHIR/+GgT8j2B3KKMgh6waEjPgzzh7lL7JZT" crossorigin="anonymous">
  </head>
  <body>

    <div class="alert alert-dismissible alert-primary text-center" style="margin-bottom: -0px;">
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
    <div id="floating-panel">
      <strong>Start:</strong>
      <select id="start">
        <option value="select" selected>Select</option>
      </select>
      <br>
      <strong>End:</strong>
      <select id="end">
        <option value="select" selected>Select</option>
      </select>
    </div>
    <div id="right-panel"></div>
    <div id="map"></div>
    <script>
      var locations = [
      <?php while ($row = $q->fetch()): ?>
        <?='"'.$row['name'].'"'.','?>
                            
      <?php endwhile; ?>
      ];
      var select, i, option;

      select = document.getElementById('end');
      select1 = document.getElementById('start');

      for ( i = 0; i <= 48; i += 1 ) {
          option = document.createElement( 'option' );
          option.value = option.text =locations[i];
          select.add( option );
          
      };
      for ( i = 0; i <= 48; i += 1 ) {
          option = document.createElement( 'option' );
          option.value = option.text =locations[i];
          select1.add( option );
          
      };


    </script>
    <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var end = document.getElementById('end').value;
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeyxWxIXVibfL8YzESr7yl63GxYmdjzRc&callback=initMap">
    </script>
  </body>
</html>
