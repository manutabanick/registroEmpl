<?php include 'template/header.php' ?>
<?php 
    if(!isset($_GET['codigo'])){
        header('Location: personas.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM persona where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: personas.php?mensaje=eliminado');
    } else {
        header('Location: personas.php?mensaje=error');
    }
    
?>
<?php include 'template/footer.php' ?>