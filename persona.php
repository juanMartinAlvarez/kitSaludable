<?php
  class Persona{
    
    private $id;
    private $nombre;
    private $apellido;
    private $peso;
    private $altura;
    private $edad;
    private $fecha;
    private $Dietas;
    private $Rutinas;
    //__ID__
    public function getid(){return $this->id;}
    public function setid($id){$this->id = $id;}
    //__Nombre
    public function getNombre(){return $this->nombre;}
    public function setNombre($nombre){$this->nombre = $nombre;}
     //__Apellido
    public function getApellido(){return $this->apellido;}
    public function setApellido($apellido){$this->apellido = $apellido;}
    //__Peso
    public function getpeso(){return $this->peso;}
    public function setpeso($peso){$this->peso = $peso;}
    //__Altura
    public function getaltura(){return $this->altura;}
    public function setaltura($altura){$this->altura = $altura;}
    //__Edad
    public function getedad(){return $this->edad;}
    public function setedad($edad){$this->edad = $edad;}
    //__fecha
    public function getfecha(){return $this->fecha;}
    public function setfecha($fecha){$this->fecha = $fecha;}
    //__rutinas
    public function getRutinas(){return $this->Rutinas;}
    public function setRutinas($Rutinas){
      $this->Rutinas = $Rutinas;}
    //__Dietas      
    public function getDietas(){return $this->Dietas;}
    public function setDietas($Dietas){
      $this->Dietas = $Dietas;}
  }
?>