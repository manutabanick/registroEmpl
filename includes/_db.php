<?php

$conexion = mysqli_connect('localhost', 'root', "", 'usuario');
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>