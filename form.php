<html>
<head>
	<title>CRUD APPLICATION</title>
	
</head>
<body>

	<a href="index.php">Home</a>
	<br><br>



	<form action ="addrecord.php" method ="GET"  name= 'form1'>
		<table width = "25%" border="0">
			<tr>
				<td>Firstname:</td>
				<td><input type="text" name="fname"></td>
            </tr>

            <tr>
            	<td>Lastname:</td>
            	<td><input type="text" name="lname"></td>
            </tr>

            <tr>
            	<td>Email:</td>
            	<td><input type="text" name="email"></td>

            </tr>
            <tr>
            	<td>Address:</td>
            	<td><input type="text" name="address"></td>
            </tr>

            <tr>
            	<td>
            	<button type="submit" name="submit">submit</td>

            </tr>


		</table>
                  <form action="showrecord.php" method ="GET">
		 	<button type="submit">Show Detail</button><br>
		    </form>
                <button type= "submit">update<a href = 'updaterecord.php'>></button><br>
                <button type= "submit">delete<a href = 'delete.php'>></button>


              
</body>
</html>