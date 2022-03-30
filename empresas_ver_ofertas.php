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

 require_once('pages\mod\header.php');
?>
  <body>
    <?php
        require_once('pages\mod\menu.php');
    ?>
    <?php
        require_once('pages\empresas\ofertas\table.ver_ofertas.php');
    ?>
  </body>
</html>