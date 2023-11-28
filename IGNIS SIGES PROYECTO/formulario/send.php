<?php
/*establecer la conexion*/
$conex = mysqli_connect("localhost", "root", "", "formulario");



if(isset($_POST['send'])) {

    if(
        strlen($_POST['jefe']) >=1 &&
        strlen($_POST['bombero']) >=1 &&
        strlen($_POST['revisado']) >=1 &&
        strlen($_POST['matricula']) >= 1
    ) {
        $jefe = trim($_POST['jefe']);
        $bombero = trim($_POST['bombero']);
        $revisado = trim($_POST['revisado']);
        $matricula = trim($_POST['matricula']);
        $fecha = date('Y-m-d');
        $consulta = "INSERT INTO datos(jefe, bombero, revisado, matricula, fecha)
                     VALUES ('$jefe', '$bombero', '$revisado', '$matricula', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado) {
            ?>
                <h3 class="success">Datos añadidos con éxito</h3>
                
            <?php
                
        } else {
            ?>
            <h3 class="error">Ocurrio un error</h3>
            <?php
        } 
      }   else {
            ?>
            <h3 class="error">Rellena todos los campos</h3>
            <?php 

          }
}




?>
