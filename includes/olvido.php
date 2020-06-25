<?php
//Code for Forgot Password
if(isset($_POST['send'])){
	$femail=$_POST['femail'];
	$row1=mysqli_query($con,"select email,password from users where email='$femail'");
	$row2=mysqli_fetch_array($row1);
	if($row2>0){
		$email = $row2['email'];
		$subject = "Information about your password";
		$password=$row2['password'];
		$message = "Your password is ".$password;
		mail($email, $subject, $message, "From: $email");
		echo  "<script>alert('Your Password has been sent Successfully');</script>";
	}else{
	echo "<script>alert('Email not register with us');</script>";	
	}
}
?>