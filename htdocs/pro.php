<?php
require('config.php');
extract($_POST);
$sql = "INSERT into feedback (name,email,contact,message) VALUES('" . $name . "','" . $email . "','" . $contact_no . "','" . $message . "')";

$success = $mysqli->query($sql);
if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}

echo "Thank You For Contacting Us ";
$conn->close();
?>