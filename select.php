<!DOCTYPE html>
<html>
<head>
	<title>select operation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/> 
</head>
<body>
	<h1>Showing database records</h1>
	<div class="table">
		<table border="1px solid black">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>age</th>
					<th>course</th>
					<th colspan="2">operation</th>
				</tr>
			</thead>

			<tbody>
				<?php
					include 'dbconnect.php';
					$selectquery = "select * from student";
					$sqlquery = mysqli_query($con,$selectquery);
					while($res = mysqli_fetch_array($sqlquery))
					{
						?>
						<tr>
							<td><?php echo $res['id']; ?></td>
							<td><?php echo $res['name']; ?></td>
							<td><?php echo $res['age']; ?></td>
							<td><?php echo $res['course']; ?></td>
							<td><a href="update.php?idd=<?php echo $res['id']; ?>" data-toggle="tooltip" title="update" data-placement="bottom"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
						<td><a href="delete.php?did=<?php echo $res['id']; ?>" data-toggle="tooltip" title="delete" data-placement="bottom"><i class="fa fa-trash" aria-hidden="true"></i></a></i></td>
						</tr>
					<?php 
						}
					?>
				
				
			</tbody>
		</table>
	</div>
</body>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</html>