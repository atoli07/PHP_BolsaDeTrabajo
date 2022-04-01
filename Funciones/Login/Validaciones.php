<?php


//Recibir datos del formulario
$usuario= isset($_POST['correo']) ? $_POST['correo'] : "";
$contraseña = isset($_POST['contra']) ? $_POST['contra'] : "";


//Comprobamos que en el boton del formulario se reciba informacion
if (isset($_POST['ingresar'])) {
    //Hacer la conexion a la base de datos
    $conexion= mysqli_connect("localhost","root","","bolsatrabajo");

    //Aqui validamos el usuario natural
    $consulta="select * from usuarios where Correo = '$usuario' and Contra = '$contraseña'";
    $resultado=mysqli_query($conexion, $consulta);
    
    $filas=mysqli_num_rows($resultado);

    //Aqui comprobamos si la variable fila tiene un dato y ese dato es diferente de cero que ejecute el siguente ciclo para redirigirlos a su pagina correspondiente
        if($filas>0){
           //Inicio la variable session_start
            session_start();
          //Aqui redirigimos hacia el archivo de la pagina principal del usuario 
          $_SESSION['usuario'] = $usuario;
          $_SESSION['contraseña'] = $contraseña;
          header("location:./../../usuarios_index.php");
        
        } else {
            //Si se llego hasta aqui es porque no se reconocio a un usuario natural y ahora lo intentara con una cuenta de empresa  
            $consulta="select * from empresas where Correo = '$usuario' and Contra = '$contraseña'";
            
            $resultado=mysqli_query($conexion, $consulta);
            $filas=mysqli_num_rows($resultado);
            if($filas>0){
                           //Inicio la variable session_start
                          session_start();
                //Aqui redirigimos hacia el archivo de la pagina principal del usuario 
                $_SESSION['usuario'] = $usuario;
                $_SESSION['contraseña'] = $contraseña;
                header("location:./../../empresas_ver_ofertas.php");
                }else {
                     echo "Error en la autentificacion";
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




   

