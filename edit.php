<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($con, $_POST['id']);
	
	$cname = mysqli_real_escape_string($con, $_POST['cname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$phone = mysqli_real_escape_string($con, $_POST['phone']);	
    $address = mysqli_real_escape_string($con, $_POST['address']);

	// checking empty fields
	if(empty($cname) || empty($email) || empty($phone)  || empty($address)) {	
			
		if(empty($cname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($phone)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($address)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($con, "UPDATE login SET cname='$cname',email='$email',phone='$phone',address='$address' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: adminindex.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM login WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$cname = $res['cname'];
	$email = $res['email'];
	$phone = $res['phone'];
	$address = $res['address'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="adminindex.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="cname" value="<?php echo $cname;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Phone</td>
				<td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
            </tr>
            <tr> 
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $address;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
