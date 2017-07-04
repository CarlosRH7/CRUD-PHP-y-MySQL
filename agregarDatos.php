<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar datos</title>

    <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">   
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  
  </head>


  <body>

  <!-- es un contenedor para todo mi contenido -->
    <div class="container-fluid">
      <div class="col-md-4 col-md-offset-4">
        <center><h1>Agregar Datos</h1></center>
        <form action="includes/agregar.php" method="POST">

          <div class="form-group">
            <input class="form-control" type="text" name="titulo" placeholder="Agregar título del Post" required="true">
          </div>

          <div class="form-group">
            <input class="form-control" type="text" name="autor" placeholder="Agrega el autor del post" required="true">
          </div>

          <div class="form-group">
            <input class="form-control" type="text" name="fecha" placeholder="Agrega la fecha del post" required="true">
          </div>

          <div class="form-group">
            <textarea class="form-control" name="contenido" placeholder="Agega el contenido del post" required="true"></textarea>
          </div>

          <div class="form-group">
            <input class="form-control" type="text" name="img" required="true" placeholder="Agrega el link de la imagen">
          </div>

          <center><button class="btn bnt-success" type="submit">Agregar</button></center>
          
        </form>
      </div>

    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
  </body>
</html>