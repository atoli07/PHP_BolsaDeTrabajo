<!-- Inicio Formulario -->
<div class="container">
  <br>
  <h2>Nueva oferta de trabajo</h2>
  <form method="POST">
    <div class="input-group">
      <span class="input-group-text"><i class="bi bi-building"></i></span>
      <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre de la empresa //aunque sera la logueada">
    </div>
    <div class="row">
      <div class="col-12">
        <span class="input-group-text"><i class="bi bi-pencil-square"></i> Descripción de oferta</span>
        <textarea name="descripcion" class="form-control" placeholder="Descripción de oferta" cols="30" rows="10"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <span class="input-group-text"><i class="bi bi-building"></i> Área de la empresa</span>
        <input type="text" class="form-control" name="area_empresa" placeholder="Área de la empresa">
      </div>
      <div class="col-md-4">
        <span class="input-group-text"><i class="bi bi-person-square"></i> Cargo solicitado</span>
        <input type="text" class="form-control" name="cargo" placeholder="Cargo solicitado">
      </div>
      <div class="col-md-4">
        <span class="input-group-text"><i class="bi bi-clipboard"></i> Tipo de contratación</span>
        <div class="btn-group" role="group">
          <input type="radio" class="btn-check" name="contratacion" id="btnradio1" autocomplete="off" >
          <label class="btn btn-outline-secondary" for="contratacion">Por proyecto</label>

          <input type="radio" class="btn-check" name="contratacion" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-secondary" for="contratacion">Tiempo indefinido</label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-mortarboard"></i> Educación mínima</label>
        <select class="form-select" id="inputGroupSelect01" name="eduacion">
          <option>Educación Básica</option>
          <option>Bachiller</option>
          <option>Educación Superior</option>
        </select>
      </div>
      <div class="col-md-6">
        <label class="input-group-text" for="inputGroupSelect02"><i class="bi bi-person-plus"></i> Experiencia</label>
        <select class="form-select" id="inputGroupSelect02" name="experiencia">
          <option>Sin experiencia</option>
          <option>1 años</option>
          <option>2 años</option>
          <option>más de 2 años</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <span class="input-group-text"><i class="bi bi-123"></i> Rango de edad</span>
        <input type="text" class="form-control" name="edad" placeholder="Rango de edad">
      </div>
      <div class="col-md-4">
        <span class="input-group-text"><i class="bi bi-currency-dollar"></i> Salario mínimo</span>
        <input type="number" min="0.00" class="form-control" name="salario_min" placeholder="Salario mínimo">
      </div>
      <div class="col-md-4">
        <span class="input-group-text"><i class="bi bi-currency-dollar"></i> Salario máximo</span>
        <input type="number" min="0.00" class="form-control" name="salario_min" placeholder="Salario máximo">
      </div>
    </div>
    <div class="row">
      <button type="submit" class="col-12 btn btn-primary" name="guardar_oferta">Guardar</button>
    </div>
  </form>
</div>
<!-- Fin Formulario -->