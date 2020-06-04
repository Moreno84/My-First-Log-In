<?php
//conectamos Con el servidor
$host = "localhost:3307";
$user = "root";
$pass = "";
$db = "test";

$conn = mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
	die("No hay conexion: " . mysqli_connect_error());
}

 //recuperar las variables
 $usuario=$_POST['usuario'];
 $password=$_POST['password'];

 $query = mysqli_query($conn,"SELECT*FROM usuarios WHERE usuario ='".$usuario."' and password = '".$password."'");
 $nr = mysqli_num_rows($query);

 if ($nr == 1) {

 	echo "Bienvenido: " .$usuario;
 }else if ($nr == 0) {
 	echo "No ingreso";
 }
?>