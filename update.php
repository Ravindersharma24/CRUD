<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
<div class="main">
		<form method="POST">
			<?php
				include 'dbconnect.php';
				$ids = $_GET['idd'];
				$fetchdata = "select * from student where id={$ids}";
				$result = mysqli_query($con,$fetchdata);
				$aray = mysqli_fetch_array($result);
		
			?>
			<div class="one">
			Name : <input type="text" name="uname" value="<?php echo $aray['name']; ?>"><br>
			</div>
			<div class="two">
			Age:   <input type="text" name="uage" value="<?php echo $aray['age']; ?>"><br>
			<div class="three">
			Course : <input type="text" name="ucourse" value="<?php echo $aray['course']; ?>"><br>
			<div class="four">
			<input type="submit" name="submit" value="update">
			<button><a href="select.php">See records</a></button>
			<?php
				if(isset($_POST['submit']))
				{
					$newid = $_GET['idd'];
					$newname = $_POST['uname'];
					$newage = $_POST['uage'];
					$newcourse = $_POST['ucourse'];

					$updatequery = "update student set name='$newname',age='$newage',course='$newcourse' where id='$newid'";

					$runupdate = mysqli_query($con,$updatequery);
					if($runupdate)
					{
						echo "update successful";
					}
					else
					{
						echo "failed to update data.";
					}
				}
			?>
		</form>
	</div>
</body>
</html>