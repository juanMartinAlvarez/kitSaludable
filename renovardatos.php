<?php
  session_start();
  include_once("cruddatos.php");
      
  $sessionid = $_SESSION['id'];
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  $edad = $_POST['edad'];
  renovarDatos($peso, $altura, $edad, $sessionid) or die("Error");
?>