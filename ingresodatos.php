<?php

if(isset($_POST['datos'])){
  $userid = $id; //usuario actual
  $edad = $edad; // edad
  $altura = $altura; // altura
	$ret= mysqli_query($con,"SELECT * FROM personas WHERE userid='$userid'");
	$num=mysqli_fetch_array($ret);
	
	if($num>0){
		$_SESSION['edad']=$num['edad'];
		$_SESSION['altura']=$num['altura'];
		$_SESSION['peso']=$num['peso'];
		$host=$_SERVER['HTTP_HOST'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
	}else{
		echo "<script>alert('Datos invalidos');</script>";
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		exit();
	}
}

?>