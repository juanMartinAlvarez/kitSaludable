<?php
  class Alimentos{
    private $id;
    private $nombre;
    private $calorias;
    private $tipo;
    //getters y seters
    //__id______________
    public function getid(){return $this->id;}
    public function setId($id){$this->id = $id;}
    //____Nombre_____
    public function getNombre(){return $this->nombre;}
    public function setNombre($nombre){$this->nombre = $nombre;}
    //____Calorias_____
    public function getCalorias(){return $this->calorias;}
    public function setCalorias($calorias){$this->calorias = $calorias;}
    //____Tipo_____
    public function getTipo(){return $this->tipo;}
    public function setTipo($tipo){$this->tipo = $tipo;}
   }
    ?>