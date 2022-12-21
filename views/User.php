<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

  header("Location: ../includes/login.php");
  die();
  
}


?>
<!DOCTYPE html>
<html lang="es-AR">
    
<head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- cdn icnonos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <div style="background-color:#90A4AE ;">
          <div class="row">
              <div class="col-md">
                  <header class="py-3">
                      <h3 class="text-center">MANUEL TABANIK</h3>
                  </header>
              </div>
          </div>
      </div>

<div class="container is-fluid">




<div class="col-xs-12">
  		<h1>Bienvenido <?php echo $_SESSION['nombre']; ?></h1>
      <br>
		<h1>Lista de usuarios</h1>
    <br>
		<div>

      <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Cerrar Sesion
      <i class="fa fa-power-off" aria-hidden="true"></i>
       </a>

		</div>
		<br>




           <br>


			</form>
        
        
 
      <table class="table table-striped table-dark " id= "table_id">

                   
                         <thead>    
                         <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                        <th>Rol</th>
                     
                        </tr>
                        </thead>
                        <tbody>

				<?php

$conexion=mysqli_connect("localhost","root","","usuario");               
$SQL="SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
user.fecha, permisos.rol FROM user
LEFT JOIN permisos ON user.rol = permisos.id";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td><?php echo $fila['fecha']; ?></td>
<td><?php echo $fila['rol']; ?></td>





<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>

<table class="table table-striped table-dark " id= "table_id">

<h1>Listado de Personal</h1>                 
<thead>    
<tr>
<th>Codigo</th>
<th>Nombre</th>
<th>Edad</th>
<th>Dni</th>


</tr>
</thead>
<tbody>

<?php

$conexion=mysqli_connect("localhost","root","","usuario");               
$SQL="SELECT * FROM persona";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
while($fila=mysqli_fetch_array($dato)){

?>
<tr>
<td><?php echo $fila['codigo']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['edad']; ?></td>
<td><?php echo $fila['Dni']; ?></td>






<?php
}
}else{

?>
<tr class="text-center">
<td colspan="16">No existen registros</td>
</tr>


<?php

}

?>
</table>

	</body>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>


</html>






