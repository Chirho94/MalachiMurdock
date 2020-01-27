<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$fname = $_POST['fname'];
$lname = $POST['lname'];
$subject = $_POST['subject'];

//Validate first
if(empty($fname)||empty($lname)||empty($subject))
{
    echo "Name and subject are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad values, please try again.";
    exit;
}
// This form does not work, since I cannot host email on this fake website<--
$email_from = 'tom@example.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $fname.\n".
    "Here is the message:\n $subject".

$to = "tom@example.com";

//Send the email!
mail($to,$email_subject,$email_body);
//done. redirect to index page.
header('Location: ..\index.html');


?>
