function cargarDatosMapa() {

		var imageCompra = '/santa-cruz-en-tus-manos/frontend/web/img/01.png'
		var imageAlquiler = '/santa-cruz-en-tus-manos/frontend/web/img/02.png'
		var imageAnticretico = '/santa-cruz-en-tus-manos/frontend/web/img/03.png'

      var marcadores = [
        ['co', -17.7832186,-63.1820430],
        ['al', -17.7833196,-63.1820423],
        ['al', -17.7833196,-63.1810423],
        ['an', -17.7831186,-63.1820555]
      ];
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 15,
        center: new google.maps.LatLng(-17.7832186,-63.1820423),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      // carga los markkerz
      var marker, i;
      for (i = 0; i < marcadores.length; i++) { 
      	switch(marcadores[i][0]) {
		    case 'co':
        	marker = new google.maps.Marker({
          		position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          		map: map,
          		title: "En Venta!",
          		icon: imageCompra
        	});	
        	break
        	case 'al':
        	marker = new google.maps.Marker({
          		position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          		map: map,
          		title: "En Alquiler!",
          		icon: imageAlquiler
        	});	
        	break
        	case 'an':
        	marker = new google.maps.Marker({
          		position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          		map: map,
          		title: "En Anticretico!",
          		icon: imageAnticretico
        	});	
        	break;
		}

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);