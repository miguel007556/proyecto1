<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>avance</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>
<body>


<?php
include("conexion.php");



    if(isset($_POST['enviar'])){


        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: ".$_POST['nombre']." <".$_POST['emisor'].">\r\n";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: ".$_POST['emisor']."\r\n";


        if(mail($_POST['receptor'],$_POST['asunto'],$cuerpo,$headers) ) {

            echo "<script>alert(' correo enviado, verifique su bandeja de entrada.');</script>";

        }else{
            echo "<script>alert('No se pudo enviar el mail y no se porque >:(');</script>";

        }

    }


?>
    <form action="" name="lost" method="post">
        <div class="form">
            <h1>¡AVANCE comunicate!</h1>
            <div class="grupo">
                <input type="text" name="asunto"  required><span class="barra"></span>
                <label>Asunto</label>
            </div>
        <div class="grupo">
                <input type="text" size="25" name="nombre" required style="" value="Ing. Miguel Angel Roan Rodriguez" >
                <label>Nombre</label>
            </div>
    
            <div class="grupo">
         <input type="email" size="25" name="emisor" required style="" placeholder="Email remitente" value="skyblackpiky67@gmail.com"></span><br>   <label>Nombre</label> </div>
      
         
        

<select style="width: 80%; height: 30px;" name="receptor" id="correos" class="select-css">
    <option value="dochoa@avanceytec.com.mx">Selecciona email destinatario</option>
  <option value="dochoa@avanceytec.com.mx">dochoa@avanceytec.com.mx</option>
  <option value="mercadotecnia@avanceytec.com.mx">mercadotecnia@avanceytec.com.mx</option>
  <option value="programador3@maplasa.com">programador3@maplasa.com</option>
  <option value="pik_y67@hotmail.com">pik_y67@hotmail.com</option>
</select>
            <div class="grupo">
                <textarea name="cuerpo"  rows="3" required></textarea><span class="barra"></span>
                <label>Mensaje</label>
            </div>
            <button name="enviar" type="submit">Enviar</button>
        </div>
    </form>

    <?php
include("registrar.php");
?>
</body>
</html>