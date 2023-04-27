<?php
class categoriaModel
{
    private $PDO;
    public function __construct()
    {
        require_once("connection.php");
        $con = new connection();
        $this->PDO = $con->conexion();
    }
    public function insertar($categoria){
        $stament = $this->PDO->prepare("INSERT INTO categorias VALUES(null, :categoria)");
        $stament->bindParam(":categoria", $categoria);
        return ($stament->execute()) ? $this->PDO->lastInsertId() :  false ;
    }
    public function showAllCategories(){
        $stament = $this->PDO->prepare("SELECT * FROM categorias");
        return ($stament->execute()) ? $stament->fetchAll() :  false ;
    }
    public function showOne($id){
        $stament = $this->PDO->prepare("SELECT * FROM categorias WHERE id_categoria = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetchAll() :  false ;
    }
    public function edit($id, $categoria){
        $stament = $this->PDO->prepare("UPDATE categorias SET nombre_categoria = :categoria WHERE id_categoria = :id limit 1");
        $stament->bindParam(":categoria", $categoria);
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetchAll() :  false ;
    }
    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM categorias WHERE id_categoria = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $id :  false ;
    }
}