<div class="contenedor-new-emp w-100 vh-100">
    <div class="formulario d-flex justify-content-center align-items-center">
        <form class="w-75" action="Funciones/Login/creacionesEmpe.php" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-building"></i></span>
                <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" placeholder="Ingrese el nombre de la empresa" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-envelope"></i></span>
                <input require_onced aria-require_onced="Por favor ingrese un correo válido" type="mail" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-lock"></i></span>
                <input required type="password" class="form-control" name="contra" id="contra" placeholder="Ingrese su contraseña">
            </div>
            <div class="submit">
                <button type="submit" name="ingresar" class="boton-2 estilizado-2"><span>Crear cuenta</span></button>
            </div>
        </form>
    </div>
    <div class="imagen-emp d-flex align-items-center">
        <h1 class="text-white">Cree una cuenta</h1>
    </div>
</div>