<?php


if (isset($_POST['enviar'])) {
	

if (strlen($_POST['asunto'])>= 1 && strlen($_POST['receptor'])>= 1 && strlen($_POST['cuerpo'])>= 1){

	$name = trim($_POST['asunto']);
	$email = trim($_POST ['receptor']);
	$mensaje = trim($_POST['cuerpo']);
	$consulta = "INSERT INTO info(asunto, email, mensaje) VALUES ('$name','$email','$mensaje')";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
echo "<script>alert(' se registraron  los datos.');</script>";

        }else{
            echo "<script>alert('no se registraron los datos >:(');</script>";

        }

			}
		}
	
?>
