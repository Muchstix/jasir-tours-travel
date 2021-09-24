<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["phone"])) {
    $errorMSG = "Phone is required ";
} else {
    $phone = $_POST["phone"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["select"])) {
    $errorMSG = "Select is required ";
} else {
    $select = $_POST["select"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}

$EmailTo = "sul3iman@mkmarketing.group";
$Subject = "New quote request from call me form";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $lname;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $lphone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $lemail;
$Body .= "\n";
$Body .= "Package: ";
$Body .= $lselect;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $lterms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$lemail);
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