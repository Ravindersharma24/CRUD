<?php
	$dbname = "niku";
	$username = "root";
	$password = "";
	$server = "localhost";

	$con = mysqli_connect($server,$username,$password,$dbname);
	if($con)
	{
		// echo "conection successful";
		?>
		<script>
			alert("connection successful");
		</script>
		<?php
	}
	else
	{
		// echo "conection failed";
		?>
		<script>
			alert("connection failed");
		</script>
		<?php
	}
?>