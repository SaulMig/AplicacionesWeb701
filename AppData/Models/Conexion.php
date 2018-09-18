<?php namespace AppData\Models;

  class Conexion
  {
    private $datos=array("host" => "localhost",
                          "user" => "root",
                          "password" => "misterio12",
                          "db" => "chuchu");

      #Variable de Conexion
      private $conexion;

      #Constructor de la clase
      function __construct()
      {
        #Se manda llamar la variable conexion y se le asigna los parametros
        $this->conexion = new \mysqli($this->datos["host"], $this->datos["user"],
          $this->datos["password"], $this->datos["db"]);
        $this->conexion->set_charset("utf8");
      }

      public function queryResultados($sql)
      {
        $datos=$this->conexion->query($sql) or die(mysqli_error($this->conexion));
        return $datos;
      }

      public function querySimple($sql)
      {
        $datos=$this->conexion->query($sql) or die(mysqli_error($this->conexion));
      }
      function __destruct()
      {
        $this->conexion->close();
      }
  }

 ?>
