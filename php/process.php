<?php
/* Set e-mail recipient */
$myemail = "info@brycemueller.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['inputName'], "Your Name");
$email = check_input($_POST['inputEmail'], "Your E-mail Address");
$subject = check_input($_POST['inputSubject'], "Message Subject");
$message = check_input($_POST['inputMessage'], "Your Message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Invalid e-mail address");
}
/* Let's prepare the message for the e-mail */

$subject = "Someone has sent you a message";

$message = "

Someone has sent you a message using your contact form:

Name: $name
Email: $email
Subject: $subject

Message:
$message

";

/* Send the message using mail() function */
 $success= mail($myemail, $subject, $message);

if ($success){
   echo "success";
}else{
    echo "invalid";
}

exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the refresh button and try again</p>

</body>
</html>
<?php
exit();
}
?>


//<?php
//$name = $_POST["name"];
//$email = $_POST["email"];
//$message = $_POST["message"];
//
//$EmailTo = "info@brycemueller.com";
//$Subject = "New Message Received";
//
//// prepare email body text
//$Body .= "Name: ";
//$Body .= $name;
//$Body .= "\n";
//
//$Body .= "Email: ";
//$Body .= $email;
//$Body .= "\n";
//
//$Body .= "Message: ";
//$Body .= $message;
//$Body .= "\n";
//
//// send email
//$success = mail($EmailTo, $Subject, $Body, "From:".$email);
//
//// redirect to success page
//if ($success){
//   echo "success";
//}else{
//    echo "invalid";
//}
//
//?>