
<html>
<head>
  <title>Add Data</title>
 </head>

<body>
<?php

// including the database connection 

include_once("config.php")

if(isset($_get['submit']))
{

$firstname = $_get['fname'];
$lastname = $_get['lname'];
$email = $_get['email'];
$address = $_get['address'];

//$conn = mysqli_connect("127.0.0.1" ,"root","","php");


