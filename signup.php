<?php      
    include('connection.php');  
	
	$data = $_POST;
	if (empty($data['username']) ||
    empty($data['password']) ||
    
    empty($data['confirm_password'])) {
    
    die('Please fill all required fields!');
}


	
	
    $username = $_POST['username'];  
    $password = $_POST['password'];  
	$con_password = $_POST['confirm_password']; 
	$cname = $_POST['cname'];  
		$email = $_POST['email'];  
		$phone = $_POST['phone'];  
		$address = $_POST['address']; 
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
		$con_password = stripcslashes($con_password);
		$cname = stripcslashes($cname);  
		$email = stripcslashes($email);  
		$phone = stripcslashes($phone);  
		$address = stripcslashes($address);  
        //$username = mysqli_real_escape_string($con, $username);  
        //$password = mysqli_real_escape_string($con, $password);  
		
	  echo $address;
      if($password!=$con_password)
	  {
		  die("Password and Confirm password should match!");
	  }
	  $sql =  "INSERT INTO login (username, password, cname, email, phone, address)VALUES ('$username', '$password','$cname','$email', '$phone', '$address')";
        //$sql = "select *from login where username = '$username' and password = '$password'";  
        if ($con->query($sql) === TRUE) {
		echo '<script>alert("Registration Succesful. Login to continue")</script>'; 
        header('Location: html/login.html');
}
	  		
?>  
