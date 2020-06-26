<?php

  class Admin{

    private $id;
    private $username;
    private $password;

    public function getid(){
      return $this->id;
    }
    public function setid($id){
      $this->id = $id;
    }
    public function getusername(){
      return $this->username;
    }

    public function setusername($username){
      $this->username = $username;
    }

    public function getpassword(){
      return $this->password;
    }

    public function setpassword($password){
      $this->password = $password;
    }
  }

?>