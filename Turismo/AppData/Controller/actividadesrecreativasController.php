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
    private $actividades,$tiposec,$estado_habitaciones;
    public function __construct()
    {
        $this->actividades= new \AppData\Model\Actividadesrecreativas();
        //$this->tiposec=new \AppData\Model\Tiposec();
    }

    public function index()
    {
        $datos1=$this->actividades->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function crear()
    {

        if($_POST)
        {
            $this->actividades->set('titulo',$_POST["titulo"]);
            $this->actividades->set('descripcion',$_POST["descripcion"]);
            $this->actividades->set('hora_inicio',$_POST["hora_inicio"]);
            $this->actividades->set('hora_fin',$_POST["hora_fin"]);
            $this->actividades->set('telefono',$_POST["telefono"]);
            $this->actividades->set('correo',$_POST["correo"]);
            $this->actividades->set('pagina',$_POST["pagina"]);
            $this->actividades->set('ubicacion',$_POST["ubicacion"]);
            $this->actividades->set('img',addslashes(file_get_contents($_FILES['imagen']['tmp_name'])));
            $datos[1]=false;
            if(mysqli_num_rows($this->actividades->verify())==0) {

                $this->actividades->add();
                header("Location:".URL."Actividadesrecreativas");
                $datos[1]=true;
            }
            $datos[0]=$this->actividades->getAll();
            header("Location:".URL."Actividadesrecreativas");
            return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->actividades->delete($id[0]);
        $datos1=$this->actividades->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function modificar($id)
    {
        $datos=$this->actividades->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {

            $this->actividades->set('titulo',$_POST["titulo"]);
            $this->actividades->set('descripcion',$_POST["descripcion"]);
            $this->actividades->set('hora_inicio',$_POST["hora_inicio"]);
            $this->actividades->set('hora_fin',$_POST["hora_fin"]);
            $this->actividades->set('telefono',$_POST["telefono"]);
            $this->actividades->set('correo',$_POST["correo"]);
            $this->actividades->set('pagina',$_POST["pagina"]);
            $this->actividades->set('ubicacion',$_POST["ubicacion"]);
            $this->actividades->set('img',addslashes(file_get_contents($_FILES['imagen']['tmp_name'])));
            $this->actividades->update();
            header("Location:".URL."Actividadesrecreativas");
        }
    }
    public function print_pdf()
    {
        $datos=$this->actividades->getAll();
        return $datos;
    }
    public function Tipo1()
    {

    }
}