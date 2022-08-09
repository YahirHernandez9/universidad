<?php

require "ConexionBaseDatos.php";

$student_id = $_GET["Matricula_Alumno"];

$eliminaralumno = "DELETE FROM alumnos WHERE Matricula_Alumno = $'student_id'";

$resultado = $conexion->query($eliminaralumno);

if($resultado == TRUE) {
    echo "Alumno Eliminado Exitosamente";
}else{
    echo"Error" . $eliminaralumno . "<br>" . $conexion->error;

}

?>