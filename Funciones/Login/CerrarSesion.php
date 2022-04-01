<?php
//Abro y cierro sesion y lo dirigo a la pagina del formulario principal
    session_start();
    session_destroy();
    header("Location:./../../index.php");
?>