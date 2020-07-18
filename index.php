<?php
    session_start();
    error_reporting(0);
    $sss = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bio_Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' media='screen' href="stylo\style.css">
    <script src='function.js'></script>
</head>
<body class="indexbody">
    <div class="card cardlog">
        <div >
            <div style="float: right;">
                <?php if($sss != null || $sss != '') { ?>
                    <a href="views/feedback.php">
                        <center><img src="img\img1.png"><br></center>
                        <h5 style="text-align: center; color:#1f8535">Ya hay una <br> sesión iniciada</h5>
                    </a>
                <?php }else{?> 
                    <img src="img\img1.png"> 
                <?php }?>
            </div>
            <h2 style="color:#1f8535">Bienvenido</h2><br>
            <h5 style="color:#314634">Escoja una opción.</h5>
        </div>
        <a href="views\up.php" class="anone"><input class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="button" value="Registrarse"></a>
        <a href="views\in.php"><input class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="button" value="Iniciar Sesión"></a>
    </div>
</body>
</html>