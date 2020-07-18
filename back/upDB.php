<?php

    include("connDB.php");
    $correo = $_POST['correo'];
    $contra = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['user'];

    #echo $correo." ".$contra." ".$nombre." ".$usuario." ".$genero;

    $contraCRYPT=md5($contra);

    $query = "INSERT INTO bio_log (correo, contraseña, nombre, usuario) VALUES ('$correo', '$contraCRYPT', '$nombre', '$usuario')";
    $res = $connDB->query($query);

    if($res){
        echo '<script type="text/javascript">
                alert("Registrado exitosamente!1!!");
                window.location.href="../index.php";
                console.log("Registrado");
            </script>';
    }else{
        echo '<script type="text/javascript">
                alert("Ah ocurrido un error inesperado. No se ha registrado");
            </script>';
    }

?>