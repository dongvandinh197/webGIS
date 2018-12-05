


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Place</title>
  <link rel="stylesheet" href="./css/place.css">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-gJWVjz180MvwCrGGkC4xE5FjhWkTxHIR/+GgT8j2B3KKMgh6waEjPgzzh7lL7JZT" crossorigin="anonymous">
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
      <button type="button" class="btn btn-outline-success"><a href="index.php">All Of University</a></button>  
      <button type="button" class="btn btn-outline-success"><a href="direction.php">Direction Between Two University</a></button>

  </div>
  <div class="pac-card" id="pac-card">
      <div>
        <div id="title">
          <button type="button" class="btn btn-primary btn-lg btn-block">Search University</button>
        </div>
        <div id="type-selector" class="pac-controls">
          <input type="radio" name="type" id="changetype-all customRadio1" checked="checked" class="custom-control-input">
          <label for="changetype-all">All</label>

          <input type="radio" name="type" id="changetype-establishment">
          <label for="changetype-establishment">Establishments</label>

          <input type="radio" name="type" id="changetype-address">
          <label for="changetype-address">Addresses</label>

          <input type="radio" name="type" id="changetype-geocode">
          <label for="changetype-geocode">Geocodes</label>
        </div>
        <div id="strict-bounds-selector" class="pac-controls">
          <input type="checkbox" id="use-strict-bounds" value="">
          <label for="use-strict-bounds">Strict Bounds</label>
        </div>
      </div>
      <div id="pac-container">
        <input id="pac-input" type="text" class="form-control is-valid" 
            placeholder="Enter a location">
      </div>
    </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>

    <script src="./js/script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeyxWxIXVibfL8YzESr7yl63GxYmdjzRc&libraries=places&callback=initMap"
        async defer></script>
</body>
</html>