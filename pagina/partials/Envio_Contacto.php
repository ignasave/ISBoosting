<?php

include 'conexion.php';
$email = $_POST["email"];
$nombre = $_POST["nombre"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$insertar = "INSERT INTO contactos (email,nombre,asunto,mensaje) VALUES ('$email','$nombre','$asunto','$mensaje')";
$resultado = mysqli_query($conexion,$insertar);

if($row = mysqli_fetch_array($resultado)){ 
	echo json_encode("correcto");
	$resultado = mysqli_query($conexion, $insertar) or die ('Error al registrarse. '. mysqli_error($conexion));
  }
else{
    echo json_encode("incorrecto");

}
mysqli_close($conexion);

?>