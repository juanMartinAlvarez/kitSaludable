<?php

function conectar(){
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'loginsystem';
    $con = new mysqli($host,$user,$pw,$db);
    
    // Check connection
    
    return $con;
}

?>

