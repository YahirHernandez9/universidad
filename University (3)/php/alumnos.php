<?php
include ("ConexionBaseDatos.php");

session_start();

$studentname = $_POST["txt_name"];
$firstlastname = $_POST["txt_apellidopaterno"];
$secondlastname = $_POST["txt_apellidomaterno"];
$age = $_POST["txt_edad"];
$phonenumber = $_POST["txt_telefono"];
$email = $_POST["txt_email"];

$insert_alumnos = mysqli($conexion, "INSERT INTO 
alumnos (Nombre_Alumno, Apellido_Paterno_ Apellido_Materno, Edad, Telefono
values ("$studentname", "$firstlastname", "$secondlastname",
"$age", "$phonenumber", "$email")");

//ejecutar la conexion a la base de datos y ejecutar la instruccion insertar alumnos//

$resultado = $conexion->query ($insertaralumnos);
//mysqli_query ($conexion, $insertaralumnos) comparando que la conexion y el sql se inserte en la base de datos//

if($resultado == TRUE){
    //muestre el mensaje
    echo "Alumno Agregado Exitosamente";
}else{
    //muestre el error al momento de insertar y de la conexion
    echo "Error" . $insertaralumnos . "<br>" . $conexion->error;
}
//cerrar la conexion de la base de datos y el servidor
$conexion->close();

?>