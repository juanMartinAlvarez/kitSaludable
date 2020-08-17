<?php
// Code for login 
if(isset($_POST['login'])){
	$password=$_POST['password'];
	$dec_password=$password;
	$useremail=$_POST['uemail'];
	$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
	$num=mysqli_fetch_array($ret);
	
	if($num>0){
		$extra="menuprincipal.php";
		$_SESSION['login']=$_POST['uemail'];
		$_SESSION['id']=$num['id'];
		$_SESSION['name']=$num['fname'];
		$host=$_SERVER['HTTP_HOST'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
	} else {
?>
		<script language="javascript">
			alert("Nombre de usuario o contrasenia invalidos");
			document.location = "index.php";
		</script>
<?php


	}else{
		echo "<script>alert('Nombre de usuario o contrasenia invalidos');</script>";
		$extra="index.php";
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		exit();
		//header("location:http://$host$uri/$extra");
	}
}
?>