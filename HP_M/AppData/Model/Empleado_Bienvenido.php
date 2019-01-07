<?php

namespace AppData\Model;


class Empleado_Bienvenido
{
    private $tabla="usuarios";
    private  $id_usuario;
    private  $Nombre;
    private  $email;
    private  $pass;
    private $telefono;
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
        $sql="insert into {$this->tabla} values('0','{$this->email}',
        '{$this->pass}','{$this->nombre}','{$this->telefono}')";
        $this->conexion->QuerySimple($sql);
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_usuario='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql = "select * from usuarios";
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
        $sql = "select * from {$this->tabla} where  email='{$this->email}' ";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

}