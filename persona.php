<?php
  class Persona{
    
    private $id;
    private $peso;
    private $altura;
    private $edad;
    private $fecha;
    private $nombre;
    private $apellido;

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
  }
?>