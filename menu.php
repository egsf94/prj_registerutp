<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </div>
        <form action='destruir_sesion.php'>
                    <input type="submit" name="sesionDestroy" value="Cerrar sesion" style="float: right;"/>
        </form>
    </div>
</nav>