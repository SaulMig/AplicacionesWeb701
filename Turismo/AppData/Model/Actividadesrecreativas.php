<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 21/06/2018
 * Time: 12:14 PM
 */

namespace AppData\Model;


class Actividadesrecreativas
{
    private $tabla='datos';
    private $img;
    private $id_dato, $id_tiposec, $titulo, $descripcion, $hora_inicio, $hora_fin, $telefono,$correo,$pagina,$ubicacion;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        $this->id_tiposec=1;
        $sql = "insert into {$this->tabla} (id_tiposec,titulo,descripcion,hora_inicio,hora_fin,telefono,correo,pagina,ubicacion,img) values({$this->id_tiposec},'{$this->titulo}','{$this->descripcion}','{$this->hora_inicio}','{$this->hora_fin}',{$this->telefono},'{$this->correo}','{$this->pagina}','{$this->ubicacion}','{$this->img}')";
        ///echo "<script>alert($sql)</script>";
        $this->conexion->QuerySimple($sql);
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_dato='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql = "select * from datos where id_tiposec=1";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


    function getOne($id)
    {
        $sql = "select * from  {$this->tabla} where id_dato='{$id}'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update()
    {
        $id=$_REQUEST;['id'];
        $this->id_tiposec=1;
        $sql = "update {$this->tabla} set id_tiposec={$this->id_tiposec},titulo='{$this->titulo}',descripcion='{$this->descripcion}',hora_inicio='{$this->hora_inicio}',hora_fin='{$this->hora_fin}',telefono={$this->telefono},correo='{$this->correo}',pagina='{$this->pagina}',ubicacion='{$this->ubicacion}',img='{$this->img}'";
        ///echo "<script>alert($sql)</script>";
        $this->conexion->QuerySimple($sql);
    }
    function verify(){
        $sql = "select * from {$this->tabla} where  titulo='{$this->titulo}' ";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }


}