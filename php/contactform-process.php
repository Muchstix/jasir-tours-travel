<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $cname = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $cemail = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG = "Message is required ";
} else {
    $cmessage = $_POST["message"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $cterms = $_POST["terms"];
}

$EmailTo = "jasirtour@gmail.com";
$Subject = "New message from contact form";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $cname;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $cemail;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $cmessage;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $cterms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$cemail);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>