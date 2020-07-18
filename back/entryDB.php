<?php
    var_dump ($_POST);
    var_dump ($_FILES);

    include("connDB.php");
    $nom = $_POST['nombre'];
    $esp = $_POST['especie'];
    $gen = $_POST['genero'];
    $fam = $_POST['familia'];
    $fch = $_POST['fecha'];
    $hab = $_POST['habitat'];
    $prt = $_POST['parte'];
    $usr = $_POST['usuario'];

    
    $ruta_guardar_archivo = "../img/plantasup/" . "pic".date("dHis") .".". pathinfo($_FILES["pic"]["name"],PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["pic"]["tmp_name"],$ruta_guardar_archivo);
    $query = "INSERT INTO bio_plant(nombre, especie, genero, familia, fecha, habitat, parte, foto, usuario) VALUES ('$nom','$esp','$gen','$fam','$fch','$hab','$prt','$ruta_guardar_archivo','$usr')";
    $res = $connDB->query($query);

    echo $nom.";".$esp.";".$gen.";".$fam.";".$fch.";".$hab.";".$prt.";".$ruta_guardar_archivo.";".$usr;
    
?>

<!-- INSERT INTO bio_plant( nombre, especie, genero, familia, fecha, habitat, parte, foto, usuario ) VALUES( 'Helecho', 'a', 'a', 'a', '2020-07-18', 'Pantano', 'Completa', '../img/plantasup/pic18154556.jpg', 'M' ) -->