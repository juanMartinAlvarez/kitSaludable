<?php

include_once("user.php");
$id;
$fname;
function mapearUser($id,$fname){

    $userconectado = new User();

    $userconectado->setid($id);
    $userconectado->setfname($fname);
}

?>

