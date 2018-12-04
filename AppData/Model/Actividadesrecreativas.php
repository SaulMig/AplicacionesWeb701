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
    private $tabla = "datos";
    private $id_reservacion;
    private $clave_reserva;
    private $id_cliente;
    private $fecha_reserva;
    private $fecha_llegada;
    private $fecha_salida;
    private $id_estador=63;
    private $no_personas;
    private $num_habitacion;
    private $descripcion_hab;
    private $id_tipoh;
    private $id_estadoh=60;

    private $id_inicio;
    private $id_final;

    function __construct()
    {
        $this->conexion = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()

    {
        $sql="call NuevaReserva (
         '{$this->clave_reserva}','{$this->id_cliente}','{$this->fecha_reserva}','{$this->fecha_llegada}',
         '{$this->fecha_salida}','{$this->id_estador}')";
        $this->conexion->QuerySimple($sql);

    }

    function getAll()
    {
        $sql = "select * from datos";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getAllRecreativas()
    {
        $sql = "SELECT * from datos ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


}