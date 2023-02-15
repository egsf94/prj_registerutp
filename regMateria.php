<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro UTP</title>
<link href="font/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="group">
  <form action="registro.php" method="POST">
  <h2><em>Registro de Materia</em></h2>  
     
      <label for="materia">Nombre de Materia <span><em>(requerido)</em></span></label>
      <input type="text" name="materia" class="form-input" required/>          
      
     <center> <input class="form-btn" name="submit" type="submit" value="Registrar" /></center>
  </form>
</div>
</body>
</html>

<?php include('pdo.php');?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>RegistroUTP</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>


</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">Registro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="regAlumno.html">Registro de Alumno <span class="sr-only">(current)</span></a> </li>
      </ul>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="regCarrera.html">Registro de Carreras <span class="sr-only">(current)</span></a> </li>
      </ul>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="regMateria.html">Resgistro de Materias<span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Tabla de Registros</h3>
  <hr>
  <div class="row">
 
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->



<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="thead-dark">
    <th width="10%">ID Materia</th>
    <th width="22%">Nombre de Materia</th>
    <th width="14%">Fecha registro</th>
    <th width="14%">Fecha modificación</th>
    <th width="10%">Estado</th>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM materia"; 
$query = $connect -> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 

if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
echo "<tr>
<td>".$result -> idmateria."</td>
<td>".$result -> nommateria."</td>
<td>".$result -> fechaC."</td>
<td>".$result -> fechaM."</td>
<td>".$result -> estado."</td>
</tr>";

   }
 }
?>
</tbody>
</table>
</div>
</form>
   </div>  
  </div>
 

      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>

