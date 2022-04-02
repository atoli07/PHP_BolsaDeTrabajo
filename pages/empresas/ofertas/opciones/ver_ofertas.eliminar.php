<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('..\..\..\mod\header.php');
    ?>
<br>
<br>
<div class="container-fluid text-center">
    <h2><i class="bi-x-octagon-fill"></i> SEGURO QUE DESEA ELIMINAR LA SIGUIENTE OFERTA? <i class="bi-x-octagon-fill"></i></h2>
<?php

include_once("../../../../Funciones/conexión/BDD.php");
$EmpresaID = $_GET['idEmpresa'];
$SQL = "SELECT* FROM empresas JOIN ofertas ON ofertas.IdEmpresa = empresas.IdEmpresa 
JOIN detallesoferta ON ofertas.IdDetallesOferta = detallesoferta.IdDetallesOferta 
WHERE empresas.IdEmpresa = '" . $EmpresaID  . "'";
//WHERE empresas.Correo = 'usuario@vsr.sv.cv'

$objeto = $BDD_DSS->query($SQL);
$NumeroFila = '1';
$IdDetallesOferta;

while($fila = $objeto->fetch_assoc()){
    $NombreOferta = $fila['NombreOferta'];
    $Descripcion = $fila['Descripcion'];
    $Estado = $fila['Estado'];

    $AreaEmpresa = $fila['AreaEmpresa'];
    $CargoSolicitado = $fila['CargoSolicitado'];
    $TipoContratacion = $fila['TipoContratacion'];
    $EducacionMinima = $fila['EducacionMinima'];
    $NivelExperencia = $fila['NivelExperencia'];
    $Edad = $fila['Edad'];
    $SalarioMin = $fila['SalarioMin'];
    $SalarioMax = $fila['SalarioMax'];
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
        <div class="container border border-dark border-3">
            <div class="row g-2">
                <div class="col p-1"><h3><i class="bi bi-clipboard-x"></i> $NombreOferta</h3></div>
                <div class="w-100"></div>
                <div class="p-3 border bg-light">
                    <h5>Descrición:</h5>
                    <p>
                        $Descripcion Bueno esto sera vicible en caso la oferta tenga variedad de texto
                        Bueno esto sera vicible en caso la oferta tenga variedad de texto
                        Bueno esto sera vicible en caso la oferta tenga variedad de texto
                        Bueno esto sera vicible en caso la oferta tenga variedad de texto
                    </p>
                </div>
                <div class="w-100"></div>
                <div class="col p-3 border bg-light"$estado_color ><h5><i class="bi bi-diamond-fill"></i><b> Estado:</b> $estado</h5></div>
                <div class="col p-3 border bg-light"><h5><i class="bi bi-building"></i><b> Area Empresa:</b> $AreaEmpresa</h5></div>
                <div class="w-100"></div>
                <div class="col p-3 border bg-light"><h5><i class="bi bi-file-earmark-person-fill"></i><b> Cargo Solicitado:</b> $CargoSolicitado</h5></div>
                <div class="col p-3 border bg-light"><h5><i class="bi bi-file-earmark-text"></i><b> Tipo Contratacion:</b> $TipoContratacion</h5></div>
                <div class="w-100"></div>
                <div class="col p-3 border bg-light"><h5><i class="bi bi-journal-text"></i><b>Educación Minima:</b> $EducacionMinima</h5></div>
                <div class="col p-3 border bg-light"><h5><i class="bi bi-menu-button-wide-fill"></i><b> Nivel Experencia:</b> $NivelExperencia</h5></div> 
                <div class="w-100"></div>
                <div class="col p-3 border bg-light"><h5><i class="bi bi-sort-numeric-down"></i><b> Edad:</b> $Edad</h5></div>
                <div class="col p-3 border bg-light"><h5><i class="bi bi-currency-dollar"></i><b> Salario Minimo y Maximo:</b> $SalarioMin - $SalarioMax</h5></div>
                
    tabla;
    echo $OfertaEmpresa;

    $NumeroFila = $NumeroFila + 1;
}

    if(isset($_POST['Eliminar'])) {
            echo "This is Button1 that is selected";
            echo $EmpresaID;
            echo $IdDetallesOferta;
            $BorrarOfertas = "DELETE FROM ofertas WHERE ofertas.IdEmpresa = '$EmpresaID'";
            $BorrarDofertas = "DELETE FROM detallesoferta WHERE detallesoferta.IdDetallesOferta = '$IdDetallesOferta'";

            $objeto = $BDD_DSS->query($BorrarOfertas);
            $objetoD = $BDD_DSS->query($BorrarDofertas);

            if ($objeto == TRUE){

                echo "Se borro";
                header("location:../table.ver_ofertas.php");
                if($objetoD == TRUE){
                    header("location:../table.ver_ofertas.php");
                }
            }else{
        
                echo "Error";
                
            }
        }
    if(isset($_POST['Cancelar'])) {
            echo "This is Button2 that is selected";
            header("location:../table.ver_ofertas.php");
        }

?>    
            <div class="w-100"></div>
                <form method="post">
                    <div class="p-3 d-grid gap-2 border bg-light">
                    <input class='btn btn-danger' type="submit" name="Eliminar" value="Eliminar"/>
                        <input class="btn btn-dark btn-block" type="submit" name="Cancelar" value="Cancelar"/>
                    </div> 
                </form>             
            </div>
            <br>
</div>