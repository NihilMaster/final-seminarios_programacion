<?php echo "hola"; ?>
<!--?php
    session_start();
    $usr="";
    if (($fp = fopen("../critical/session.log", "r")) !== FALSE) {
        while (($datos = fgetc($fp)) !== FALSE) {
            $usr=$datos;
        }
        fclose($fp);
    }
    $_SESSION['usuario']=$usr

?>
<header class="indexbar">
    <div class="container"> 
        <div class="row">
            <div class="md-1">
                <h3>Bio-Tech</h3>
            </div>
            <div class="md-10 mx-auto">
                <button>
                    <a href="../index.php"><img src="../img/trash/mñeh.png"></a>
                </button>
            </div>
            <div class="md-1">
                <label>usr: <!?php echo $_SESSION['usuario'] ?></label>
                <img class="imgperf" src="../img/user.png">
            </div>
        </div> 
     </div>
</header> -->

<!--?php $_SESSION['usuario'] ?-->