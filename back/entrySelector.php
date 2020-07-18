<?php 
    
    $var = $_POST['n'];

    include("connDB.php");
    $query1 = "SELECT especie FROM bio_plant WHERE nombre = '".$var."'";
    $result1 = $connDB->query($query1);

    $query2 = "SELECT genero FROM bio_plant WHERE nombre = '".$var."'";
    $result2 = $connDB->query($query2);

    $query3 = "SELECT familia FROM bio_plant WHERE nombre = '".$var."'";
    $result3 = $connDB->query($query3);

    if(!$result1 || !$result2 || !$result3){
        echo "ERROR|";
    }

    while($r = $result1->fetch_assoc()) {
        echo "~";
        echo $r['especie']."|";;
    }

    while($r = $result2->fetch_assoc()) {
        echo "@";
        echo $r['genero']."|";;
    }

    while($r = $result3->fetch_assoc()) {
        echo "°";
        echo $r['familia']."|";;
    }


    
?>