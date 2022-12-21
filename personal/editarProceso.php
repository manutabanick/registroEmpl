<?php include 'template/header.php' ?>
<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    $Dni = $_POST['txtDni'];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, edad = ?, Dni = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $Dni, $codigo]);

    if ($resultado === TRUE) {
        header('Location: personas.php?mensaje=editado');
    } else {
        header('Location: personas.php?mensaje=error');
        exit();
    }
    
?>
<?php include 'template/footer.php' ?>