<!-- Inicio Menu -->
<nav class="navbar-expand-lg navbar-dark fixed-top bg-dark shadow" id="menu">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index.php">
                <img src="IMG/logo_1_00000.png" alt="" width="50px" class="d-inline-block align-text-top logo">
                <p class="logo">FIND UR WORK</p>
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link active shadow-sm" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active shadow-sm" href="empresas_ver_ofertas.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ofertas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="empresas_crear_ofertas.php">Crear nueva oferta</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="empresas_ver_ofertas.php">Ver ofertas</a></li>
                    </ul>
                </li>
            </ul>
            <form action="Funciones/Login/CerrarSesion.php" method="post">
                <button type="submit" class="btn btn-dark shadow-sm gap-3">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</nav>
<!-- Fin Menu -->
<br>
<br>
<br>