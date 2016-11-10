<?php	
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
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dataconsulate</title>

<!----- Favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custome css -->
<link href="css/style.css" rel="stylesheet">
<!---- Sweet Alert ---->
<script src="sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

<!-- fonts -->
<link href='https://fonts.googleapis.com/css?family=Merriweather:300italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
			
<script type="text/javascript">

    function validate()
    {

	var error="";
	var first = document.getElementById( "first" );
	if( first.value == "" )
	{
	error = " First Name is a required field. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}
	
	var last = document.getElementById( "last" );
	if( last.value == "" )
	{
	error = " Last Name is a required field. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}

	var email = document.getElementById( "email" );
	if( email.value == "" || email.value.indexOf( "@" ) == -1 )
	{
	error = " Invalid Email Address. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}
	
	var address1 = document.getElementById( "address1" );
	if( address1.value == "" )
	{
	error = " Address 1 is a required field. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}

	var city = document.getElementById( "city" );
	if( city.value == "" )
	{
	error = " City is a required field. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}
	
	var state = document.getElementById( "state" );
	if( state.value == "" )
	{
	error = " State is a required field. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}

	var zip = document.getElementById( "zip" );
	if( zip.value == "" )
	{
	error = " ZIP is a required field. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}
	
	else
	{
	return true;
	}

    }

</script>
			
</head>
<body>
<div class="wrapper">

        <!-- Header -->
        <header>
    <div class="navbar-wrapper">
      <div class="container-fluid">
        <nav class="navbar navbar-fixed-top bg">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			  <a class="navbar-brand" id="logo" href="index.php"><img class="img-responsive" src="images/logo.png" alt="logo"/></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
			  
                <li><a href="index.php#features">Features</a></li>
                <li><a href="blog.php?p=1"> Blog </a></li>
                <li><a href="index.php#contact">Contact US</a></li>
              </ul>
              
            </div>
        </nav>
      </div>
    </div>
	
		
        </header>
<A NAME="features"></a>   
<?php