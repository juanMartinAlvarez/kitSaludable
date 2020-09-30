<?php
  class Rutina{
    private $id;
    private $idTRutinas;
    private $nombre;
    private $dia;
    private $idEjercicio;
    private $serie;
    private $repeticiones;
    private $descanso;
    //getters y seters
    //__id______________
    public function getid(){return $this->id;}
    public function setId($id){$this->id = $id;}
    //_id tipo de rutina___
    public function getIdTipoDeRutinas($idTRutinas){return $this->idTRutinas;} 
    public function setIdTipoDeRutinas($idTRutinas){$this->idTRutinas = $idTRutinas;}
    //____Nombre_____
    public function getNombre(){return $this->nombre;}
    public function setNombre($nombre){$this->nombre = $nombre;}
    //____Dia_____
    public function getDia(){return $this->dia;}
    public function setDia($dia){$this->dia = $dia;}
    //____ejercicio
    public function getIdEjercicio(){return $this->idEjercicio;}
    public function setIdEjercicio($idEjercicio){$this->idEjercicio = $idEjercicio;}
    //____Serie___
    public function getSerie(){return $this->serie;}
    public function setSerie($serie){$this->serie = $serie;}
    //___Repeticiones___
    public function getRepeticiones(){return $this->repeticiones;}
    public function setRepeticiones($repeticiones){$this->repeticiones = $repeticiones;}
    //_____Descanso_____
    public function getDescanso(){return $this->descanso;}
    public function setDescanso($descanso){$this->descanso = $descanso;}
  }
?>