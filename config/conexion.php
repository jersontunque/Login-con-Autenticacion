<?php 
class conexion{

public function conectar(){
    $host = "localhost";
$db = "db_sesion";
$user = "root";         
$contraseña = "";        

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $contraseña);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch (PDOException $e) {
    echo "❌ Error en la conexión: " . $e->getMessage();
    return null;
}
}
}
?>
