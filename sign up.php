<?php
$servername="localhostt";
$username="root";
$password="";
$databasename="multipage form";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn)
{
    die("connection Failed:" .mysqli_connect_error());
}


if(isset($_POST['save']))
{	
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $DOB = $_POST['DOB'];
    $username = $_POST['username'];
    $password = $_POST['password'];

	 $sql_query = "INSERT INTO entry_details (first_name,last_name,gender,email,mobile)
	 VALUES ('$first_name','$last_name','$gender','$email','$phone')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>