<section class="w-100 vh-100 contenedor-new-user d-flex justify-content-center align-items-center">
    <div class="formulario p-md-5 mx-md">
        <form action="Funciones/Login/creaciousuario.php" method="post" class="">
            <h2 class="text-center">Crear una cuenta</h2>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-envelope"></i></span>
                <input require_onced aria-require_onced="Por favor ingrese un correo válido" type="mail" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-lock"></i></span>
                <input required type="password" class="form-control" name="contra"  id="contra" placeholder="Ingrese su contraseña">
            </div>
            <h2 class="text-center">Datos Personales</h2>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Ingrese sus nombres">
                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-123"></i></span>
                <input required type="number" class="form-control" name="edad" id="edad" placeholder="Ingrese su edad">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-person"></i></span>
                <select class="form-select" id="selGenero" name="genero"  aria-placeholder="Escoga una opción">
                    <option value="0">Masculino</option>
                    <option value="1">Femenino</option>
                </select>
            </div>
            <fieldset>
                <legend>Dirección <span class="icono"><i class="bi bi-pin-map-fill"></i></span></legend>
                <div class="input-group mb-3">
                <label class="input-group-text" for="selDep">Departamento</label>
                <select class="form-select"  id="selDep" name="departamento" aria-placeholder="Escoga una opción">
                    <option value="Ahuachapán">Ahuachapán</option>
                    <option value="Chalatenango">Chalatenango</option>
                    <option value="Cabañas">Cabañas</option>
                    <option value="Cuscatlán">Cuscatlán</option>
                    <option value="La Libertad">La Libertad</option>
                    <option value="Morazán">Morazán</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Santa Ana">Santa Ana</option>
                    <option value="San Miguel">San Miguel</option>
                    <option value="San Salvador">San Salvador</option>
                    <option value="San Vicente">San Vicente</option>
                    <option value="Sonsonate">Sonsonate</option>
                    <option value="La Unión">La Unión</option>
                    <option value="Usulután">Usulután</option>
                </select>
            </div>
            </fieldset>
            <div class="submit">
                <button type="submit" name="crear" class="boton estilizado"><span>Crear cuenta</span></button>
            </div>
</section>