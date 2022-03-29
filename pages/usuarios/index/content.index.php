<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP INICIO</title>

    <!-- <link href="estilo/estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="icons/css/all.css" rel="stylesheet"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <div class="container">
        
            <h2>ÚLTIMAS OFERTAS PUBLICADAS</h2>

<?php

$contador = 2;
$contador2 = 1;

include_once("Funciones/conexión/BDD.php");

// $SQL = "SELECT* FROM ofertas JOIN empresas ON ofertas.IdEmpresa = empresas.IdEmpresa";
$SQL = "SELECT ofertas.NombreOferta, empresas.NombreEmpresa, detallesoferta.AreaEmpresa, ofertas.Estado, detallesoferta.NivelExperencia, empresas.url_logo
        FROM ofertas JOIN empresas on ofertas.IdEmpresa = empresas.IdEmpresa
        JOIN detallesoferta on ofertas.IdDetallesOferta = detallesoferta.IdDetallesOferta";
$objeto = $BDD_DSS->query($SQL);

    while($fila = $objeto->fetch_assoc()){
        //DIV 01
        if($contador == 2){
                
            $divabertura = <<<div1
            <div class="row">
            div1;
            echo $divabertura;
            $contador = 0;
           }
        //Principal - ofertas
        $NombreOferta = $fila['NombreOferta'];
        $NombreEmpresa = $fila['NombreEmpresa'];
        $Area = $fila['AreaEmpresa'];
        $Experiencia = $fila['NivelExperencia'];

        $ruta = 'IMG/';
        $logo = $ruta. $fila['url_logo'];
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


        $ofertas = <<<estructuraOfertas
                    <div class="container p-1 my-1 bg-light col-sm-5 border-start border-secondary border-3">
                        <div class="row container">
                            <h4 class="bg-outline-dark btn-lg"><i class="bi-clipboard-check"></i> $NombreOferta</h4>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="$logo" class="img-thumbnail" alt="xd">
                            </div>
                            <div class="col-8">
                                <h6><i class="fa-solid fa-building-circle-check"></i><b> Empresa: </b>$NombreEmpresa</h6>
                                <h6><i class="fa-brands fa-creative-commons-by"></i><b> Area: </b>$Area</h6>
                                <h6 $estado_color><i class="fa-solid fa-circle-dot"></i><b> Estado: </b>$estado</h6>
                                <h6><i class="fa-solid fa-file-circle-check"></i><b> Experiencia: </b>$Experiencia</h6>
                            </div>
                        </div>
                        <div class="row container">
                            <button class="btn btn-success btn-md"><i class="fa-solid fa-file-circle-check"></i><b> Experiencia: </b>$Experiencia</button>
                        </div>

                        

                        </div>
                estructuraOfertas;
         echo $ofertas;
        
         //DIV 2
        if($contador2 == 2){
            $divabertura = <<<div1
            <p></p>
            </div>
            div1;
            echo $divabertura;
            $contador2 = 0;
           }

            $contador++;
            $contador2++;
    
    }