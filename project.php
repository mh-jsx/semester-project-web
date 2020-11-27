<?php

$con=mysqli_connect("localhost","root","","themhprojectdb");
if($con){
	echo"connected";
}
	
		if(isset($_POST['submit'])){
			
			$name=$_POST['name'];
			$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
		$bloodgroup=$_POST['bloodgroup'];
		$city=$_POST['city'];
		$country=$_POST['country'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
			echo $city;
			$result=mysqli_query($con,"INSERT INTO registration (user_id,username,Password,name,email,active,Gender,DOB,Country,City,Phone,blood_group)
VALUES (NULL,'$username','$password','$name','$email','0','$gender','$dob','$country','$city','$phone','$bloodgroup');");
		}
if($result){
			echo'done';
		}
else{
	echo"not inserted";
}
header( "refresh:3;url=mhsite.php" );
		

	?>