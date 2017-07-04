<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">  
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  
  </head>


  <body>



    <div class="container-fluid">
    <?php 
      include_once'includes/config.php';
      global $link;

      $query="SELECT * FROM post";
      $result=$link->query($query);

        if ($result) {
          while($row=mysqli_fetch_assoc($result)){

            echo '<div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        <img src="'.$row['imagen_post'].'" alt="...">
                        <div class="caption">
                          <h3>'.$row['titulo_post'].'</h3>
                          <p>'.$row['contenido_post'].'</p>
                          <p><a href="includes/eliminar.php?id_post='.$row['id_post'].'" class="btn btn-primary" role="button">Eliminar</a> <a href="editar.php?id_post='.$row['id_post'].'" class="btn btn-default" role="button">Editar</a></p>
                        </div>
                      </div>
                    </div>';

          }
        }



     ?>



    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
  </body>
</html>