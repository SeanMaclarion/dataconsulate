﻿<!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" media="all" href="styles.css">
  <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="scrollview.js"></script>

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
			<A NAME="features"></a>		
</head>
<body>
<div class="wrapper">

       
        <!-- Content -->

        <div class="content">
		<h2 style="text-align:center; padding-top:10px; font-size:52px;">FEATURES</h2>

			<div class="features-detail">
            	<div class="feature-info">
                	<div class="container">
                   	 <div class="row small-screen">
                    	<div class="col-sm-5">
						 <section class="clearfix">
						<div data-position="left" data-offset="60" class="notViewed animBlock floatl">
						<h2>Dashboard Features That
 								Work for You</h2>
                                <p>Keep track of all your mailings, goals, contacts and more using our interactive dashboard.  View recent additions of USPS Validated addresses that have been added and check the progress of current projects.  The dashboard provides an excellent user experience with a sleek design to display all the information you will need.</p>
                        </div>
						</div>
						<div class="col-sm-7">
						<div data-position="right" data-offset="60" class="notViewed animBlock floatr">
					
                        	<img id="bigmac" src="images/feature-mac.png" class="img-responsive" alt="feature-mac"/>
                        
						</div>
						</div>
						</section>
                        	
                        
                     </div>   
                    </div>
                </div>
                <div class="feature-info email-campaign">
                	<div class="container">
                   	 <div class="row small-screen">
                        <div class="col-sm-7">
						<div data-position="left" data-offset="60" class="notViewed animBlock floatl">
						
                        	<img src="images/data-feature.png" class="img img-responsive" alt="feature-mac"/>
							</div>
                        </div>
                        <div class="col-sm-5">
						<div data-position="right" data-offset="60" class="notViewed animBlock floatr">
						
                        	<h2>Run your E-mail Campaign</h2>
                                <p>Send emails to specific contacts based on categories or criteria filtered in our campaign tool, giving you the most control over who you market to.  Choose to send them weekly, monthy, holidays or even when you have a special event coming up to hit the target audience you desire.</p>
								</div>
                       </div>
                     </div>   
                    </div>
                </div>
                <div class="feature-info">
                	<div class="container">
                   	 <div class="row small-screen">
                    	<div class="col-sm-6">
						<div data-position="left" data-offset="60" class="notViewed animBlock floatl">
                        	<h2>customize your email template</h2>
                                <p>Create stunnning email templates to capture your audiences' attention, not only providing the information you need to display but the visual asthetics key to keeping your customers happy.</p>
                        </div>
						</div>
                        <div class="col-sm-6 tab-veiw">
						<div data-position="right" data-offset="60" class="notViewed animBlock floatr">
                        	<img src="images/tab1.png" style="width: 90% !important;" id="tablet" class="img-responsive pull-right" alt="feature-mac"/>
							</div>
                        </div>
                     </div>   
                    </div>
                </div>
                <div class="feature-info email-campaign">
                	<div class="container">
                   	 <div class="row small-screen">
                        <div class="col-sm-7 tab-veiws">
							<div data-position="left" data-offset="60" class="notViewed animBlock floatl">
                        	<img src="images/touch-mac.png" class="img-responsive" alt="feature-mac"/>
							</div>
                        </div>
                        <div class="col-sm-5">
							<div data-position="right" data-offset="60" class="notViewed animBlock floatr">
                        	<h2>achieve your goals</h2>
                             <p>Use our goals feature to set milestones such as: Add 500 new contacts this month, complete two mailings, email market to your existing clients, and much more...Giving you the motivation and satisfaction of growing your business while also keeping track of specific areas you need to improve.</p>
                        	</div>
						</div>
                     </div>   
                    </div>
                </div>
                <!--<div class="brand-info">
                	<div class="container">
                    	<div class="row">
                        	<div class="col-sm-12">
                            	<h2>Flexible design for brands of any size</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. </p>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
		
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</div>
</div>
</body>
</html>