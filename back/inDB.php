<?php
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    #$sSQL = "SELECT u.nombre FROM usuario U WHERE u.usuario='"+ usuario + "' AND u.contrasena='" + contrasena + "'";

    $contraCRYPT=md5($pass);

    $mysqlires = new mysqli('localhost', 'root', '', 'bio_tech');
    $query = $mysqlires -> query("SELECT * FROM bio_log");
    while ($cuenta = mysqli_fetch_array($query)) {
        if($cuenta['usuario']==$user){
            if ($cuenta['contraseña']==$contraCRYPT) {
                $_SESSION['usuario'] = $cuenta['usuario'];
                echo '<script type="text/javascript">
                        console.log("'.$user.' '.$pass.'");
                        console.log("'.$cuenta['usuario'].' '.$cuenta['contraseña'].'");
                        location.href="../views/feedback.php";
                    </script>';
                break;
            }else{
                echo '<script type="text/javascript">
                        alert("El usuario o la contraseña no son correctos. Por favor intente de nuevo.");
                        location.href="../views/in.php";
                    </script>';
            }
        }
    }
    echo '<script type="text/javascript">
                    alert("El usuario o la contraseña no son correctos. Por favor intente de nuevo.");
                    location.href="../views/in.php";
                </script>';
?>