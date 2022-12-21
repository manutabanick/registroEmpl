

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	

</head>

<body style="background-color:#90A4AE ;">
<div style="background-color:#90A4AE ;">
          <div class="row">
              <div class="col-md">
                  <header class="py-3">
                      <h2 class="text-center">REGISTRO EMPLEADOS</h2>
                  </header>
              </div>
          </div>
      </div>
<form  action="_functions.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <br>
           
                   <br>
                                    <h3 class="text-center">Iniciar Sesión</h3>
                       <br>
                            <div class="form-group">
                                <label for="correo">Usuario:</label><br>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                                <input type="hidden" name="accion" value="acceso_user">
                            </div>
                            <div class="form-group">
                             <br>
                    <center>
                                <input type="submit"class="btn btn-success" value="Ingresar">   
                                </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <footer class="container-fluid bg-dark fixed-bottom">
        <div class="row">
            
                <br>
                
            </div>
        </div>
    </footer>
</body>
</html>