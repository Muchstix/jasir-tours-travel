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

if (empty($_POST["passport"])) {
    $errorMSG = "Passport is required ";
} else {
    $passport = $_POST["passport"];
}

if (empty($_POST["nationality"])) {
    $errorMSG = "Nationality is required ";
} else {
    $nationality = $_POST["nationality"];
}

if (empty($_POST["address"])) {
    $errorMSG = "Address is required ";
} else {
    $address = $_POST["address"];
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

$EmailTo = "jasirtour@gmail.com";
$Subject = "New quote request from call me form";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Passport: ";
$Body .= $passport;
$Body .= "\n";
$Body .= "Nationality: ";
$Body .= $nation;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $address;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Package: ";
$Body .= $select;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
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