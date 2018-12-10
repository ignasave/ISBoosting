<?php 
include 'conexion.php';
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$password = $_POST["password"];
$nickname = $_POST["nickname"];
$invocador = $_POST["invocador"];
$liga = $_POST["liga"];
$division = $_POST["division"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$deposito = $_POST["deposito"];

$insertar = "INSERT INTO usuarios(usuario,email,password,nickname,invocador,liga,division,nombre,apellido,deposito) VALUES ('$usuario','$email','$password','$nickname','$invocador','$liga','$division','$nombre','apellido','$deposito')";

$errores = array();

$verificar_user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario'");
if(mysqli_num_rows($verificar_user) != 0){
    array_push ( $errores , "usuario" );
}

$verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email= '$email'");
if(mysqli_num_rows($verificar_email) != 0){
    array_push ( $errores , "email" );

}

$verificar_nickname = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nickname= '$nickname'");
if(mysqli_num_rows($verificar_nickname)!= 0){
    array_push ( $errores , "nickname" );

}

$verificar_invocador = mysqli_query($conexion, "SELECT * FROM usuarios WHERE invocador= '$invocador'");
if(mysqli_num_rows($verificar_invocador)!= 0){
    array_push ( $errores , "invocador" );

}

if(count($errores) > 0){ 
//aca verificas si el array tiene algun elemento
//le mandas el array de los errores en formato json 
	echo json_encode($errores);
}
else{
    //HACES EL INSERT DEL USUARIO
    echo json_encode("funciono");
    $resultado = mysqli_query($conexion, $insertar) or die ('Error al registrarse. '. mysqli_error($conexion));
}

mysqli_close($conexion);

?>