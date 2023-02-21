<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != "no"){
            header('location: login.php');
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "head.php" ?>
</head>
<body>
    <header>
        <?php include "menu.php"; ?>
        <?php if(isset($_SESSION['usern']))
        { ?>
            <h1>Bienvenido de nuevo Colaborador: <?php echo $_SESSION['usern'] ?>.</h1>
    
        <?php } ?>
    </header>
<p>
    
Esta es una pagina para usuarios sin privilegios

</p>
</body>
</html>