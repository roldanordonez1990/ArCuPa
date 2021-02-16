
<?php

class Conexion extends PDO{
   private $dsn = "mysql:host=localhost;dbname=arcupa;charset=utf8mb4";
   private $usu="arcupa";
   private $pass="1234";
   private $opciones=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
   
   public function __construct() {
       parent::__construct($this->dsn, $this->usu, $this->pass, $this->opciones);
   }
}
