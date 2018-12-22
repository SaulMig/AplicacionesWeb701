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
    private $id, $id_tiposec, $titulo, $descripcion, $hora_inicio, $hora_fin, $telefono,$correo,$pagina,$ubicacion;
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
        $stm=$this->conexion->proc(1,$this->titulo,$this->descripcion,$this->hora_inicio,$this->hora_fin,$this->telefono,$this->correo,$this->pagina,$this->ubicacion,$this->img);
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
    }
    function update()
    {
    }
    function verify(){
        $sql = "select * from {$this->tabla} where  titulo='{$this->titulo}' ";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }


}