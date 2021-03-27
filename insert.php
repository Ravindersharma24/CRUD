<?php
	include'dbconnect.php';
	if(isset($_POST['submit']))
	{
		$name = $_POST['uname'];
		$age = $_POST['uage'];
		$course = $_POST['ucourse'];
		//fetch data

		$insert = "insert into student (name,age,course)values('$name','$age','$course')";
		// insert datainto database
		$res = mysqli_query($con,$insert);
		//pass actual query to insert form data in databse table.

		//check that data is inserted or not using if else statement .
		if($res)
		{
			//echo "inserted";
			?>
			<script>
				alert("records insert successfully");
			</script>
			<?php
		}
		else
		{
			//echo "not inserted";
			?>
				<script>
					alert("error found..");
				</script>
				<?php    
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert data</title>
	<style>
		.main
		{
			height: 200px;
			width: 300px;
			border: 2px solid black;
		}	
		.one
		{
			margin-top: 20px;
			text-align: center;
		}
		.two
		{
			margin-top: 20px;
			text-align: center;
		}
		.three
		{
			margin-top: 20px;
			text-align: center;
		}
		.four
		{
			margin-top: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="main">
		<form method="POST">

			<div class="one">
			Name : <input type="text" name="uname"><br>
			</div>
			<div class="two">
			Age:   <input type="number" name="uage"><br>
			<div class="three">
			Course : <input type="text" name="ucourse"><br>
			<div class="four">
			<input type="submit" name="submit" value="insert">
			<button><a href="select.php">See records</a></button>
		</form>
	</div>

</body>
</html>