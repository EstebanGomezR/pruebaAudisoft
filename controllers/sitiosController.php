<?php
class sitiosController
{
    private $model;
    public function __construct()
    {
        require_once("../models/sitiosModel.php");
        $this->model =  new sitioModel();
    }

    public function guardar($sitio, $direccion, $categoria)
    {
        $id = $this->model->insertar($sitio, $direccion, $categoria);
        return ($id != false) ? header("Location:listadoSitiosWeb.php") : header("Location:listadoSitiosWeb.php?error=Problemas al crear");
    }
    public function verTodo()
    {
        $data = $this->model->showAllCategories();
        return ($data != false) ? $data : false;
    }
    public function verCategoriaUso($id)
    {
        $data = $this->model->viewCategorieUSe($id);
        return ($data != false) ? $data : false;
    }
    public function verUno($id)
    {
        $data = $this->model->showOne($id);
        return ($data != false) ? $data : header("Location:listadoSitiosWeb.php");
    }
    public function delete($id)
    {
        $data = $this->model->delete($id);
        return ($data != false) ? header("Location:listadoSitiosWeb.php") : header("Location:listadoSitiosWeb.php?error='problemas al eliminar'");
    }
    public function edit($id, $nombre, $direccion, $id_categoria)
    {
        $data = $this->model->edit($id, $nombre, $direccion, $id_categoria);
        return ($data != false) ? header("Location:listadoSitiosWeb.php") : header("Location:listadoSitiosWeb.php?error='problemas al editar'");
    }
}
