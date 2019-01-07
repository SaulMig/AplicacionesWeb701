<?php


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

    public function crear()
    {

        if($_POST)
        {

            $nombre=$_FILES['image']['name'];
            $tmp=$_FILES['image']['tmp_name'];
            $bytes=file_get_contents($tmp);

            $this->actividades->set('titulo',$_POST["titulo"]);
            $this->actividades->set('descripcion',$_POST["descripcion"]);
            $this->actividades->set('img',$bytes);
            $this->actividades->set('hora_inicio',$_POST["hora_inicio"]);
            $this->actividades->set('hora_fin',$_POST["hora_fin"]);
            $this->actividades->set('telefono',$_POST["telefono"]);
            $this->actividades->set('correo',$_POST["correo"]);
            $this->actividades->set('pagina',$_POST["pagina"]);
            $this->actividades->set('ubicacion',$_POST["ubicacion"]);
            $datos[1]=false;
            if(mysqli_num_rows($this->actividades->verify())==0) {

                $this->actividades->add();
                header("Location:".URL."Actividades/Tipo1");
                $datos[1]=true;
            }
            $datos[0]=$this->actividades->getAll();
            header("Location:".URL."Actividades/Tipo1");
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