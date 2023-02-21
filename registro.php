<?php
include('database.php');
session_start();
        // echo "$_SESSION['username']";
    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != "si"){
            header('location: login.php');
        }
    }
$db = new Database();
$sql = "SELECT * FROM usuario"; 
$query = $db->connect()->prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ);

//agregar
if($_POST){
    $username = $_POST['username'];
    $contrasena = $_POST['password'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $email = $_POST['email'];
    $admin = $_POST['admin'];

    $sql_agregar = 'INSERT INTO usuario(username,password,nombre,apelllidoP,apellidoM,email,admin) VALUES (?,?,?,?,?,?,?)';
    $db = new Database();
    $sentencia_agregar = $db->connect() -> prepare($sql_agregar);
    $sentencia_agregar -> execute(array($username,$contrasena,$nombre,$apellidoP,$apellidoM,$email,$admin));
    echo "El usuario fue agregado satisfactoriamente";
}
?>


<!doctype html>
<html lang="es">

<head>
    <?php include "head.php" ?>
</head>

<body>
    <header>
        <?php include "menuadmin.php"; ?>
        <?php if(isset($_SESSION['usern']))
        { ?>
            <h1>Bienvenido de nuevo Administrador: <?php echo $_SESSION['usern'] ?>.</h1>
            <br><br><br>
        <?php } ?>
    </header>

    <div class="container p-5 my-5 bg-dark text-white">
        <h2><em>Registro nuevo usuario</em></h2><br><br>
        <form method="post" action="" name="signup-form">
            <div class="form-element">
                <label>Username</label>
                <input type="text" name="username" required />
            </div>
            <div class="form-element">
                <label>Password</label>
                <input type="password" name="password" required />
            </div>
            <div class="form-element">
                <label>nombre</label>
                <input type="text" name="nombre" required />
            </div>
            <div class="form-element">
                <label>Apellido Paterno</label>
                <input type="text" name="apellidoP" required />
            </div>
            <div class="form-element">
                <label>Apellido Materno</label>
                <input type="text" name="apellidoM" required />
            </div>
            <div class="form-element">
                <label>Email</label>
                <input type="email" name="email" required />
            </div>
            <div class="form-element">
                <label>Administrador (si/no)</label>
                <input type="text" name="admin" required />
            </div>

            <button type="submit" name="registro" value="register">Registro</button>
        </form>

    </div>
    <div class="container mt-1">
        <h2>Tabla de Usuarios Registrados</h2>
        <p>Los que estan habilitados tienen estado "1" y los que no tienen estado "0"</p>
        <table class="table table-dark table-bordered table-striped">
            <thead>
                <tr>
                    <th width="8%">ID user</th>
                    <th width="8%">username</th>
                    <th width="14%">nombre</th>
                    <th width="10%">apellido paterno</th>
                    <th width="10%">apellido materno</th>
                    <th width="10%">email</th>
                    <th width="10%">admin</th>
                    <th width="10%">fechaC</th>
                    <th width="10%">fechaM</th>
                    <th width="10%">estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM usuario"; 
                $db = new Database();
                $query = $db->connect()->prepare($sql); 
                $query -> execute(); 
                $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                if($query -> rowCount() > 0)   { 
                foreach($results as $result) { 
                echo "
                <tr>
                    <td>".$result -> iduser."</td>
                    <td>".$result -> username."</td>
                    <td>".$result -> nombre."</td>
                    <td>".$result -> apelllidoP."</td>
                    <td>".$result -> apellidoM."</td>
                    <td>".$result -> email."</td>
                    <td>".$result -> admin."</td>
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