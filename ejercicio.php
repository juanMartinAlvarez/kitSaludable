<?php

  class Ejercicio{

    private $id;
    private $nombre;

    public function getid(){
      return $this->id;
    }

    public function setid($id){
      $this->id = $id;
    }

    public function getNombre(){
      return $this->nombre;
    }

    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
  }

?>