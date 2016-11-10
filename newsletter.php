<?php

$servername = "localhost";
$username = "dc_user";
$password = "ohM8aajeOir0ohy9Sai6Rah5";
$dbname= "marketingsite";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$first = $_POST['first'];
$last = $_POST['last'];
$business = $_POST['business'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

// $reqFields = compact("first", "last", "address1", "city", "zip");

$check=mysqli_query($conn,"select * from newsletter where First='$first' and Last='$last' and Address1='$address1'");
    $checkrows=mysqli_num_rows($check);

    if ($checkrows>0){
	   echo '<script>alert("You have already signed up for our newsletter");
	   window.location.href = "index.html#newsletter";
	   </script>';  
   } else {
	   echo '<script>alert("Thank you for signing up for our newsletter");
	window.location.href = "index.html";
	</script>';
    //insert results from the form input
$sql = "INSERT INTO newsletter(First, Last, Business, Email, Address1, Address2, City, State, ZIP) VALUES ('$first', '$last', '$business', '$email', '$address1', '$address2', '$city', '$state', '$zip')";
 $result = mysqli_query($conn, $sql) or die('Error querying database.');
$conn->close();
}


?>
