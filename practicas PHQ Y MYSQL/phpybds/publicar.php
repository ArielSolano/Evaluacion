<?php 
require('inc/conexion.php');
$consulta = "SELECT * From trabajos";
$resultado = $mysqli -> query($consulta);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Pagina PHP CON BASES DE DATOS</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/estilos.css">

  </head>
<body>
<div class="navbar-fixed navch">
    <nav class="blue" role="navigation">
    <div class="nav-wrapper black"><a id="logo-container" href="#" class="brand-logo">PHPbds</a>
     <ul class="right hide-on-med-and-down ">
            <li><a href="publicar.php">Administrar</a></li>
          </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <br>

</div>
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Nuevo</a>
  <div class="row">
  	<div class="container">
  		<div class="col s12">
  <h4 class="center">Control Clientes</h4>
  <hr>
    <br>
  	         <table class="striped responsive-table" >
        <thead>
          <tr>
              <th data-field="id">Id</th>
             
              <th data-field="nombre">Nombre</th>
              <th data-field="titulo">Titulo</th>
              <th data-field="operaciones">Operaciones</th>
          
          </tr>
        </thead>

        <tbody>
        <?php while ($fila=$resultado->fetch_assoc()){ ?>
          <tr>
        
        <td><?php echo $fila ['id']; ?></td>
        <td><?php echo $fila ['nombre']; ?></td>
        <td><?php echo $fila ['titulo']; ?></td>
     
      
        
        <td>  
           <a class="btn " href="inc/borrar.php?id=<?php echo $fila['id'];?>" >Borrar</a> </td>
           <td> <a class="btn " href="modificar.php?id=<?php echo $fila['id'];?>" >Modificar</a> </td>
      </tr>
            <?php } ?>
        </tbody>
      </table>
  		</div>
  	</div>
  </div>

  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="center">Agregar Trabajador</h4>

      
    <form action="inc/agregar.php" method="post" class="col s12">
    <div class="row">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="nombre" class="validate">
          <label for="icon_prefix">Nombres</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_telephone" name="titulo" type="tel" class="validate">
          <label for="icon_telephone">Titulo</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="center col s12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
    <i class="material-icons right">send</i>
  </button>
        </div>
      </div>
    </form>
  
        
    
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
          
  

  <footer class="black">
      <p class="white center">© 2016 PHP Y Bases de datos | Br. Ariel Emmanuel Solano Ortega</p>
    </footer>


  <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
          $(".button-collapse").sideNav();
        });
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
      
        </script>

  </body>
</html>
