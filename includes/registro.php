<?php
//Code for Registration 
if(isset($_POST['signup'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$enc_password=$password;
	$sql=mysqli_query($con,"select id from users where email='$email'");
	$row=mysqli_num_rows($sql);
	
	if($row>0){
		echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
	} else{
		$msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$enc_password','$contact')");

		if($msg){
				echo "<script>alert('Register successfully');</script>";
		}
	}
}
?>