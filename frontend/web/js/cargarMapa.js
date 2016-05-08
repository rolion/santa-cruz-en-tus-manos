
  function cargarDatosMapa() {

  		
      var servicio = $('#servicio input[type="checkbox"]:checked');
      var tipo = $('#tipo input[type="checkbox"]:checked');
      var ser=[];
      var t=[];
      $.each(servicio, function(index, value){
          ser.push($(this).val());
      });
      $.each(tipo, function(index, value){
          t.push($(this).val());
      })
      var marcadores=null;
      $.ajax({

        type: 'POST',
        url: "http://localhost:8080/santa-cruz-en-tus-manos/frontend/web/index.php?r=inmueble/inmueble",
        data:{servicio:ser,tipo:t},
      }).done(function(data) {
          marcadores=jQuery.parseJSON(data);
          initMap(marcadores);
          console.log(data);
      });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
function initMap(marcadores){
  var imageVenta = '/santa-cruz-en-tus-manos/frontend/web/img/01.png'
  var imageAlquiler = '/santa-cruz-en-tus-manos/frontend/web/img/02.png'
  var imageAnticretico = '/santa-cruz-en-tus-manos/frontend/web/img/03.png'
  var map = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 15,
    center: new google.maps.LatLng(-17.7832186,-63.1820423),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var infowindow = new google.maps.InfoWindow();
  // carga los markkerz
  var marker, i;
  var latitiud;
  var longitud;
  for (i = 0; i < marcadores.length; i++) { 
    var ser=marcadores[i].servicio;
    latitud=parseFloat(marcadores[i].latitud);
    longitud=parseFloat(marcadores[i].longitud);
    switch(ser) {
        case 'Venta':
          
          marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitud, 
                longitud),
              map: map,
              title: "En Venta!",
              icon: imageVenta
          }); 
          break;
          case 'Alquiler':
          
          marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitud, 
                longitud),
              map: map,
              title: "En Alquiler!",
              icon: imageAlquiler
          }); 
          break;
          case 'Anticretico':
         
          marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitiud, 
                longitud),
              map: map,
              title: "En Anticretico!",
              icon: imageAnticretico
          }); 
          break;
      }

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
       /* infowindow.setContent('<h4>'+marcadores[i].nombre+'</h4>'
                              +'<h4>Unidad vecinal'+marcadores[i].uv+'</h4>'
          );*/
        obtenerPuntosDistrito(marcadores[i].distrito,map);
        infowindow.open(map, marker); 
      }
    })(marker, i));
  }
}
function obtenerPuntosDistrito(distrito, map){
      $.ajax({
        type: 'POST',
        url: "http://localhost:8080/santa-cruz-en-tus-manos/frontend/web/index.php?r=point/puntos-distritos",
        data:{distrito:distrito},
      }).done(function(data) {
          marcadores=jQuery.parseJSON(data);
          agregarMarcadores(marcadores, map);
          console.log(data);
      });
}
function agregarMarcadores(marcadores, map){
    var imageVenta = '/santa-cruz-en-tus-manos/frontend/web/img/01.png'
  var imageAlquiler = '/santa-cruz-en-tus-manos/frontend/web/img/02.png'
  var imageAnticretico = '/santa-cruz-en-tus-manos/frontend/web/img/03.png'

  var imageColegio = '/santa-cruz-en-tus-manos/frontend/web/img/colegio.png'
  var imageHospital = '/santa-cruz-en-tus-manos/frontend/web/img/hospital.png'
  var imagePlaza = '/santa-cruz-en-tus-manos/frontend/web/img/plaza.png'

  for (var i = 0; i <marcadores.length; i++) {
      var marcador=marcadores[i];
      for (j = 0; j < marcador.length; j++) { 
    var ser=marcador[j].type;
    latitud=parseFloat(marcador[j].longitud);
    longitud=parseFloat(marcador[j].latitud);
    switch(ser) {
        case 'colegio':
          
          marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitud, 
                longitud),
              map: map,
              title: "colegio",
              icon: imageColegio
          }); 
          marker.setMap(map);
          break;
          case 'plaza':
          
          marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitud, 
                longitud),
              map: map,
              title: "plaza",
              icon: imagePlaza
          }); 
          marker.setMap(map);
          break;
          case 'hospital':
         
          marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitiud, 
                longitud),
              map: map,
              title: "hospital",
              icon: imageHospital
          }); 
          marker.setMap(map);
          break;

      }

   /* google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(
          );
        infowindow.open(map, marker); 
      }
    })(marker, i));*/
  }
  };

}