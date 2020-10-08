<?php

class User{
  private $id;
  private $fname;
  //__ID__
  public function getid() {return $this->id;}
  public function setid($id) {$this->id = $id;}
  //__First_Name
  public function getfname() {return $this->fname;}
  public function setfname($fname) {$this->fname = $fname;}
}
?>