<?php
    session_start();
    $sss = $_SESSION['usuario'];
?>
<html>
<header class="indexbar" style="background-color: rgba(0, 0, 0, 0.46);">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' media='screen' href="..\stylo\style.css">
    <title>Perfil</title>
    <div class="container"> 
        <div class="row">
            <div class="md-1">
                <a href="about.php" style="color:whitesmoke"><h3>Bio-Tech</h3></a>
            </div>
            <div class="md-10 mx-auto">
                <button style="background-color: transparent; outline:none; border:none;">
                    <a href="../index.php"><img style="outline:none; border:none;" src="../img/home.png"></a>
                </button>
            </div>
            <div class="md-1">
                <?php if($sss != null || $sss != '') { ?>
                <label style="color:whitesmoke"><?php echo $_SESSION['usuario'] ?></label>
                <a href="../views/feedback.php"><img class="imgperf" src="../img/user.png"></a>
                <?php }else{ echo '<script type="text/javascript">
                        alert("Por favor inicie sesión primero.");
                        location.href="../views/in.php";
                    </script>'; }?>
            </div>
        </div> 
     </div>
</header>
<body class="profilebody">
    <div class="card cardprofile">
        <a href="feedback.php">
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 buttonprofile" type="button">Inicio</button>
        </a>
        <?php
            include("../back/connDB.php");

            $query = $connDB->query("SELECT `correo`, `nombre`, `usuario` FROM `bio_log` WHERE `usuario` = '$sss'");
            while ($cuentas = mysqli_fetch_array($query)) {
                echo '<div class="card cardprofile" style="padding:10px; color:#ffffff"> 
                        <label>Nombre: '.$cuentas['nombre'].'</label><br>
                        <label>Usuario: '.$cuentas['usuario'].'</label><br>
                        <label>Correo: '.$cuentas['correo'].'</label>
                    </div>';
                echo'<script type="text/javascript">
                        console.log("Profile: '.$cuentas['usuario'].'");
                    </script>';
            }
        ?> 

        <a href="../back/out.php">
            <input class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 buttonprofile" type="button" value="Cerrar sesión.">
        </a>
    </div>
</body>
</html>