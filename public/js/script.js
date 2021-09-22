 //$(document).ready(function(){

//const { includes } = require("lodash");
$.ajax({
    method:  "GET",
    url: '/machines',
    data:
})
    var myLatLng = new google.maps.LatLng(30,31);

   var map = new google.maps.Map(document.getElementById("map"), {
        center: myLatLng,
        zoom: 7,
      });

              //marker
         function createMarker(latlng,icn){
            var marker = new google.maps.Marker({
                position: latlng,
               // position: "{{$machines -> longitude, $machines -> latitude}}",
                map: map,
                icon: icn,
                title:"szone  machine"
            });
         }


      var request = {
        location: myLatLng,
        radius: '2500',
        types: ['store']
      };

      service = new google.maps.places.PlacesService(map);
service.nearbySearch(request, callback);

function callback(results, status) {

       // console.log(results);
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        var place = results[i];
        latlng = place.geometry.location;
        icn =  {
            url: "/kk.png", // url
            scaledSize: new google.maps.Size(40, 40), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };

        createMarker(latlng,icn);
      }
    }
  }

 //});
