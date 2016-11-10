<?php

if( isset( $_POST['submit_form'] ) )
{

validate_data($data)

{
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($data);
  return $data;    

}

$first = validate_data($_POST['first']);
$last = validate_data($_POST['last']);
$business = $_POST['business'];
$email = validate_data($_POST['email']);
$address1 = validate_data($_POST['address1']);
$address2 = $_POST['address2'];
$city = validate_data($_POST['city']);
$state = $_POST['state'];
$zip = validate_data($_POST['zip']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "dataconsulate";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

$insertdata = "INSERT INTO newsletter(First, Last, Business, Email, Address1, Address2, City, State, ZIP) VALUES ('$first', '$last', '$business', '$email', '$address1', '$address2', '$city', '$state', '$zip')";
mysqli_query($insertdata);

}
?>