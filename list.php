<?php
require('../form/conexion.php');
$nombre=$_GET['nombre'];
$contrasenia=$_GET['contrasenia'];
$email=$_GET['email'];

$insertar=mysqli_query($link,"INSERT INTO usuarios (nombre, contrasenia, email) VALUES
('".$nombre."','".$contrasenia."','".$email."')");
 
if($insertar==true){ echo 'Exito al Guardar';
}
	
