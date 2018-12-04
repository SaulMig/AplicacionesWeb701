<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 14/06/2018
 * Time: 09:09 PM
 */

namespace AppData\Controller;


class Empleado_bienvenidoController
{
    private $habitaciones,$tipos_habitacion,$estado_habitaciones;
    public function __construct()
    {
        $this->habitaciones= new \AppData\Model\Empleado_Bienvenido();
    }

    public function index()
    {
        $datos1=$this->habitaciones->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function crear(){


    }
    public function eliminar($id)
    {

    }
    public function modificar($id)
    {

    }
    public function actualizar($id)
    {

    }
    public function print_pdf()
    {
        $datos=$this->habitaciones->getAll();
        return $datos;
    }

}