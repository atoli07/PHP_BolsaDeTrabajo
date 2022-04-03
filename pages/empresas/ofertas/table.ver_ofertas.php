<br>
<br>
<div class="container-fluid">
    <h2>LISTA DE OFERTAS</h2>
    <div class="d-flex flex-row">
        <a href="empresas_crear_ofertas.php"  type="button" class="btn btn-outline-primary"><i class="bi bi-bookmark-plus-fill"></i> Agregar nueva oferta</a>
    </div>
    <table class="table table-striped" id="ver-oferta">
        <thead>
            <tr>
                <th scope="col">Lista</th>
                <th scope="col">OFERTA</th>
                <th scope="col">ESTADO</th>
                <th scope="col">ÁREA DE EMPRESA</th>
                <th scope="col">CARGO SOLICITADO</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
<?php

$EmpresaUsuario = $_SESSION['usuario'];

include_once("Funciones/conexión/BDD.php");

$SQL = "SELECT empresas.IdEmpresa, ofertas.IdOferta, NombreOferta, Estado, detallesoferta.AreaEmpresa, detallesoferta.CargoSolicitado, detallesoferta.TipoContratacion
FROM empresas JOIN ofertas ON ofertas.IdEmpresa = empresas.IdEmpresa 
JOIN detallesoferta ON ofertas.IdDetallesOferta = detallesoferta.IdDetallesOferta
WHERE empresas.Correo = '". $EmpresaUsuario ."'";

$objeto = $BDD_DSS->query($SQL);
$NumeroFila = '1';

while($fila = $objeto->fetch_assoc()){
    $idEmpresa = $fila['IdEmpresa'];
    $IdOferta = $fila['IdOferta'];
    $NombreOferta = $fila['NombreOferta'];
    $AreaEmpresa = $fila['AreaEmpresa'];
    $CargoSolicitado = $fila['CargoSolicitado'];
    // $TipoContratacion = $fila['TipoContratacion'];

    $estado;
    $estado_color;

        if($fila['Estado']==1){
            $estado = "Disponible";
            $estado_color = 'style="color: green;"';
        }
        else{
            $estado = "No disponible";
            $estado_color = 'style="color: red;"';
        }

    $OfertaEmpresa = <<<tabla
    <tr>
        <th scope="row"><i class="bi bi-clipboard2-check-fill"></i> $NumeroFila</th>
        <td>$NombreOferta</td>
        <td $estado_color"> $estado</td>
        <td>$AreaEmpresa</td>
        <td>$CargoSolicitado</td>
        <td>
            <div class="btn-group" role="group">
                <a class="btn btn-dark" href="empresas_ver_oferta.php?idOferta=$IdOferta" class="btn btn-default"><i class="bi bi-eye"></i> Ver mas</span></a>
                <a class="btn btn-dark disabled" href="empresas_modificar_oferta.php?idOferta='.$IdOferta'" class="btn btn-default" name='Modific' disabled><i class="bi bi-pencil"></i> Modificar</span></a>	
                <a class="btn btn-danger" href="empresas_eliminar_ofertas.php?idOferta=$IdOferta"><i class="bi bi-trash"></i> Eliminar</a>
            </div>
        </td>
    </tr>
    tabla;
    echo $OfertaEmpresa;

    $NumeroFila = $NumeroFila + 1;
}

?>    
        </tbody>
    </table>
</div>