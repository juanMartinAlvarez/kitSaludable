<?php
  class Alimentos{
    private $id;
    private $nombre;
    private $calorias;
    //getters y seters
    //__id______________
    public function getid(){return $this->id;}
    public function setId($id){$this->id = $id;}
    //____Nombre_____
    public function getNombre(){return $this->nombre;}
    public function setNombre($nombre){$this->nombre = $nombre;}
    //____Dia_____
    public function getCalorias(){return $this->calorias;}
    public function setCalorias($calorias){$this->calorias = $calorias;}
  }
    ?>