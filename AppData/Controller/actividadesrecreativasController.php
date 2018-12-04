<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 21/06/2018
 * Time: 12:13 PM
 */

namespace AppData\Controller;


class actividadesrecreativasController
{
    private $habitaciones,$tipos_habitacion,$estado_habitaciones;

    public function __construct()
    {
        $this->habitaciones= new \AppData\Model\Actividadesrecreativas();
    }

    public function index()
    {
        $datos1=$this->habitaciones->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function consulta_1()
    {
        $datos2=$this->habitaciones->getAllRecreativas();
        $datos1[0]=$datos2;
        return $datos1;
    }
}