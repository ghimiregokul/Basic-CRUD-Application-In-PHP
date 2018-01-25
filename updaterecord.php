<html>
<body>

<?php

include_once('config.php');

if(isset($_GET['update']))
{
	$id = $_GET['id'];

	$firstname = $_GET['fname'];
	$lastname = $_GET['lname'];
	$email = $_GET['email'];
	$address = $_GET['address'];

     if (empty($firstname) || empty($lastname) || empty($email) ||empty($address)) {
     	if (empty($firstname)) {
     		echo "<font color='red'>Name field is empty</font><br>";
     	}
     	if (empty($lastname)) {
     		echo "<font color='red'>Name field is empty</font><br>";
     		
     	}
     	if (empty($email)) {
     		echo "<font color='red'>Email field is empty</font><br>";
     	}
     	if (empty($address)) {
     		echo "<font color='red'>Address field is empty</font><br>";
     		# code...
     	}

     }else
     {
     	//sql query to update the table 
     	$sql = mysqli_query("UPDATE Student SET fname='$firstname',lname='$lastname',email='$email',address='$address' WHERE id= $id");
          

          //redirecting to the home page in our case its index.php
     	header("Location:index.php");

     }


}

?>
  <form name = "form1" method = "get" action = "edit.php">
                  <table border = 0>
                        <tr>
                              <td>firstname</td>
                              <td><input type = "text" name='fname' ></td>
                         </tr>
                         <tr>
                              <td>lastname</td>
                              <td><input type = "text" name = 'lname'value = <?php echo $lastname; ?>></td>


                         </tr>
                         <tr>
                              <td>email</td>
                              <td><input type ="text" name = 'email' value = <?php echo $email?>></td>
                        </tr>

                        <tr>
                              <td>address</td>
                              <td><input type = "text" name = 'address' value = <?php echo $address?>></td>

                        </tr>
                        <tr>
                              <td><button type = "submit">update</button></td>
                        </tr>
                  </table>
            </form>

</body>



