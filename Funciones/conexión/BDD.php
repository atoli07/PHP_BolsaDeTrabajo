<?php
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBDATA", "bolsatrabajo");

$BDD_DSS = new mysqli(DBHOST, DBUSER, DBPASS, DBDATA);

if($BDD_DSS->connect_errno){
 die("No se ha podido conectar a MySQL: (" . $db->connect_errno . ")" . $db->connect_error);
}

$BDD_DSS->set_charset("utf8");
?>