

<?php
error_reporting(0);
if(!isset($_SESSION))session_start(); 
  $varsesion = $_SESSION['login']; 
if ($varsesion == null || $varsesion = '') {
  echo file_get_contents("iniciarSesion.php"); 
  die();
}
?>

