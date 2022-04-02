<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('..\..\mod\header.php');
    ?>
<br>
<br>
<div class="container-fluid">
    <h2>LISTA DE OFERTAS</h2>
    <div class="d-flex flex-row">
        <button type="button" class="btn btn-outline-primary"><i class="bi bi-bookmark-plus-fill"></i> Agregar nueva oferta</button>
    </div>
    <table class="table table-striped" id="ver-oferta">
        <thead>
            <tr>
                <th scope="col">Lista</th>
                <th scope="col">OFERTA</th>
                <th scope="col">ESTADO</th>
                <th scope="col">ÁREA DE EMPRESA</th>
                <th scope="col">CaCARGO SOLICITADO</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
<?php

include_once("../../../Funciones/conexión/BDD.php");

$SQL = "SELECT empresas.IdEmpresa, NombreOferta, Estado, detallesoferta.AreaEmpresa, detallesoferta.CargoSolicitado, detallesoferta.TipoContratacion
FROM empresas JOIN ofertas ON ofertas.IdEmpresa = empresas.IdEmpresa 
JOIN detallesoferta ON ofertas.IdDetallesOferta = detallesoferta.IdDetallesOferta";
//WHERE empresas.Correo = 'usuario@vsr.sv.cv'

$objeto = $BDD_DSS->query($SQL);
$NumeroFila = '1';

while($fila = $objeto->fetch_assoc()){
    $idEmpresa = $fila['IdEmpresa'];
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
                <a class="btn btn-dark" href="delete.php?id='.$idEmpresa'" class="btn btn-default"><i class="bi bi-eye"></i> Ver mas</span></a>
                <a class="btn btn-dark" href="delete.php?id='.$idEmpresa'" class="btn btn-default"><i class="bi bi-pencil"></i> Modificar</span></a>	
                <a class="btn btn-danger" href="opciones/ver_ofertas.eliminar.php?idEmpresa=$idEmpresa"><i class="bi bi-trash"></i> Eliminar</a>
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