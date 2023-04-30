<?php

    $host = "localhost";
    $usuario = "root";
    $contraseña = "";
    $baseDeDatos = "mygeeklist";

    $conn = mysqli_connect($host,$usuario,$contraseña,$baseDeDatos);

    $correo = $_POST['nombre'];
    $contrasena = $_POST['contraseña'];

    $query = mysqli_query($conn,"SELECT * FROM usuarios WHERE nombre = '$correo' and contraseña = '$contrasena'");
    $nr = mysqli_num_rows($query);
    
    if($nr == 1){

        header("Location: indexlogin.html");
        //echo "Bienvenido: " .$correo;
    
    }else if($nr == 0){

        echo "no ingreso";
    }
?>