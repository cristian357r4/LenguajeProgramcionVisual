<?php

include_once "controller/Conectar.php";
$conexion = new Conectar();
$usuario = $_POST["usuario"];
$password= $_POST["password"];

$check_data = "Select * from usuario WHERE usuario='$usuario'";

$resultado = mysqli_query($conexion->conexion(), $check_data);


while($columnas = mysqli_fetch_assoc($resultado)):
    echo $columnas['usuario'];
    echo $columnas['password'];
    if(password_verify($password, $columnas['password'])){
        session_start();
       $_SESSION['usuario'] = $columnas['nombre'];
       header('Location: index.php');
    }else{
        header('Location: login.html?text=error');
    }


endwhile;
