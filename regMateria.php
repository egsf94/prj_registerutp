<?php include('pdo.php'); ?>
<!doctype html>
<html lang="es">

<head>
    <?php include "head.php" ?>
</head>

<body>
    <header>
        <?php include "menu.php"; ?>
    </header>
    <div class="container p-5 my-5 bg-dark text-white">
        <form action="registro.php" method="POST">
            <h2><em>Registro de Materia</em></h2>
            <div class="mb-3 mt-3">
                <label for="nommateria" class="form-label">Nombre de nueva materia:</label>
                <input type="text" class="form-control" id="nommateria" placeholder="Nueva materia" name="nommateria">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
    <div class="container mt-1">
        <h2>Tabla de Cursos Registrados</h2>
        <p>Los que estan habilitados tienen estado "0" y los que no tienen estado "1"</p>
        <table class="table table-dark table-bordered table-striped">
            <thead>
                <tr>
                    <th width="10%">ID Materia</th>
                    <th width="22%">Nombre de Materia</th>
                    <th width="14%">Fecha registro</th>
                    <th width="14%">Fecha modificación</th>
                    <th width="10%">Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM materia"; 
                $query = $connect -> prepare($sql); 
                $query -> execute(); 
                $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                if($query -> rowCount() > 0)   { 
                foreach($results as $result) { 
                echo "
                <tr>
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
    <footer class="footer">
        <?php include "piepag.php"; ?>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
</body>

</html>