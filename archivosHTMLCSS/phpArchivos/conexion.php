<?php
// Archivo de conexion a la base de datos Pruebas
$host = "localhost";
$user = "root";
$clave = "";
$basedatos = "proyectoIntermodular";

$conexion = mysqli_connect($host, $user, $clave);

if (mysqli_connect_errno()) {
  echo "Ha ocurrido un error en la conexión con la base de datos.<br>";
  exit();
}

mysqli_select_db($conexion, $basedatos) or die("Base de datos incorrecta.<br>");
mysqli_set_charset($conexion, "utf8");
//echo ("Conexión exitosa.<br>");
