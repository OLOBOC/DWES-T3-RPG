<?php
//configuracion de la base de datos 
$host = 'localhost';
$dbname = 'dwes-t3-rpg';
$username = 'root';
$password = '';
try {
    $db = new PDO(
        "mysql=host=$host;dbname=$dbname;charset=utf8",$username,$password);
        
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexion realizada";
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
