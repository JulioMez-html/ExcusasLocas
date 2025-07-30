<?php
include("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
  header("Location: bienvenido.php");
} else {
  echo "Usuario o contraseña incorrectos.";
}
?>