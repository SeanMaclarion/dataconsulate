<?php 
$ToEmail = 'dataconsulate@crst.net'; 
$EmailSubject = .$_POST["subject"].; 
$mailheader = "From: ".$_POST["customer_email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["customer_email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["customer_name"].""; 

$MESSAGE_BODY .= "Email: ".$_POST["customer_email"]."";  

$MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 

mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");

echo '<script>alert("Thank you for contacting us, someone will reply shortly.");
	   window.location.href = "index.html#newsletter";
	   </script>';  
exit();
 
?>