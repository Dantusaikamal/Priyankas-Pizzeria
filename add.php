<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("connection.php");
 
if(isset($_POST['Submit'])) {    
    $cname = $_POST['cname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
        
    // checking empty fields
    if(empty($cname) || empty($email) || empty($phone)|| empty($address)) {                
        if(empty($cname)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>email field is empty.</font><br/>";
        }
        
        if(empty($phone)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        }
        
        if(empty($address)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($con, "INSERT INTO login(cname,email,phone,address) VALUES('$cname','$email','$phone','$address')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='adminindex.php'>View Result</a>";
    }
}
?>
</body>
</html>