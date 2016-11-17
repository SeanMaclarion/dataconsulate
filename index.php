<?php
require("header.php");

?>
<script src="js/custom.js"></script>
			<!------Header Image Carousel----->
		<div class="container-fluid">
		<div id="myCarousel" class="carousel slide">

					<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/top-head.jpg" alt="Home Screen" style="margin-left: -400px !important">
							<div class="carousel-caption">
								<h1 style="font-size: 52px;">YOUR DATA. SECURED.</h1>								
								<p><a class="btn btn-lg btn-primary" href="index.php#pricing" role="button">PRICING INFORMATION</a></p>
							</div>
					</div>
				</div>
		</div>
		</div>
		<?php require("features.php");?>		
			<!------Logo Carousel------>
            <section class="logo-detail">
				<center><h4>Current Users</h4></center>
            <div id="newCarousel" class="carousel slide" data-ride="carousel">
					
					<!-- Indicators - carousel navigation buttons ---
					<ol class="carousel-indicators">
						<li data-target="#newCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#newCarousel" data-slide-to="1"></li>
						<li data-target="#newCarousel" data-slide-to="2"></li>
						<li data-target="#newCarousel" data-slide-to="3"></li>
					</ol>
					---->
					

					<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<!--------Logos, to add copy non-active and replace image src="images/test/whateveryouwanttoadd.jpg"-->
					<div class="item active">
						<img class="img img-responsive" src="images/test/logo1.jpg" alt="Aqua Jet Pools">
					</div>

					<div class="item">
						<img class="img img-responsive" src="images/test/logo2.jpg" alt="Cornerstone Services">
					</div>

					<div class="item">
						<img class="img img-responsive" src="images/test/logo3.jpg" alt="Jack's House of Smokes">
					</div>

					<div class="item">
						<img class="img img-responsive" src="images/test/logo4.jpg" alt="Kingston Police Department">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/logo5.jpg" alt="Light Touch Medical Inc.">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/logo6.jpg" alt="Marbletown First Aid Unit">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/logo7.jpg" alt="Montgomery Police Department">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/logo8.jpg" alt="Mother Earth Storehouse">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/logo9.jpg" alt="Nature's Pavilion">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/logo10.jpg" alt="Pro Printers">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/logo11.jpg" alt="New Paltz Regional Chamber of Commerce">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/logox.jpg" alt="New Paltz Police Department">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/Ridgely .jpg" alt="Ridgely">
					</div>
					
					<div class="item">
						<img class="img img-responsive" src="images/test/School of Practical Philosophy.jpg" alt="School of Practical Philosophy">
					</div>
				</div>

					<!-- Left and right controls
						<a class="left carousel-control" href="#newCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#newCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
						-->
			</div>
            </section>

<?php require("pricing.php");?>
<?php require("footer-top.php");?>
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
<?php require("footer-bottom.php");?>


</div>

</body>
