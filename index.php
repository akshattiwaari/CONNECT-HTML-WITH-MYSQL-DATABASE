<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="webdevop";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $username = $_POST['username'];
	 $password = $_POST['password'];

	 $sql_query = "INSERT INTO video2 (username,password)
	 VALUES ('$username','$password')";

	 if (mysqli_query($conn,$sql_query)) 
	 {
		echo "Login Successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>