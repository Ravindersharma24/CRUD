<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<?php
 include 'dbconnect.php';

 $deleteid = $_GET['did'];

 $deletequery = "delete from student where id=$deleteid";

 $query = mysqli_query($con,$deletequery);

 if($query)
 {
 	header('location:select.php');
 }
 else
 {
 	echo "failed to delete data";
 }
?>
</body>
</html>