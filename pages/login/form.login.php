<section class="w-100 vh-100 gradient-form d-flex justify-content-center" style="background-color: #1C4965;">
  <div class="contenedor-login">
    <form class="formulario p-md-5 mx-md" action="Funciones/Login/Validaciones.php" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text icono"><i class="bi bi-envelope"></i></span>
        <input require_onced aria-require_onced="Por favor ingrese un correo válido" type="mail" class="form-control" name="correo" placeholder="Ingrese su correo">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text icono"><i class="bi bi-lock"></i></span>
        <input type="password" class="form-control" name="contra" placeholder="Ingrese su contraseña">
      </div>
      <p>¿No tienes una cuenta? <a href="new_user.php">Crea una cuenta</a></p>
      <div class="submit">
        <button type="submit" name="ingresar" class="boton estilizado"><span>Ingresar</span></button>
      </div>
      <p>¿Eres una empresa? Cree una cuenta <a href="new_emp.php">aquí</a></p>
    </form>
    <div class="imagen">
      <h1 class="text-white">Iniciar Sesión</h1>
    </div>
  </div>
</section>