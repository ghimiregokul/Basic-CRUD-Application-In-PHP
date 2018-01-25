<?php
 
  //establishing the connection
  include_once('config.php');

  //getting the id from the database
  	$id = $_GET['id'];

 if($conn->connect_error)      //connection checked
 {
 	die("connection error: ". $conn->connect_error);
 }
  

  //using the id to get the data
 $sql ="SELECT *FROM Student where id=$id";  //sql query

 $result = $conn->query($sql);    //result variable ma tyon sql query store 

 if($result->num_rows>0)    //result check garna like $result->num_rows>0
 {
 	while($row = mysqli_fetch_array($result)) {                 //result fetch, $row = $result->fetch_assoc()
        $firstname = $row['fname'];
 		$lastname=  $row['lname'];
 		$email=     $row['email'];
 		$address =  $row['address']; 

 	 }
 }

else
{
	echo "No data found";
}

$conn->close();

?>
