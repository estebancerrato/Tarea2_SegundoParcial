<?php

include('conexion.php');
$accion=(isset($_POST["accion"])?$_POST["accion"]:"");



if($accion=="ingreso"){
	
	$usuario = $_POST["txtusuario"];
	$clave = $_POST["txtClave"];

	
	//Consultar en la base de datos si el usuario y la contraseña coinciden, si encuentra un registro significa que puede iniciar sesion
	$sql = "SELECT * FROM tbl_usuario WHERE usuario_codigo=  '$usuario' AND usuario_clave = '$clave'" ;
	$validar_usuario = mysqli_query($conexion,$sql);
	if(mysqli_num_rows($validar_usuario) == 1){
		if($data = mysqli_fetch_assoc(mysqli_query($conexion,$sql))){

			
			//Validar si el usuario esta ACTIVO o INACTIVO
			if($data['usuario_estado'] == 'ACTIVO'){
				echo "<script> alert('Ingreso exitoso') </script>";

				echo "<meta http-equiv='Refresh' content='0;url=form_usuario.php'>";
			}else{
				echo "<script> alert('El usuario que intenta ingresar se encuentra en estado INACTIVO') </script>";
			}
			
		}				
		
	}else{
		echo "<script> alert('Usuario o contraseña incorrecta') </script>";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_formularios.css">
	<meta name="author" content="Esteban Cerrato" />
	<script src="js/validar_ingreso.js"></script>
</head>
<body>

<div align='center'>
	<h1>Pantalla Principal del Sistema</h1>
</div>


    <div>
        <form name='formulario' id='formulario' method="POST" action='principal.php'>
            <input type="hidden" name="accion" id="accion" value="">
            <fieldset>
                <label>Usuario</label>
                <input type="text" name="txtusuario" id="txtusuario" value="" maxlength="45" placeholder='Ingrese el nombre de usuario'>
            </fieldset>
            <fieldset>
                <label>Clave</label>
                <input type="password" name="txtClave" id="txtClave" value="" maxlength="45" placeholder='Ingrese la clave del usuario ingresado'>
            </fieldset>

            <fieldset align="center">
                <button name='btnIngresar' onClick="return validar();">Ingresar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>