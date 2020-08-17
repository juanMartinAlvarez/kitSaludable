<?php

  session_start();
  session_destroy();

  $extra="index.php";
  $host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");

?>