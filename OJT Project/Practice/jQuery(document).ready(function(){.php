echo "<script> jQuery(document).ready(function(){

  var locations = [
    ["a","Title A",46.3,-72.5],
    ["b","Title B",45.9,-72.4],
    ["c","Title C",45.6,-72.1]
  ] ;

  var map = new google.maps.Map(
    document.getElementById('map'), 
    {
      zoom: 7,
      center: new google.maps.LatLng(45.892235, -72.5371626),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
  );

  jQuery(locations).each(function(k,v) {
    
    locations[k].push('what s in index 4 ?') ; // Push in index 4
    
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(v[2],v[3]),
      map: map,
      title: v[1]
    })
    locations[k].push(marker) ;

  }) ;

  var directionsService = new google.maps.DirectionsService;
  var directionDisplays = [] ; // We need to store displays to be abled to remove them on each "getRoute" click.

  document.getElementById('getRoutes').addEventListener('click', getRoutes);

  function getRoutes() {

  	// Removing existing routes if any
    for ( i = 0 ; i < directionDisplays.length ; i++ )
      directionDisplays[i].setMap(null) ;

    directionDisplays = [] ;

    // Now the important part : for each location we look for the route
    jQuery(locations).each(function(k,v) {
    	
    	directionsService.route({
        	origin: document.getElementById('whereami').value,
          	destination: new google.maps.LatLng(v[2],v[3]) ,
          	travelMode: 'DRIVING'
        }, function (response, status) {
          if (status === 'OK') {
          	// This callback is call asynchronous, this is probably why it's complicated to access locations[k]
            var directionsDisplay = new google.maps.DirectionsRenderer ;
            directionsDisplay.setMap(map) ;
            // We remove the marker "B" added by directionsDisplay.
            directionsDisplay.setOptions( { suppressMarkers: true } );
            directionsDisplay.setDirections(response);
            directionDisplays.push(directionsDisplay) ;
            var point = response.routes[ 0 ].legs[ 0 ];

            // We affect the direction to the marker to make it accessible later
            locations[k][5].duration = point.distance.text ;

            // And know we just have to add a listener.
		    locations[k][5].addListener('click',function(){
		      	console.log(this.title,this.duration) ;
		    }) ;

          } else {
            window.alert('Directions request failed due to ' + status);
          }
       }
      );
    }) ;
  }
  </script>";