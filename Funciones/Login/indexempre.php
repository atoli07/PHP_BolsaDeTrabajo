<?php
//Inicio session con la variable SESSION START
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
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="uft-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ver Ofertas</title>
    </head>
    <body>
        <h1> Panel de pruebas d Samuel actualmente eres una empresa</h1>
        <h2> Bienvenido: <?php echo $_SESSION['usuario']?></h2>
        <a href="CerrarSesion.php"> Cerrar Sesion</a>
    </body>
    </html>