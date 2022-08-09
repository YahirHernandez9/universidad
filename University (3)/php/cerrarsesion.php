<?php
//comienza la sesion del servidor y la base de datos.
session_start();
//destruir la sesion abierta con la base de datos
session_destroy();
//nos manda a la pagina inicial
header("Location: ../html/login.html");
//salir
exit();
?>