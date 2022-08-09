<?php
//Crear una tabla en la base de datos Cholos University, llamado Usuario 
//Insertar un usario y contraseña (not null)
//Comenzar la sesion con la funcion session_start();
session_start();
//Indicar la conexion de la pagina
require "ConexionBaseDatos.php";
//crear una variable para leer la información de los inputs y realizar la peticcion
$usuario = $_POST["txt_usuario"];
$password = $_POST["txt_password"];

$validar_informacion = mysqli_query($conexion,"SELECT * FROM usuarios 
WHERE nombreusuario = "$usuario" AND contrasenia = "$password"");

//validar que haya información en la base de datos 
if (mysqli_num_row($validar_informacion) > 0) {
    //Nos mande a la pagina inicial de la universidad
    header ("Location: ../html/Index.html");
}else{
    //creamos una alerta para indicar que el mensaje no existe y nos regrese al login
    echo "<script> alert("El usuario no existe en la base de datos")
    window.history.go(-1);
    </script >";
}
?>