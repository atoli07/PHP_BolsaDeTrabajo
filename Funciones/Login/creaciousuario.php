<?php

//Recibimos datos del formulario ingresado por el usuario 
$usuario= isset($_POST['correo']) ? $_POST['correo'] : "";
$contraseña = isset($_POST['contra']) ? $_POST['contra'] : "";
$nombre = isset($_POST['nombres']) ? $_POST['nombres'] : "";
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : "";
$edad = isset($_POST['edad']) ? $_POST['edad'] : "";
$genero = isset($_POST['genero']) ? $_POST['genero'] : "";
$departamento = isset($_POST['departamento']) ? $_POST['departamento'] : "";

if (isset($_POST['crear'])) {

        //Hacer la conexion a la base de datos
        $conexion= mysqli_connect("localhost","root","","bolsatrabajo");
        //Aqui validamos si ya existe esa cuenta dentro de la tabla de usurios naturales para evitar errores
        $consulta="select * from empresas where Correo = '$usuario' and Contra = '$contraseña'";
        $resultado=mysqli_query($conexion, $consulta);
        $filas=mysqli_num_rows($resultado);
            //Aqui comprobamos si la variable fila tiene un dato y si ese dato es mayor a cero significa que ya existia una cuenta asociada 
            if($filas>0){
                header("location:CreadoError.php");  	
            }else{
                //vuelvelo a intentar bro
                //Si se llego hasta aqui es porque no se reconocio a un usuario natural y ahora lo intentara con una cuenta de empresa anteriormente creada 
                $consulta="select * from usuarios where Correo = '$usuario' and Contra = '$contraseña'";
                $resultado=mysqli_query($conexion, $consulta);
                $filas=mysqli_num_rows($resultado);
                if($filas>0){
                    header("location:CreadoError.php");  	
                }else{
                          //Aqui luego de comprobar que no existia antes, se insertan los datos en la tabla
                          $insertardireccion="INSERT INTO direcciones (IdDireccion, Colonia, Calle, Municipio, Departamento) VALUES (NULL, NULL, NULL, NULL, '$departamento');";
                          $insertardatospersonales="INSERT INTO datospersonales (IdDatosPersonales, Nombres, Apellidos, Edad, Genero, IdDireccion) VALUES ('5', '$nombre', '$apellidos', '$edad', '$genero', NULL);";
                          $insertarusuario="INSERT INTO usuarios (IdUsuario, Correo, Contra, IdDatosPersonales) VALUES (NULL, '$usuario', '$contraseña', NULL);";
                          $resultado=mysqli_query($conexion, $insertardireccion);
                          $resultado1=mysqli_query($conexion, $insertardatospersonales);
                          $resultado2=mysqli_query($conexion, $insertarusuario);
                           //Inicio la variable session_start
                           session_start();
                            //Aqui redirigimos hacia el archivo de la pagina principal de la empresas  
                            $_SESSION['usuario'] = $usuario;
                            $_SESSION['contraseña'] = $contraseña;
                            header("location:./../../usuarios_index.php");

                }

            }

} 

else{
    echo "No creo que esto se active pero por cualquier cosa";
}




?>