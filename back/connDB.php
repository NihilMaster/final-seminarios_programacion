<?php

    $connDB = new mysqli('localhost','root','','bio_tech');

    if($connDB){
#        echo "Conectado ";
        /* echo'<script type="text/javascript">
                    console.log("ConectadoDB: bio_tech");
            </script>'; 
Lo comenté porque al incluirlo en un archivo llamado por Ajax, el resultado obtenido en Ajax contenía todo este echo.*/
    }else{
        echo "No conectado ";
    }

?>