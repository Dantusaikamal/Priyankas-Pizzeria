<!DOCTYPE html>
<?php      
    
// Start the session
session_start();
include('connection.php');?>
<html lang="en">
<head>
  <meta charset="UTF-8" />

	<title>Priyanka's Pizzeria</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Priyanka's Pizzeria" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="smoothbox.css" type='text/css' media="all" />
	<!-- gallery light box -->
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
	    rel="stylesheet">
	<!-- //Web-Fonts -->


  <link rel="stylesheet" type="text/css" href="reset.css" />
  <link rel="stylesheet" type="text/css" href="mycss.css" />
  <style>
  table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
}
</style>
</head>
<body>
    
	
	<?php

    $username = $_SESSION["username"];  
	$results = mysqli_query($con, "SELECT * FROM login where username = '$username'"); ?>

<table>
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['password']; ?></td>
			<td><?php echo $row['cname']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

<form>
	
	
	
	
</body>
</html>