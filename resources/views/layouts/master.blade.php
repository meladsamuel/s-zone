<html>
    <head>
        <meta charset="UTF-8">
        <title>laramap</title>
</meta>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>

  <h1> laramap</h1>
    @yield('content')

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG-EYwZNQE8p_eUx7yey-JRLhIg-VXWDY&callback=initMap"></script>
<!--
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG-EYwZNQE8p_eUx7yey-JRLhIg-VXWDY&libraries=places"> -->
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<!-- <script>
var directionsDisplay,
    directionsService,
    map;

function initialize() {
  var directionsService = new google.maps.DirectionsService();
  directionsDisplay = new google.maps.DirectionsRenderer();
  var chicago = new google.maps.LatLng(41.850033, -87.6500523);
  var mapOptions = { zoom:7, mapTypeId: google.maps.MapTypeId.ROADMAP, center: chicago }
  map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
  directionsDisplay.setMap(map);
}

</script> -->

<script >
    // Initialize and add the map
function initMap() {
  // The location of Uluru

  var myLatLng = new google.maps.LatLng(30,31);
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: myLatLng,
  });

  function createMarker(latlng){
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: {
                    url: "/kk.png", // url
                    scaledSize: new google.maps.Size(40, 40), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(0, 0) // anchor
                },
                title:"szone  machine"
            });
         }
     $.ajax({
        type:  "GET",
        url: '/machines',
        data: {_token:  "{{csrf_token()}}"},
        success: function(data) {
          data.forEach(machine=>createMarker({lat:+machine.latitude, lng: +machine.longitude}))
        }
    });
}
     //$(document).ready(function(){

//const { includes } = require("lodash");

//     var myLatLng = new google.maps.LatLng(30,31);

//    var map = new google.maps.Map(document.getElementById("map"), {
//         center: myLatLng,
//         zoom: 7,
//       });

        //       //marker


    // $.ajax({
    //     type:  "GET",
    //     url: '/machines',
    //     data: {_token:  "{{csrf_token()}}"},
    //     success: function(data) {
    //       data.forEach(machine=>console.log({lat:machine.latitude, lng: machine.longitude}))
    //     }
    // });

//       service = new google.maps.places.PlacesService(map);
// service.nearbySearch(request, callback);

// function callback(results, status) {

//        // console.log(results);
//     if (status == google.maps.places.PlacesServiceStatus.OK) {
//       for (var i = 0; i < results.length; i++) {
//         var place = results[i];
//         latlng = place.geometry.location;
//         icn =  {
//             url: "/kk.png", // url
//             scaledSize: new google.maps.Size(40, 40), // scaled size
//             origin: new google.maps.Point(0,0), // origin
//             anchor: new google.maps.Point(0, 0) // anchor
//         };

//         createMarker(latlng,icn);
//       }
//     }
//   }

 //});

</script>

    </body>
</html>
