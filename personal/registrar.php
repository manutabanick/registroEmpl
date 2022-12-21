
<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtDni"])){
        header('Location: personas.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $Dni = $_POST["txtDni"];
    
    $sentencia = $bd->prepare("INSERT INTO persona(nombre,edad,Dni) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$edad,$Dni]);

    if ($resultado === TRUE) {
        header('Location: personas.php?mensaje=registrado');
    } else {
        header('Location: personas.php?mensaje=error');
        exit();
    }
    
?>
