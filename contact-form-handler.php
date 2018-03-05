<?php 



if(isset($_POST['submit'])){


$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$myemail = 'nicole_deprey@comcast.net';//<-----Put Your email address here.

	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "Reply-to:$myemail"; 
	
	mail($myemail,email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contactus.html');
} 

?>