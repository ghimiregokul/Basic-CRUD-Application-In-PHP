<html>
<head>
   <title>Add Data</title>
 </head>

<body>
<?php

//including the database connection
include_once("config.php");

if(isset($_GET['submit']))
{

$firstname = $_GET['fname'];
$lastname = $_GET['lname'];
$email = $_GET['email'];
$address =$_GET['address'];

//$conn = mysqli_connect("127.0.0.1","root","","php");

    if($conn->connect_error) 
    {
    	die("connection failed: ".$conn->connect_error);
    }

    if (empty($firstname) || empty($lastname) || empty($email) ||empty($address)) {

        if(empty($firstname))
        {
            echo "<font color ='red'>Name field is empty.</font><br>";
        }

        if(empty($lastname))
        {
            echo "<font color='red'>Name filed is empty.</font><br>";
        }
        if (empty($email)) {

            echo "<font color='red'>Name filled is empty.</font><br>";
        }
        if (empty($address)) {

            echo "<font color ='red'>Name filled is empty.</font><br>";
        }
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }else
    {
        //if all the fields are filled (not empty)

        //insert into database
         $sql = "INSERT INTO Student(fname,lname,email,address)VALUES('$firstname','$lastname','$email','$address')";


    // display success message
          if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close(); 
        }
}
           

?>
</body>
</html>

