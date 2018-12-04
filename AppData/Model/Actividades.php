<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 14/06/2018
 * Time: 09:13 PM
 */

namespace AppData\Model;


class Actividades
{
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
        $this->conexion->proc($this->id_tiposec,$this->titulo,$this->descripcion,$this->hora_inicio,$this->hora_fin,$this->telefono,$this->correo,$this->pagina,$this->ubicacion,$this->img);
    }

    function delete($id)
    {

    }

    function getAllTipo1()
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

    }

}