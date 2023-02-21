<?php
    include_once 'database.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case "si":
                header('location: registro.php');
            break;

            case "no":
            header('location: colab.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM usuario WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[7];
            $_SESSION['rol'] = $rol;
            $user = $row[1];
            $_SESSION['usern'] = $user;

            switch($_SESSION['rol']){
                case "si":
                    header('location: registro.php');
                break;
    
                case "no":
                header('location: colab.php');
                break;
    
                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "head.php" ?>
    <style type="text/css">
    body {
        background: #d1e0e5;
    }

    .content {
        margin: 0 auto;
        width: 500px;
        height: 300px;
        margin-top: 9%;
        background: #093D66;
        color: #fff;
        border: 6px solid #002A4A;
    }

    label {
        display: block;
    }

    .caja_login {
        margin: 30px 0px 0px 70px;
    }

    .caja_login input[type=text],
    input[type=password] {
        width: 280px;
        padding: 8px 6px;
        border-radius: 8px;
    }

    .caja_login input[type=submit] {
        padding: 5px 60px;
        text-align: center;
        border-radius: 4px;
        color: #fff;
        background: #dc2d29;
        border: 1px solid #fff;
        margin-top: 10px;
    }
    </style>

    <?php include "menu.php" ?>
</head>

<body>

    <div class="container p-5 my-5 bg-dark text-white">
        <h2>Login</h2>
        <form class="form" action="login.php" method="post">
            <label>Nick</label>
            <input type="text" name="username" required="true" placeholder="Introduce tu nick" />
            <br><br>
            <label>Password</label>
            <input type="password" name="password" required="true" placeholder="Introduce tu password" />
            <br><br><br>
            <input type="submit" value="Login" />

        </form>
    </div>
</body>

</html>