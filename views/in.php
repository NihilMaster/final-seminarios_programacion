<?php
    session_start();
    ///////////////////////////
    error_reporting(0);
    ///////////////////////////
    $sss = $_SESSION['usuario'];
    if($sss != null || $sss != '') {
        echo'<script type="text/javascript">
                alert("Ya hay una sesión iniciada.");
                location.href="../views/feedback.php";
            </script>';
        die();
    }
?>
<html>
<header class="indexbar">
    <meta charset='utf-8'>  
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' media='screen' href="..\stylo\style.css">
    <title>Sing up/in</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <div class="container"> 
        <div class="row">
            <div class="md-1">
                <a href="about.php" style="color: black;"><h3>Bio-Tech</h3></a>
            </div>
            <div class="md-10 mx-auto">
                <button style="background-color: transparent; outline:none; border:none;">
                    <a href="../index.php"><img style="outline:none; border:none;" src="../img/home.png"></a>
                </button>
            </div>
            <div class="md-1">
                <label>Usuario</label>
                <img class="imgperf" src="../img/userout.png">
            </div>
        </div> 
    </div>
</header>
<body class="indexbody">
    <div class="card text-monospace cardupin">
        <h1 class="text-center">Inicio de sesión</h1>
        <form action="../back/inDB.php" method="POST">
            <div class="form-group">
                <label>Usuario</label>
                <input type="namespace" class="form-control" name="user" autocomplete="on" required>
                <small style="color:#67946c;" id="userHelp" class="form-text">Diferencia mayúsculas y minúsculas.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="pass" required>
            </div>
            <button type="submit" class="btn btn-dark">Entrar</button>
        </form>
    </div>
</body>
</html>

<!--?php if($sss != null || $sss != '') { ?>
                <label>usr: <!?php echo $_SESSION['usuario'] ?></label>
                <a href="../views/feedback.php"><img class="imgperf" src="../img/user.png"></a>
                <!?php }else{?-->