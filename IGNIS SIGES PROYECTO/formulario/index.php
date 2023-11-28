<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">

    
    

</head>
<body>


    <form method="post" autocomplete="off">
        <h2>VEHÍCULO 1</h2>
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="jefe" placeholder="Jefe de Dotación">
                
            </div>

            <div class="input-container">
                <input type="text" name="bombero" placeholder="Bombero">
                
            </div>

            <div class="input-container">
                <input type="text" name="revisado" placeholder="Revisado por">
                
            </div>

            <div class="input-container">
                 <input type="text" name="matricula" placeholder="Matrícula">
                 
            </div>

           
            <a href="javascript:history.back()" >Atrás</a>
            
            <input type="submit" name="send" class="btn" value="Enviar" onclick="history.back()">
            
            
            
            
        </div>
        
    </form>

    <?php
        include("send.php");
    ?>
    
    
</body>
</html>