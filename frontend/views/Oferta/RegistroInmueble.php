<!Document <html>
<head>
	<title></title>

</head>
<body>
	<div style='overflow:hidden;height:700px;width:1800px;'>
							<div id='gmap_canvas' style='height:700px;width:1800px;'></div>
							<div><small><a href="http://embedgooglemaps.com">embed google map</a></small></div>
							<div><small><a href="http://botonmegusta.org">boton me gusta</a></small></div>
							<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
						</div>
						  <script type='text/javascript'>
                         function init_map(){
                                var myOptions = {
                                    zoom:13,
                                    disableDoubleClickZoom: true,
                                    center:new google.maps.LatLng(-17.8145819,-63.15608529999997),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP};
                                   
                                   var  map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                    var marker = null;
                                    google.maps.event.addListener(map,'dblclick', function(event){
                                        if(marker== null){
                                             marker = new google.maps.Marker({
                                            position:event.latLng,
                                            draggable: true,
                                            map: map});
                                        }
                                       
                                    }); 
                                    
                                }
                            google.maps.event.addDomListener(window, 'load', init_map);

                        </script>

                            <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
</body>
</html>>