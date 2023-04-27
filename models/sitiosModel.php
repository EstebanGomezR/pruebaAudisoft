<?php
class sitioModel
{
    private $PDO;
    public function __construct()
    {
        require_once("connection.php");
        $con = new connection();
        $this->PDO = $con->conexion();
    }
    public function insertar($sitio, $direccion, $categoria)
    {
        $stament = $this->PDO->prepare("INSERT INTO sitios_web VALUES(null, :sitio, :direccion, :categoria)");
        $stament->bindParam(":sitio", $sitio);
        $stament->bindParam(":direccion", $direccion);
        $stament->bindParam(":categoria", $categoria);
        return ($stament->execute()) ? $this->PDO->lastInsertId() :  false;
    }
    public function showAllCategories()
    {
        $stament = $this->PDO->prepare("SELECT A.*, B.nombre_categoria FROM sitios_web as A INNER JOIN categorias as B on A.id_categoria = B.id_categoria");
        return ($stament->execute()) ? $stament->fetchAll() :  false;
    }
    public function showOne($id)
    {
        $stament = $this->PDO->prepare("SELECT A.*, B.nombre_categoria FROM sitios_web as A INNER JOIN categorias as B on A.id_categoria = B.id_categoria WHERE A.id_web = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetchAll() :  false;
    }
    public function edit($id, $nombre, $direccion, $id_categoria)
    {
        $stament = $this->PDO->prepare("UPDATE sitios_web SET nombre_web = :nombre, direccion_web = :direccion_web, id_categoria= :id_categoria WHERE id_web = :id limit 1");
        $stament->bindParam(":nombre", $nombre);
        $stament->bindParam(":direccion_web", $direccion);
        $stament->bindParam(":id_categoria", $id_categoria);
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $id :  false;
    }
    public function delete($id)
    {
        $stament = $this->PDO->prepare("DELETE FROM sitios_web WHERE id_web = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $id :  false;
    }
    public function viewCategorieUSe($id)
    {
        $stament = $this->PDO->prepare("SELECT * FROM sitios_web WHERE id_categoria = :id");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetchAll() :  false;
    }
    
}
