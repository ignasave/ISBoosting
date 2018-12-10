  <?php 
include 'conexion.php';
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$selectar = "SELECT usuario,password from usuarios WHERE usuario = '$usuario' AND password = '$password'";
$resultado = mysqli_query($conexion,$selectar);

if($row = mysqli_fetch_array($resultado)){
  if($row['password'] == $password && $row['usuario'] == $usuario){
    session_start();
    $_SESSION['usuario'] = $usuario;
    echo json_encode("correcto");
  }
}
else{
  echo json_encode("incorrecto");
}

mysqli_close($conexion);

?>
