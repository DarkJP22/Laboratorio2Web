<?php 
function getDB(){ //Este es la coneccion a bd//
    $db = new PDO('mysql:host=localhost;dbname=db_sistemuni;charset=utf8', 'root', '');
    return $db;
}
function getMaterias($nombre){
    $db = getDB();
    $sentencia = $db->prepare("SELECT * FROM materias WHERE nombre LIKE ?");
    $sentencia->execute(["%$nombre%"]);
    $materias = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $materias;
}
?>