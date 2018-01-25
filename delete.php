<?php


//including the database 
include_once('config.php');

//getting the id from the database
$id = _GET[$id];


//deleting rows

$result = mysqli_query("DELETE FROM Student WHERE id=$id");


//redirecting to the home page in our case in index.php

header("Location: index.php");


?>