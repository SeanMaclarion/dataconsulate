<?php require("header.php");
require("connection.php");
?>
<head>
<link rel="stylesheet" type="text/css" href="contact.css">

</head>
<body>
<div class="wrapper">

       
    		<div id="myCarousel" class="carousel slide" data-ride="carousel">
   			   <div class="carousel-inner" role="listbox">
      			 <div class="item active">
          <img class="third-slide" src="images/contact.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption" id="myCarous">
              <h1>Contact us</h1>
              <p>Our experts are ready to help you with any questions you might have regarding DataConsulate.  Please feel free to reach out to us and start managing your data reliably.</p>
            </div>
          </div>
        </div>
     		 </div>
  		   </div>
        </header>


        <!-- Content -->
        <div class="content">
			<div class="brand-info">
                	<div id="contact-form" class="container">
                    	<div class="row">
                        	<div class="col-sm-12">
                            	<h2>We’d love to hear from you!</h2>
                                <p>Interested in our services?  Have any feedback?  Let us know how we can help you!</p>
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
<div id="googlemaps"></div>
<!--Start Google Map API implementation -->
<!-- Include the Google Maps API library - required for embedding maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBhRRXcnQR1UmpgwHri_IXQrFna0M7j31c&callback=initMap"></script>
 
<script type="text/javascript">
 
// The latitude and longitude of Cornerstone Services
var position = [41.7365,-74.05835];
 
function showGoogleMaps() {
 
    var latLng = new google.maps.LatLng(position[0], position[1]);
 
    var mapOptions = {
        zoom: 14, // initialize zoom level - the max value is 21
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
 
    // Show a custom marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP,
		icon: 'images/mapmarker.png'
    });
}
 
google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>
<!--End google map API implementation -->
</body>
</html>
<?php require("footer.php");