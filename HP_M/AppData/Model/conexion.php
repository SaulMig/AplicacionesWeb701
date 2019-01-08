<?php

namespace AppData\Model;


class conexion
{

    private $datos=array("server"=>"localhost","user"=>"root","password"=>"", "base"=>"basevalle1");



    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"], $this->datos["password"],$this->datos["base"]);
        $this->conexion->set_charset("utf8");
    }

    public function QuerySimple($sql)
    {
        $this->conexion->query($sql) or die (mysqli_error($this->conexion));
    }
    public function QueryResultado($sql)
    {
        $datos=$this->conexion->query($sql) or die (mysqli_error($this->conexion));
        return $datos;
    }

    public function proc($a,$b,$c,$d,$e,$f,$g,$h,$i,$j)
    {
        $sql="insert into datos(id_tiposec,titulo,descripcion,hora_inicio,hora_fin,telefono,correo,pagina,ubicacion,img) values(?,?,?,?,?,?,?,?,?,?)";
        $stm=$this->conexion->prepare($sql) or die (mysqli_error($this->conexion));
        $stm->bind_param('ssssssssss',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
        $stm->execute();

    }

    public function __destruct()
    {
        $this->conexion->close();
    }


}