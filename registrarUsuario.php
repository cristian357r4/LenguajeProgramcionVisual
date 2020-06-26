<?php


include_once "controller/Conectar.php";

$nombre= $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$r_password = $_POST["repeat"];


echo $nombre;
echo $apellido;
echo $correo;
echo $usuario;
echo $password;
echo $r_password;
if ($_POST['password'] == $_POST['repeat']) { //action for Test SMS Button

   $clave_cifrada = password_hash($password, PASSWORD_DEFAULT, array("cost"=>15));
   $conexion = new Conectar();

   $string =  "INSERT INTO usuario (nombre, apellido, email, usuario, password) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$clave_cifrada')";

    //asocio los campos del insert a los campos del formulario

    $usuario = mysqli_query($conexion->conexion(), $string);
    //si no he echo el imbecil y todo esta correcto ejecuto lo anterior
//    echo $usuario;
    //cierro la conexion
    $conexion = null;

    header('Location: login.html?text=success');

} else {
    header('Location: register.html?text=error');

}
?>


