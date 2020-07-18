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
                <a href="about.php" style="color: black;">
                    <h3>Bio-Tech</h3>
                </a>
            </div>
            <div class="md-10 mx-auto">
                <button style="background-color: transparent; outline:none; border:none;">
                    <a href="../index.php"><img style="outline:none; border:none;" src="../img/home.png"></a>
                </button>
            </div>
            <div class="md-1">
                <?php if ($sss != null || $sss != '') { ?>
                    <label><?php echo $_SESSION['usuario'] ?></label>
                    <a href="../views/profile.php"><img class="imgperf" src="../img/user.png"></a>
                <?php } else {
                    echo '<script type="text/javascript">
                        alert("Por favor inicie sesión primero.");
                        location.href="../views/in.php";
                    </script>';
                } ?>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="card masterfeedcard" class="text-success" id="formEntry">
        <h3>Información de la planta</h3>

        <div class="input-group row" style="padding: 10px;">
            <label class="md-1" style="padding-right: 10px;">Nombre</label>
            <input class="col" type="text" id="nombre" name="nombre" onchange="restoreSELECT();" required>
            <div class="input-group-append">
                <button class="btn btn-dark" type="button" onclick="selectDB();">✔</button>
            </div>
        </div>


        <div class="row" style="padding: 10px;"><!-- ESPECIE -->
            <label class="md-1">Especie</label>
            <div class="col">
                <select class="custom-select" id="especie_select" name="especie_select" onchange="espSELECT();" disabled required>
                    <option selected><span>Escoja una opción</span></option>
                </select>
            </div>
            <input class="col" type="text" id="especie_input" placeholder="Digite la nueva especie" style="display: none;">
        </div>

        <div class="row" style="padding: 10px;"><!-- GÉNERO -->
            <label class="md-1">Género</label>
            <div class="col">
                <select class="custom-select" id="genero_select" name="genero_select" onchange="genSELECT();" disabled required>
                    <option selected><span>Escoja una opción</span></option>
                </select>
            </div>
            <input class="col" type="text" id="genero_input" placeholder="Digite el nuevo género" style="display: none;">
        </div>

        <div class="row" style="padding: 10px;"><!-- FAMILIA -->
            <label class="md-1">Familia </label>
            <div class="col">
                <select class="custom-select" id="familia_select" name="familia_select" onchange="famSELECT();" disabled required>
                    <option selected><span>Escoja una opción</span></option>
                </select>
            </div>
            <input class="col" type="text" id="familia_input" placeholder="Digite la nueva especie" style="display: none;">
        </div>

        <div class="row" style="padding: 10px;" id="prov"><!-- FECHA -->
            <label class="md-1" style="padding-right: 25px;">Fecha </label>
            <input class="col" type="date" style="margin-right: 15px;" id="fecha_input" name="fecha_input" required>
        </div>

        <div class="row" style="padding: 10px;"><!-- HÁBITAT -->
            <label class="md-1">Hábitat</label>
            <div class="col">
                <select class="custom-select" id="habitat_select" name="habitat_select">
                    <option selected><span>Escoja una opción</span></option>
                    <option>Pradera</option>
                    <option>Bosque húmedo</option>
                    <option>Bosque seco</option>
                    <option>Desierto</option>
                    <option>Montaña</option>
                    <option>Marisma</option>
                    <option>Sabana</option>
                    <option>Región polar</option>
                    <option>Altiplano</option>
                    <option>Quebrada</option>
                    <option>Lago</option>
                    <option>Pantano</option>
                    <option>Río</option>
                    <option>Arrecife de coral</option>
                    <option>Océano</option>
                    <option>Playa</option>
                    <option>Otra</option>
                </select>
            </div>
        </div>

        <div class="row" style="padding: 10px;"><!-- PARTE -->
            <label class="md-1" style="padding-right: 15px;">Parte</label>
            <div class="col">
                <select class="custom-select" id="parte_select" name="parte_select">
                    <option selected><span>Escoja una opción</span></option>
                    <option>Hojas</option>
                    <option>Tallo</option>
                    <option>Raíz</option>
                    <option>Fruto</option>
                    <option>Flor</option>
                    <option>Semilla</option>
                    <option>Rama</option>
                    <option>Completa</option>
                    <option>Otra</option>
                </select>
            </div>
        </div>

        <div class="row" style="padding: 10px;"><!-- FOTO -->
            <label class="md-1" style="padding-right: 35px;">Foto</label>
            <div class="col input-group">
                <input class="custom-file-input" type="file" name="pic" id="pic" name="pic">
                <label class="custom-file-label" style="margin-right: 15px;">Escoja un archivo</label>
            </div>
        </div>

        <br>
        <label class="card custom-lable" id="usr_input" style="text-align: center;"><?php echo $sss ?></label>
        <br>
        
        <input class="btn btn-success" type="button" id="submitplant" onclick="entryDB();" value="Registrar" disabled>



        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">

            function entryDB(){
                if(
                    document.getElementById("especie_select").selectedIndex  != 0 &&
                    document.getElementById("genero_select").selectedIndex  != 0 &&
                    document.getElementById("familia_select").selectedIndex  != 0 &&
                    document.getElementById("habitat_select").selectedIndex  != 0 &&
                    document.getElementById("parte_select").selectedIndex  != 0
                ){
                    console.log("Woah");
                }else{
                    console.log("Nope");

                }

                var nombre  = document.getElementById("nombre").value;
                var especie = document.getElementById('especie_select').value == "Otra" ? document.getElementById('especie_input').value : document.getElementById('especie_select').value
                var genero  = document.getElementById('genero_select').value  == "Otra" ? document.getElementById('genero_input').value : document.getElementById('genero_select').value
                var familia = document.getElementById('familia_select').value == "Otra" ? document.getElementById('familia_input').value : document.getElementById('familia_select').value
                var fecha   = document.getElementById('fecha_input').value;
                var habitat = document.getElementById('habitat_select').value;
                var parte   = document.getElementById('parte_select').value;
                var usuario = "<?php echo $sss ?>";

                var paqueteDeDatos = new FormData();
                paqueteDeDatos.append('nombre',nombre);
                paqueteDeDatos.append('especie',especie);
                paqueteDeDatos.append('genero',genero);
                paqueteDeDatos.append('familia',familia);
                paqueteDeDatos.append('fecha',fecha);
                paqueteDeDatos.append('habitat',habitat);
                paqueteDeDatos.append('parte',parte);
                paqueteDeDatos.append('pic', $('#pic')[0].files[0]);
                paqueteDeDatos.append('usuario',usuario);

                /* var datainfo = {nombre:nombre, especie:especie, genero:genero, familia:familia, fecha:fecha, habitat:habitat, parte:parte, usuario:usuario};
                console.log("EnviarTXT: "+JSON.stringify(datainfo)); */

                $.ajax({
                    method: "POST",
                    url: "../back/entryDB.php",
                    data: paqueteDeDatos,
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function(res) {
                        console.log(res);
                    }
                });

            }

            /* function entryimgDB(){
                var datai = new FormData();
                var files = $('#pic')[0].files[0];
                datai.append('file',files);
                $.ajax({
                    method: "POST",
                    url: "../back/entry-imgDB.php",
                    data: datai,
                    contentType: false,
                    processData: false,
                    success: function( res ) {
                        if (res != 0) {
                            console.log("Referente: "+res);
                        } else {
                            alert('Formato de imagen incorrecto.');
                        }
                    }             
                })
            } */

            function espSELECT() {
                var x = document.getElementById("especie_select").value;
                if (x == "Otra") {
                    document.getElementById('especie_input').style.display = "block";
                } else {
                    document.getElementById('especie_input').style.display = "none";
                }
            }

            function genSELECT() {
                var x = document.getElementById("genero_select").value;
                if (x == "Otra") {
                    document.getElementById('genero_input').style.display = "block";
                } else {
                    document.getElementById('genero_input').style.display = "none";
                }
            }

            function famSELECT() {
                var x = document.getElementById("familia_select").value;
                if (x == "Otra") {
                    document.getElementById('familia_input').style.display = "block";
                } else {
                    document.getElementById('familia_input').style.display = "none";
                }
            }

            function selectDB() {
                if (document.getElementById("especie_select").disabled) {
                    document.getElementById("especie_select").disabled = false;
                    document.getElementById("genero_select").disabled = false;
                    document.getElementById("familia_select").disabled = false;
                    document.getElementById("submitplant").disabled = false;
                    var nombre = document.getElementById("nombre").value;
                    var datainfo = {
                        n: nombre
                    };
                    $.ajax({
                        method: "POST",
                        url: "../back/entrySelector.php",
                        data: datainfo,
                        success(res) {
                            var x1 = document.getElementById("especie_select");
                            var x2 = document.getElementById("genero_select");
                            var x3 = document.getElementById("familia_select");
                            var option = document.createElement("option");
                            var flag1 = false;
                            flag2 = false;
                            flag3 = false;
                            for (var i = 0; i < res.length; i++) {
                                var caracter = res.charAt(i);
                                if (caracter == "~" || caracter == "@" || caracter == "°") {
                                    switch (caracter) {
                                        case "~":
                                            flag1 = true;
                                            flag2 = false;
                                            flag3 = false;
                                            break;

                                        case "@":
                                            flag1 = false;
                                            flag2 = true;
                                            flag3 = false;
                                            break;

                                        case "°":
                                            flag1 = false;
                                            flag2 = false;
                                            flag3 = true;
                                            break;

                                        default:
                                            break;
                                    }
                                } else {
                                    if (caracter != "|" && flag1) {
                                        option.text += caracter;
                                    } else if (flag1) {
                                        x1.add(option);
                                        var option = document.createElement("option");
                                    }

                                    if (caracter != "|" && flag2) {
                                        option.text += caracter;
                                    } else if (flag2) {
                                        x2.add(option);
                                        var option = document.createElement("option");
                                    }

                                    if (caracter != "|" && flag3) {
                                        option.text += caracter;
                                    } else if (flag3) {
                                        x3.add(option);
                                        var option = document.createElement("option");
                                    }
                                }
                            }
                            otraSELECT();
                        }
                    })
                } else {
                    console.log("Ya se han cargado las opciones");
                }
            }

            function otraSELECT() {
                var opt_otra1 = document.createElement("option");
                var opt_otra2 = document.createElement("option");
                var opt_otra3 = document.createElement("option");

                var x1 = document.getElementById("especie_select");
                var x2 = document.getElementById("genero_select");
                var x3 = document.getElementById("familia_select");

                opt_otra1.text = "Otra";
                opt_otra2.text = "Otra";
                opt_otra3.text = "Otra";

                x1.add(opt_otra1);
                x2.add(opt_otra2);
                x3.add(opt_otra3);
            }

            function restoreSELECT() {
                document.getElementById("especie_select").disabled = true;
                document.getElementById("genero_select").disabled = true;
                document.getElementById("familia_select").disabled = true;
                document.getElementById("submitplant").disabled = true;
            }

            $('.custom-file-input').on('change', function() { //Para que se muestre el nombre del archivo seleccionado en el input
                let fileName = $(this).val().split('\\').pop(); 
                $(this).next('.custom-file-label').addClass("selected").html(fileName); 
            });
        </script>
    </div>
</body>

</html>



<!-- /* function removeOPTION(){
                var removOpt = document.forms["formEntry"]["familia_select"].options[1];
                removOpt.parentNode.removeChild(removOpt);
                
            } */ -->
<!-- 
                //"La Cuota es de:  " + (isMember ? "$2.00" : "$10.00")
                /*var myDate = $('element').datepicker('getDate')
                  moment(myDate).format('YYYY-MM-DD HH:mm:ss')*/
                   -->