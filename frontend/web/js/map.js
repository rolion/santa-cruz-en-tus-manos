//Carga el mapa vacio con un marker en medio

    function initialize() {

          var map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 15,
            center: new google.maps.LatLng(-17.7832186,-63.1820423),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          var infowindow = new google.maps.InfoWindow();
          var marker = new google.maps.Marker({
              		position: new google.maps.LatLng(-17.7832186,-63.1820423),
              		map: map,
              		title: "I'm Here!"          		
            	});	


            
            google.maps.event.addListener(marker, 'click', (function(marker) {
              return function() {
                infowindow.open(map, marker);
              }
            })(marker));
          
        }
        google.maps.event.addDomListener(window, 'load', initialize);
