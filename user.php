<?php

  class User{

    private $id;
    private $fname;
    private $lname;
    private $email;
    private $password;
    private $contactno;

    public function getid(){
      return $this->id;
    }

    public function setid($id){
      $this->id = $id;
    }

    public function getfname(){
      return $this->fname;
    }

    public function setfname($fname){
      $this->fname = $fname;
    }
    public function getlname(){
      return $this->lname;
    }

    public function setlname($lname){
      $this->lname = $lname;
    }
    public function getemail(){
      return $this->email;
    }

    public function setemail($email){
      $this->email = $email;
    }
    public function getpassword(){
      return $this->password;
    }

    public function setpassword($password){
      $this->password = $password;
    }
    public function getcontactno(){
      return $this->contactno;
    }

    public function setcontactno($contactno){
      $this->contactno = $contactno;
    }


  }

?>