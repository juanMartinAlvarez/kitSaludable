<?php
  session_start();
  include_once("cruddatos.php");
      
  // Imprime algo como: Monday 8th of August 2005 03:12:46 PM
  $date = date('l jS \of F Y h:i:s A');
  $sessionid = $_SESSION['id'];
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  $edad = $_POST['edad'];

  renovarDatos($peso, $altura, $edad, $sessionid, $edad) or die("Error");
?>