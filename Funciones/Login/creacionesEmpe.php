<?php


//Recibir datos del formulario
$nombre = isset($_POST['nombre_empresa']) ? $_POST['nombre_empresa'] : "";
$usuario= isset($_POST['correo']) ? $_POST['correo'] : "";
$contraseña = isset($_POST['contra']) ? $_POST['contra'] : "";



//Comprobamos que en el boton del formulario se reciba informacion
if (isset($_POST['ingresar'])) {

    //Hacer la conexion a la base de datos
    $conexion= mysqli_connect("localhost","root","","bolsatrabajo");

    //Aqui validamos si ya existe esa cuenta dentro de la tabla de usurios naturales para evitar errores
    $consulta="select * from empresas where Correo = '$usuario' and Contra = '$contraseña'";
    $resultado=mysqli_query($conexion, $consulta);
    
    $filas=mysqli_num_rows($resultado);

    //Aqui comprobamos si la variable fila tiene un dato y si ese dato es mayor a cero significa que ya existia una cuenta asociada 
        if($filas>0){
            header("location:CreadoError.php");      
        } else {
            //Si se llego hasta aqui es porque no se reconocio a un usuario natural y ahora lo intentara con una cuenta de empresa anteriormente creada 
            $consulta="select * from empresas where Correo = '$usuario' and Contra = '$contraseña'";
            
            $resultado=mysqli_query($conexion, $consulta);
            $filas=mysqli_num_rows($resultado);
            if($filas>0){
                header("location:CreadoError.php");  
                }else {
                        //Aqui luego de comprobar que no existia antes, se insertan los datos en la tabla
                        $insertar="INSERT INTO empresas (IdEmpresa, NombreEmpresa, Correo, Contra, url_logo) VALUES (NULL, '$nombre', '$usuario', '$contraseña', '')";
                        $resultado=mysqli_query($conexion, $insertar);
                                                   //Inicio la variable session_start
                                                   session_start();
                                                   //Aqui redirigimos hacia el archivo de la pagina principal de la empresas  
                                                   $_SESSION['usuario'] = $usuario;
                                                   $_SESSION['contraseña'] = $contraseña;
                                                   header("location:./../../empresas_ver_ofertas.php");
                    }
                }
//Cerrando y liberando la informacion recogida de la base de datos 

mysqli_Close($conexion);
}   else{
    $str = <<<RESP
    <h3>No ha ingresado datos personales. No se puede generar PDF</h3>
    <p>Para ingresar los datos de clic <a href="index.html">aquí</a></p>
RESP;
    echo $str;
}
?>




   

