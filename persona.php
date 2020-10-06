<?php
  class Persona{
    
    private $id;
    private $nombre;
    private $apellido;
    private $peso;
    private $altura;
    private $edad;
    private $fecha;
    private $id_alimentosDietas;
    private $id_ejerciciosRutinas;

    public function getid(){return $this->id;}
    public function setid($id){$this->id = $id;}

    public function getNombre(){return $this->nombre;}
    public function setNombre($nombre){$this->nombre = $nombre;}

    public function getApellido(){return $this->apellido;}
    public function setApellido($apellido){$this->apellido = $apellido;}
   
    public function getpeso(){return $this->peso;}
    public function setpeso($peso){$this->peso = $peso;}

    public function getaltura(){return $this->altura;}
    public function setaltura($altura){$this->altura = $altura;}

    public function getedad(){return $this->edad;}
    public function setedad($edad){$this->edad = $edad;}
    
    public function getfecha(){return $this->fecha;}
    public function setfecha($fecha){$this->fecha = $fecha;}
    
    public function getid_alimentosDietas(){return $this->id_alimentosDietas;}
    public function setid_alimentosDietas($id_alimentosDietas){
      $this->id_alimentosDietas = $id_alimentosDietas;}
    
    public function getid_ejerciciosRutinas(){return $this->id_ejerciciosRutinas;}
    public function setid_ejerciciosRutinas($id_ejerciciosRutinas){
      $this->id_ejerciciosRutinas = $id_ejerciciosRutinas;}
  }
?>