<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 14/06/2018
 * Time: 09:09 PM
 */

namespace AppData\Controller;


class ActividadesController
{
    private $actividades,$tiposec,$estado_habitaciones;
    public function __construct()
    {
        $this->actividades= new \AppData\Model\Actividades();
        //$this->tiposec=new \AppData\Model\Tiposec();
    }

    public function index()
    {

    }

    public function agregarrecreativas(){

        if($_POST)
        {
            $nombre=$_FILES['imagen']['name'];
            $tmp=$_FILES['imagen']['tmp_name'];
            $bytes=file_get_contents($tmp);

            $this->actividades->set('id_tiposec',$_POST["id_tiposec"]);
            $this->actividades->set('titulo',$_POST["titulo"]);
            $this->actividades->set('descripcion',$_POST["descripcion"]);
            $this->actividades->set('hora_inicio',$_POST["hora_inicio"]);
            $this->actividades->set('hora_fin',$_POST["hora_fin"]);
            $this->actividades->set('telefono',$_POST["telefono"]);
            $this->actividades->set('correo',$_POST["correo"]);
            $this->actividades->set('pagina',$_POST["pagina"]);
            $this->actividades->set('ubicacion',$_POST["ubicacion"]);
            $this->actividades->set('img',$bytes);
            $this->actividades->add();
            print_r($_POST);
            header("Location:".URL."Tipo1");
        }else{

            $datos1=$this->actividades->getAllTipo1();

            $datos[0]=$datos1;

            return $datos;
        }
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
        $datos=$this->actividades->getAll();
        return $datos;
    }
    public function Tipo1()
    {
        $datos1=$this->actividades->getAllTipo1();
        $datos[0]=$datos1;
        return $datos;
    }

}