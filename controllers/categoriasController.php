<?php 
    class categoriasController{
        private $model;
        public function __construct()
        {
            require_once("../models/categoriasModel.php");
            $this-> model =  new categoriaModel();
        }

        public function guardar($categoria){
            $id = $this->model->insertar($categoria);
            return ($id != false ) ? header("Location:listadoCategorias.php"): header("Location:create.php");
        }
        public function verTodo(){
            $data = $this->model->showAllCategories();
            return ($data != false ) ? $data: header("Location:create.php");
        }
        public function verUno($id){
            $data = $this->model->showOne($id);
            return ($data != false ) ? $data: header("Location:create.php");
        }
        public function delete($id){
            $data = $this->model->delete($id);
            return ($data != false ) ? header("Location:listadoCategorias.php"): header("Location:listadoCategorias.php?error='problemas al eliminar'");
        }
        public function edit($id, $categoria){
            $data = $this->model->edit($id, $categoria);
            return ($data != false ) ? header("Location:listadoCategorias.php"): header("Location:listadoCategorias.php?error='problemas al editar'");
        }
    }
?>