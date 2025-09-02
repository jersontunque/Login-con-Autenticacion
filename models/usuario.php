<?php 

include_once (__DIR__ . "/../config/conexion.php");

class Usuarios{
    private $conexion;

    public function __construct(){
        $this->conexion = new conexion();
    }

    public function insertarUsuario($nombre,$email,$contraseña){
        $contraseñahasheada = password_hash($contraseña, PASSWORD_DEFAULT);
        $cnn = $this->conexion->conectar();
        $query = "INSERT INTO usuarios (nombre, email, contraseña_hash) VALUES (?, ?, ?)";
        $stmt = $cnn->prepare($query);
        $stmt->bindParam(1,$nombre,PDO::PARAM_STR);
        $stmt->bindParam(2,$email,PDO::PARAM_STR);
        $stmt->bindParam(3,$contraseñahasheada, PDO::PARAM_STR);
        return $stmt->execute();
    }
    
   public function buscarPorEmail($email){
    $cnn = $this->conexion->conectar();
    $query = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $cnn->prepare($query);
    $stmt->bindParam(1, $email, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}

?>