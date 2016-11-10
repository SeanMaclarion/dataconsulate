<footer>
<div class="content">
			<a name="newsletter"></a>
            <div class="free-plan">
			<div class="footer-top">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-12" style="text-align: center; width: 117%;">
                        	<ul>
                            	<li><a class="fb" href="https://www.facebook.com/CornerstoneServicesInc/" target="_blank">&nbsp;</a></li>
                                <li><a class="twiter" href="https://twitter.com/CRSTNET" target="_blank">&nbsp; </a></li>
                                <li><a class="rss" href="http://crst.net/articles/" target="_blank">&nbsp;</a> </li>
                                <li><a class="linkedin" href="https://www.linkedin.com/company/cornerstone-services-inc-?trk=top_nav_home" target="_blank">&nbsp;</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
<!--Div for google maps styling -->
   <!-- Content -->
        <div class="content">
			<div class="brand-info">
                	<div id="contact-form" class="container">
                    	<div class="row">
                        	<div class="col-sm-12">
                            	<h2>We’d love to hear from you!</h2>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 form-info">
                                 <form role="form" method="post" action="send_form_email.php">
                                  <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="customer_name">
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="customer_email">
                                  </div>
                               
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input name="subject" type="text" class="form-control" id="subject">
                                  </div>
                                  <div class="form-group">
                                  <label for="comment">Message</label>
                                  <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
                                  </div>
                                  <button id="btn" class="btn btn-primary btn-block active" type="submit" value="SEND" name="submit">SEND</button>
                                </form>
								
                            </div>
                        </div>
                       
                    </div>
              </div>
			  <A NAME="contact"></a>
<div id="googlemaps"></div>

<!--Start Google Map API implementation -->
<!-- Include the Google Maps API library - required for embedding maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBhRRXcnQR1UmpgwHri_IXQrFna0M7j31c&callback=initMap"></script>
 
<script type="text/javascript">
 
// The latitude and longitude of Cornerstone Services
var position = [41.7365,-74.05];
 
function showGoogleMaps() {
 
    var latLng = new google.maps.LatLng(position[0], position[1]);
 
    var mapOptions = {
        zoom: 12, // initialize zoom level - the max value is 21
		scrollwheel: false,
		mapTypeControl: false,  
		panControl: false,
		zoomControl: false, 
		scaleControl: false,
		streetViewControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
    };
 
    map = new google.maps.Map(document.getElementById('googlemaps'),
        mapOptions);
 
    
}
 
google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>
<!--End google map API implementation -->
<?php
?>
						
            <div class="footer-bottom">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-12">
                        	<p>&copy; 2016<a href="https://www.dataconsulate.com"> DataConsulate.</a> All rights reserved.  Privacy Policy.</p>
                        </div>
                    </div>
                </div>
            </div>

	</div>
</div>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
