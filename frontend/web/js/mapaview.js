 var marker = null;
                          
                         
                         function init_map(){

                          var contentString = '<div id="content">'+
                              '<div id="siteNotice">'+
                              '</div>'+
                              '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
                              '<div id="bodyContent">'+
                              '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, '+
                              '(last visited June 22, 2009).</p>'+
                              '</div>'+
                              '</div>';

                                var myOptions = {
                                    zoom:13,
                                    disableDoubleClickZoom: true,
                                    center:new google.maps.LatLng(-17.8145819,-63.15608529999997),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                  };
                                   
                                   var  map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);

                                    google.maps.event.addListener(map,'click', function(event){
                                        if(event!= null){

                                        if(marker != null){
                                            marker.setMap(null);
                                        } 
                                             marker = new google.maps.Marker({
                                                                              position:event.latLng,
                                                                              draggable: true,
                                                                              map: map
                                                                              });

                                               google.maps.event.addListener(marker,'mouseover',function(){
                                                    infowindow.open(map,marker);
                                               });

                                               google.maps.event.addListener(marker,'mouseout',function(){
                                                infowindow.close();
                                               });

                                               google.maps.event.addListener(marker,'dblclick',function(){
                                                    marker.setMap(null);
                                                    marker = null;
                                               });
                                          
                                      
                                        }
                                       
                                    }); 
                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                      }); 
                                    
                                }
                            google.maps.event.addDomListener(window, 'load', init_map);
