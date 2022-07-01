<?php
require 'functions.php';
$conn = dbConnect();

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$country = $_GET['country'];
$subject = $_GET['subject'];

$query = "INSERT INTO `contact` (firstname, lastname, country, subject) 
             VALUES('$firstname', '$lastname', '$country', '$subject')";

$stmt = $conn->prepare($query);
//$stmt->bind_param($firstname, $lastname, $country, $subject);
$stmt->execute();

$message = "Message succesfully sent!";
header("Location: home.php?message=" . $message);