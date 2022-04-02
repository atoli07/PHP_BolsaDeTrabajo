<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <section>
        <article>
            <form method="post">
                <fieldset>
                    <legend></legend>
                    <div class="container">
                        <!-- Datos personales -->
                
                        <!-- NOMBRE OFERTA -->
                        <h1 class=" text-center alert-primary">DATOS PERSONALES</h1>
                        <br>
                        <label class="alert-primary">Nombre Oferta: </label>
                        <input type="text" name="NombreOferta" id="NombreOferta" class="form-control" placeholder="Ingeniería de sistemas" minlength="5" maxlength="30" required>
                        <!-- pattern="[a-zA-Z]+" -->

                        <!-- DESCRIPCIÓN -->
                        <br>
                        <label class="alert-primary">Descripción: </label>
                        <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Ingrese descripción de la Ofertas" required></textarea>
                        
                        <!-- ESTADO -->
                        <br>
                        <label class="alert-primary">Estado:</label>
                        <select id="Estado" name="Estado" class="form-control">
                            <option value="1">DISPONIBLES</option>
                            <option value="0">NO DISPONIBLES</option>
                        </select>

                        <!-- AREA EMPRESA-->
                        <br>
                        <label class="alert-primary">Area Empresa:</label>
                        <input type="text" name="AreaEmpresa" id="AreaEmpresa" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" >
                        
                        <!-- CargoSolicitado -->
                        <br>
                        <label class="alert-primary">Cargo Solicitado:</label>
                        <input type="text" name="CargoSolicitado" id="CargoSolicitado" class="form-control" placeholder="Asistente Contable, Cocinero, etc." minlength="5" maxlength="40" >  
                        
                        <!-- TipoContratacion -->
                        <br>
                        <label class="alert-primary">TipoContratacion :</label>
                        <input type="text" name="TipoContratacion" id="TipoContratacion" class="form-control" placeholder="Tiempo Completo" minlength="5" maxlength="15" >  

                        <!-- EducacionMinima -->
                        <br>
                        <label class="alert-primary">Educación Minima :</label>
                        <input type="text" class="form-control" id="EducacionMinima" name="EducacionMinima" placeholder="Bachillerato" minlength="5" maxlength="15" >

                        <!-- NivelExperencia -->
                        <br>
                        <label class="alert-primary">Nivel Experencia:</label>
                        <input type="text" class="form-control" id="NivelExperencia" name="NivelExperencia" placeholder="sin experiencia" minlength="5" maxlength="30" >
                        
                        <!-- Edad -->
                        <br>
                        <label class="alert-primary">Edad:</label>
                        <input type="numeric" class="form-control" id="Edad" name="Edad" placeholder="0" min="18" max="100" >

                        <br>
                        <label class="alert-primary">Salario Minimo:</label>
                        <input type="numeric" class="form-control" id="SalarioMin" name="SalarioMin" placeholder="$" min="0" max="1000" >

                        <br>
                        <label class="alert-primary">Salario Maximo:</label>
                        <input type="numeric" class="form-control" id="SalarioMax" name="SalarioMax" placeholder="$" min="0" max="1000" >

                        <br>
                        <input class='btn btn-primary btn-block' type="submit" name="guardarOferta" value="guardarOferta"/>
                    </div>
                </div>
                    
                </fieldset>
            </form>
        </article>
    </section>
    <br>
    <br>
    </body>
</html>
<?php
if(isset($_POST['guardarOferta'])) {
            include_once("../../../../Funciones/conexión/BDD.php");

            $NombreOferta = $_POST['NombreOferta'];
            $Descripcion =$_POST['descripcion'];
            $Estado = $_POST['Estado'];
        
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
            $letrasDetallesOfertas = 'DOF009'; //'DOF'.$numeroID;
            //empresacreation
            $idempresa = 10001;

            echo $letrasOfertas;

            $Ingresardatos = "INSERT INTO ofertas(IdOferta, NombreOferta, Descripcion, Estado, IdEmpresa, IdDetallesOferta) 
            VALUES ('$letrasOfertas','$NombreOferta','$Descripcion','$Estado','$idempresa','$letrasDetallesOfertas')";

            $datosingresados = $BDD_DSS->query($Ingresardatos);

            if ($datosingresados == TRUE){
                echo 'funciona';
            }
            else{echo "Error: " . $sql . "<br>" . $BDD_DSS->error; ;}


            
            echo $letrasOfertas . $NombreOferta . $Descripcion . $Estado . $idempresa . $letrasDetallesOfertas;        
            // $BorrarDofertas = "DELETE FROM detallesoferta WHERE detallesoferta.IdDetallesOferta = '$IdDetallesOferta'";

            // $objeto = $BDD_DSS->query($BorrarOfertas);
            // $objetoD = $BDD_DSS->query($BorrarDofertas);

            // if ($objeto == TRUE){

            //     echo "Se borro";
            //     header("location:../table.ver_ofertas.php");
            //     if($objetoD == TRUE){
            //         header("location:../table.ver_ofertas.php");
            //     }

        }

?>