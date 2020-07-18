<?php
    session_start();
    $sss = $_SESSION['usuario'];
?>
<html>
<header class="indexbar">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' media='screen' href="..\stylo\style.css">
    <title>Sing up/in</title>
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
                <?php if($sss != null || $sss != '') { ?>
                <label><?php echo $_SESSION['usuario'] ?></label>
                <a href="../views/profile.php"><img class="imgperf" src="../img/user.png"></a>
                <?php }else{ echo '<script type="text/javascript">
                        alert("Por favor inicie sesión primero.");
                        location.href="../views/in.php";
                    </script>'; }?>
            </div>
        </div> 
     </div>
</header>
<body class="feedbody">
    <div class="card masterfeedcard">
        <a href="entryplant.php">
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="button"><img src="../img/add.png">  Nueva entrada  <img src="../img/add.png"></button>
        </a>
        <?php
            include("../back/connDB.php");
            $query = $connDB->query("SELECT * FROM bio_plant");
            $vardeck=3;
            while ($planta = mysqli_fetch_array($query)) {
                if($vardeck==3){
                    echo'<div class="card-deck">';
                }
                echo'<div class="card cardplant border-success" id="cardp'.$planta['id'].'">
                        <button class="btn-imgcardplant">
                            <img class="imgcardplant" src="'.$planta['foto'].'">
                        </button>
                        <div class="card-body text-success">
                            <p><h2>'.$planta['nombre'].'</h2></p>
                            <label>'.$planta['especie'].'</label><br>
                            <label>'.$planta['genero'].'</label><br>
                            <label>'.$planta['familia'].'</label>
                        </div>
                    </div>';
                $vardeck-=1;
                if($vardeck==0){
                    echo'</div><br>';
                    $vardeck=3;
                }
                echo'<script type="text/javascript">
                        console.log("'.$planta['nombre'].'");
                    </script>';
            }
            if($vardeck!=3){
                echo'</div>';
            }
        ?> 
        <a href="../back/out.php">
            <input class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="button" value="Cerrar sesión.">
        </a>
    </div>
    <br>
</body>
</html>
                    