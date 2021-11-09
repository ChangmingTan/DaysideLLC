<?php

ini_set('display_errors',1);
error_reporting(E_ALL);


?>

<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanks</title>
</head>
<body>
<pre>
<?php
require("validInterest.php");//server-side validation is required

$flag = true; //to track validation

//validate first name
if(validIName($_POST['fName'])){
    $fName = $_POST['fName'];
}
else{
    echo "<p>First name is required.</p>";
    $flag = false;
}

//validate last name
if(validIName($_POST['lName'])){
    $lName = $_POST['lName'];
}
else{
    echo "<p>Last name is required.</p>";
    $flag = false;
}

//validate email
if(validEmail($_POST['email'])){
    $email = $_POST['email'];
}
else{
    echo "<p>Correct email address required.</p>";
    $flag = false;
}

//validate phone number
if(validIName($_POST['phone'])){
    $phone = $_POST['phone'];
}
else{
    echo "<p>Phone number input required.</p>";
    $flag = false;
}

//validate service selection
if(validService( $_POST['serviceList'])){
    $serviceList =  $_POST['serviceList'];
}
else{
    echo "<p>Wrong service list selection.</p>";
    $flag = false;
}

//validate consultation prefrence selection
if(!empty($_POST['consult'])){
    if(validConsult($_POST['consult'])){ //check if correct selection is selected
        $consult = $_POST['consult'];
    }
    else{
        echo "<p>Wrong consultation preference selected.</p>";
        $flag = false;
    }
}

//validate industry selection
if(validIndustry( $_POST['industryList'])){
    $industry =  $_POST['industryList'];
}
else{
    echo "<p>Wrong industry list selection.</p>";
    $flag = false;
}

//validate hear about us
if(validHear($_POST['howYouHearUs'])){
    $howYouHearUs = $_POST['howYouHearUs'];
}
else{
    echo "<p>Wrong input for How did you hear about us</p>";
    $flag = false;
}

if($flag){ //validation passes then display confirmation and send emails
    // get the form data
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $orgName = $_POST['orgName'];
    $cityName = $_POST['cityName'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $comment = $_POST['comment'];
    $consult = $_POST['consult'];


    // display the form data to client on confirm page
    echo "<h1>Thank you for your submission, $fName $lName!</h1>";
    echo "<h2>Info Summary</h2>";
    echo "<p>Organization: $orgName</p>";
    echo "<p>Email address: $email</p>";
    echo "<p>Phone number: $phone</p>";
    echo "<p>Service you are interested in: $serviceList</p>";
    echo "<p>Consulting method you'd like: $consult</p>";

    // send email to client
    $fromAddress = "aaron@daysidellc.com";
    $toAddress = "tostrander@greenriver.edu";
    $subject = "$fName $lName, You have submitted the form successfully!";
    $headers = "From: Aaron Day <$fromAddress>";
    $message = "$fName $lName, You have submitted the form successfully!\r\n";
    $message .= "Thank you for contacting Dayside LLC. Someone will contact you within 2 - 3 business days to learn more about how we may able to help assist your leadership and change management needs.\r\n";
    mail($toAddress, $subject, $message, $headers);

    // send email to Aaron
    $fromAddress = "$email";
    $toAddress = "tostrander@greenriver.edu";
    $subject = "$fName $lName has submitted the form successfully!";
    $headers = "From: $fName $lName <$fromAddress>";
    $message = "$fName $lName has submitted his/her interest form!\r\n";
    $message .= "Organization: $orgName\r\n";
    $message .= "Email address: $email\r\n";
    $message .= "Phone number: $phone\r\n";
    $message .= "Address: $cityName, $state $zip\r\n";
    $message .= "His/Her is in the $industry industry\r\n";
    $message .= "He/She is interested in: $serviceList service\r\n";
    $message .= "Consulting preference: $consult\r\n";
    $message .= "He/She has heard your services from: $howYouHearUs\r\n";
    $message .= "Comment: $comment";
    mail($toAddress, $subject, $message, $headers);
}
?>
</pre>
</body>
</html>