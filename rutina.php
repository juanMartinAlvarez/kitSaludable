<?php

  class Rutina{

    private $id;
    private $nombre;
    private $intensidad;
    private $codigo;

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

    public function getIntensidad(){
      return $this->intensidad;
    }

    public function setIntensidad($intensidad){
      $this->intensidad = $intensidad;
    }

    public function getCodigo(){
      return $this->codigo;
    }

    public function setCodigo($codigo){
      $this->codigo = $codigo;
    }
  }

?>