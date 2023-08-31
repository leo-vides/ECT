<?php 
class user{

    public $idusuario;
    public $usuario;
    public $apellido;
    public $nombre;
    private $privilegio;
    function __construct($id,$usu,$ap,$nom,$priv){

         $this->idusuario=$id;
         $this->usuario=$usu;
         $this->apellido=$ap;
         $this->nombre=$nom;
         $this->privilegio=$priv;
    } 

    public function setid($id){     
         $this->idusuario=$id;
    } 
 
    public function getid(){
         return $this->idusuario;
    }

    
      public function setusurio($usu){     
         $this->usuario=$usu;
    } 
 
    public function getusurio(){
         return $this->usuario;
    }


      public function setapellido($ap){     
         $this->apellido=$ap;
    } 
 
    public function getapellido(){
         return $this->apellido;
    } 

    
      public function setnombre($nom){     
         $this->nombre=$nom;
    } 
 
    public function getnombre(){
         return $this->nombre;
    }
 public function getprivilegio(){
         return $this->privilegio;
    }

}


























 ?>