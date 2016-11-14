<?php
require('blogheader.php');

require("connection.php");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(isset($_SESSION["user"]))
{
	
$temp = $_SESSION["user"];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user FROM blog_users WHERE user = '$temp'";
$result = mysqli_query($conn, $sql);

		
}


require("sidebar.php");
?>
<head>
<link rel="stylesheet" type="text/css" href="blog.css">
<style>
	#googlemaps 
	{ 
  border-top: 1px solid #9a9072;

  margin-top: 1400px;
  height: 1000px; 
  width: 100%; 
  position:absolute; 
  top: 0; 
  left: 0; 
  z-index: -1; 	
}
</style>
</head>

<div class="wrapper" style="overflow: auto;">
<div class="content">
<div id="blog">
<?php
$page=$_REQUEST['p'];
$limit=3;
if($page=='')
{
 $page=1;
 $start=0;
}
else
{
 $start=$limit*($page-1);
}
$query=mysqli_query($conn,"select * from blog_posts ORDER BY postDate DESC limit $start, $limit ");
$tot=mysqli_query($conn, "select * from blog_posts");
$total=mysqli_num_rows($tot);
$num_page=ceil($total/$limit);
if ($result->num_rows > 0)
{
	while($row=mysqli_fetch_array($query))
	{
	   echo "<br>";
	   echo "<br>". "<a href='view_post.php?id=".$row["id"]."'>" . $row["postTitle"] . "</a>" ."<br>". "<img src='images/".$row["postImage"]."'/ height='auto' width='100%'>" ."<br>";	
				echo substr($row["postContent"], 0, 500) . "...";
				echo "<a href='view_post.php?id=".$row["id"]."'>" . "Click here to read more</a><br>";
				
				if ($row["editUser"] != "")
				{
					echo "Edited on " . $row["editDate"] . " at " . $row["editTime"] . " by " . $row["editUser"] . "<br>";
				}
				else
				{
						echo "Posted on " . $row["postDate"] . " at " . $row["postTime"] . " by " . $row["username"] . "<br>";
				}
				
				$sql2 = "SELECT tags FROM blog_posts WHERE id=".$row["id"];
				$result2 = mysqli_query($conn,$sql2);
				$tagsArray = array();
				if ($result2)
				{
					$row2 = mysqli_fetch_row($result2);
					$tags = $row2[0];
					$tagsArray = explode(",",$tags);
				}
				$index = 0;
				$count = count($tagsArray);

				while ($index < $count)
				{
				  echo "<a href='view_tags.php?p=1&tags=".$tagsArray[$index]."'>" . $tagsArray[$index] . "</a>";
				  $index++;
				}
				if(isset($_SESSION["user"]))
				{
					echo "<br><a href='edit_post.php?id=".$row["id"]."'><button>Edit Post</button></a><br>";
				}
				
		}
}
else
{
		echo "No results";
}





function pagination($page,$num_page)
{
  echo'<ul style="list-style-type:none;">';
  for($i=1;$i<=$num_page;$i++)
  {
     if($i==$page)
{
 echo'<li style="float:left;padding:5px;">'.$i.'</li>';
}
else
{
 echo'<li style="float:left;padding:5px;"><a href="blog.php?p='.$i.'">'.$i.'</a></li>';
}
  }
  echo'</ul>';
}
if($num_page>1)
{
 pagination($page,$num_page);
}
$conn->close();
?>

</script>
</div>

</div>
</div>
<?php
require("footer-top.php");
?>
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
require("footer-bottom.php")
?>


