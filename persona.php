<?php

  class Persona{

    private $id;
    private $peso;
    private $altura;
    private $edad;
    private $nombre;
    private $apellido;

    public function getid(){
      return $this->id;
    }

    public function setid($id){
      $this->id = $id;
    }

    public function getpeso(){
      return $this->peso;
    }

    public function setpeso($peso){
      $this->peso = $peso;
    }

    public function getaltura(){
      return $this->altura;
    }

    public function setaltura($altura){
      $this->altura = $altura;
    }

    public function getedad(){
      return $this->edad;
    }

    public function setedad($edad){
      $this->edad = $edad;
    }

    public function getnombre(){
      return $this->nombre;
    }

    public function setnombre($nombre){
      $this->nombre = $nombre;
    }
    
    public function getapellido(){
      return $this->apellido;
    }

    public function setapellido($apellido){
      $this->apellido = $apellido;
    }


  }

?>