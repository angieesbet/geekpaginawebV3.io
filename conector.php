<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "mygeeklist";

    $enlace = mysqli_connect ($servidor,$usuario,$clave,$baseDeDatos);

    if(isset($_POST['registro'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        
        $insertarDatos = "INSERT INTO usuarios VALUES('','$nombre','$correo','$contraseña')";
    
        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
    }

?>  