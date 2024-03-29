<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR OFERTA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
    session_start();
    //para que no muestre errores con el php
    error_reporting(0);
    //que la pagina actual solo la vea el que ha valido la sesion con usuario y contraseña
    $varsesion = $_SESSION['usuario'];
    if($varsesion == null || $varsesion ==''){
        echo "Usted no puede estar aqui";
        die(); 
    }    
?>
<body>
    <form method="post">
        <div class="container">
            <h1 class=" text-center alert-primary">DATOS DE LA OFERTA</h1>
            <br>
            <label class="alert-primary">Nombre Oferta: </label>
            <input type="text" name="NombreOferta" id="NombreOferta" class="form-control" placeholder="Ingeniería de sistemas" minlength="5" maxlength="30" required>

            <br>
            <label class="alert-primary">Descripción: </label>
            <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Ingrese descripción de la Ofertas" required></textarea>
     
            <br>
            <label class="alert-primary">Estado:</label>
            <select id="Estado" name="Estado" class="form-control">
                <option value="1">DISPONIBLES</option>
                <option value="0">NO DISPONIBLES</option>
            </select>

            <br>
            <label class="alert-primary">Area Empresa:</label>
            <input type="text" name="AreaEmpresa" id="AreaEmpresa" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" required>

            <br>
            <label class="alert-primary">Cargo Solicitado:</label>
            <input type="text" name="CargoSolicitado" id="CargoSolicitado" class="form-control" placeholder="Asistente Contable, Cocinero, etc." minlength="5" maxlength="40" required>  
            
            <br>
            <label class="alert-primary">TipoContratacion :</label>
            <input type="text" name="TipoContratacion" id="TipoContratacion" class="form-control" placeholder="Tiempo Completo" minlength="5" maxlength="15" required>  

            <br>
            <label class="alert-primary">Educación Minima :</label>
            <input type="text" class="form-control" id="EducacionMinima" name="EducacionMinima" placeholder="Bachillerato" minlength="5" maxlength="15" required>

            <br>
            <label class="alert-primary">Nivel Experencia:</label>
            <input type="text" class="form-control" id="NivelExperencia" name="NivelExperencia" placeholder="sin experiencia" minlength="5" maxlength="30" required>
                        
            <br>
            <label class="alert-primary">Edad:</label>
            <input type="numeric" class="form-control" id="Edad" name="Edad" placeholder="0" min="18" max="100" required>

            <br>
            <label class="alert-primary">Salario Minimo:</label>
            <input type="numeric" class="form-control" id="SalarioMin" name="SalarioMin" placeholder="$" min="0" max="1000" required>

            <br>
            <label class="alert-primary">Salario Maximo:</label>
            <input type="numeric" class="form-control" id="SalarioMax" name="SalarioMax" placeholder="$" min="0" max="1000" required>

            <br>
            <input class='btn btn-primary btn-block' type="submit" name="guardarOferta" value="GUARDAR OFERTA"/>
            
        </div>
    </form>
<?php

if(isset($_POST['guardarOferta'])) {
    include_once("../../../../Funciones/conexión/BDD.php");

    $NombreOferta = $_POST['NombreOferta'];
    $Descripcion =$_POST['descripcion'];
    $Estado = $_POST['Estado'];

    $EmpresaUsuario = $_SESSION['usuario'];
        
    $AreaEmpresa = $_POST['AreaEmpresa'];
    $CargoSolicitado = $_POST['CargoSolicitado'];
    $TipoContratacion = $_POST['TipoContratacion'];
    $EducacionMinima = $_POST['EducacionMinima'];
    $NivelExperencia = $_POST['NivelExperencia'];
    $Edad = $_POST['Edad'];
    $SalarioMin = $_POST['SalarioMin'];
    $SalarioMax = $_POST['SalarioMax'];

    //ULTIMA OFERTA
    $UltimaOferta = "SELECT* FROM ofertas ORDER BY ofertas.IdOferta DESC LIMIT 1";
    $OfertaUltima = $BDD_DSS->query($UltimaOferta);
    $fila = $OfertaUltima->fetch_assoc();

    $idUltimaOferta = $fila['IdOferta'];
    //incremento
    $numeroID = substr($idUltimaOferta, -3);
    $numeroID = $numeroID + 1;
    $letrasOfertas = 'OFE'.$numeroID;
    $letrasDetallesOfertas = 'DOF'.$numeroID;
    
    //empresacreation
    $EmpresaId = "SELECT* FROM ofertas ORDER BY ofertas.IdOferta DESC LIMIT 1";
    $CopnsultaEmpresaId = $BDD_DSS->query($EmpresaId);
    $filaConsulta = $CopnsultaEmpresaId->fetch_assoc();

    $xd s

    $idempresa = 10001;
            //xd
    echo $letrasOfertas;

    $IngresardatosOfertaDetalles = "INSERT INTO detallesoferta(IdDetallesOferta, AreaEmpresa, CargoSolicitado, TipoContratacion, EducacionMinima, NivelExperencia, Edad, SalarioMin, SalarioMax) VALUES
    ('$letrasDetallesOfertas','$AreaEmpresa','$CargoSolicitado','$TipoContratacion','$EducacionMinima','$NivelExperencia','$Edad','$SalarioMin','$SalarioMax')";

    $IngresardatosOferta = "INSERT INTO ofertas(IdOferta, NombreOferta, Descripcion, Estado, IdEmpresa, IdDetallesOferta) 
    VALUES ('$letrasOfertas','$NombreOferta','$Descripcion','$Estado','$idempresa','$letrasDetallesOfertas')";

    $datosDetalles = $BDD_DSS->query($IngresardatosOfertaDetalles);
    $datosOfertas = $BDD_DSS->query($IngresardatosOferta);
            
    if ($datosOfertas == TRUE){
        echo 'La oferta: ' . $NombreOferta . ' a sido guardado';
        header("location:../table.ver_ofertas.php");    
    }
    else{
        echo "Error: " . $sql . "<br>" . $BDD_DSS->error;
    }

    
}

?>
</html>