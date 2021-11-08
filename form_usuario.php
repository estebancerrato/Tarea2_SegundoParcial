<?php
session_start();
include ("conexion.php"); 
include("consultas.php");
$objetoconsulta = new repositoriofunciones(); 

$accion=(isset($_POST["accion"])?$_POST["accion"]:"");
echo "$accion";

if($accion=="guardar"){
    $validar_usuario = mysqli_query($conexion, "SELECT usuario_codigo FROM tbl_usuario2 where usuario_codigo ='".$_POST["txtusuario"]."';");
    if(mysqli_num_rows($validar_usuario) <=0){
        //echo "<script>alert('Entro');</script>";
        $validar_usuario = mysqli_query($conexion, "SELECT * FROM tbl_usuario2 where empleado_cedula='".$_POST["cmbempleado"]."';");
        if(mysqli_num_rows($validar_usuario) <=0){
            $usuario=mysqli_real_escape_string($conexion,$_REQUEST["txtusuario"]);
            $clave = $_POST["txtClave"];
    
            $sql="insert into tbl_usuario2 (usuario_codigo, usuario_clave_temporal, usuario_estado, empleado_cedula,usuario_claveTemp_activa) values(
            '".$usuario."',
            '".$clave."',
            '".$_POST["cmbEstado"]."',
            '".$_POST["cmbempleado"]."',
            '1'
            )";
    
            $result=mysqli_query($conexion,$sql);
            if($result)
            {
                echo "<script>alert('Datos guardados exitosamente.');</script>";
            }else
            {
                echo "Error no se puede ejecutar ".$sql." Error ".mysqli_error($conexion);
            }
        }else{
            echo "<script>alert('El empleado seleccionado ya tiene asignado un usuario' );</script>";
        }

    }else{
        echo "<script>alert('El usuario ya existe, ingrese un usuario distinto');</script>";
    }
}


if($accion=="actualizar"){

  

    echo "<script>alert('Se genero nuevamente una contraseña temporal para el usuario: ".$_POST["txtusuario"]."');</script>";
    echo "<script type='text/javascript'>generarContrasenaAleatoria();</script>";
    $validar_usuario = mysqli_query($conexion, "SELECT usuario_codigo FROM tbl_usuario2 where usuario_codigo ='".$_POST["txtusuario"]."';");
    if(mysqli_num_rows($validar_usuario) == 1){
            $usuario = $_POST["txtusuario"];
            $claveTemporal = $_POST["txtClave"];
            $sql = "UPDATE tbl_usuario2
            SET  usuario_claveTemp_activa = 1,usuario_clave_temporal='$claveTemporal', usuario_clave = ''
            WHERE usuario_codigo = '$usuario'
            ";
    
            $result=mysqli_query($conexion,$sql);
            if($result)
            {
                echo "<script>alert('Se genero nuevamente una contraseña temporal para el usuario: '$usuario);</script>";
            }else
            {
                echo "Error no se puede ejecutar ".$sql." Error ".mysqli_error($conexion);
            }


    }
    else{

        echo "<script>alert('El usuario que intenta actualizar no existe');</script>";

    }    


        
}



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Usuario</title>
    <meta name="author" content="Esteban Cerrato" />
    <link rel="stylesheet" type="text/css" href="css/estilo_formularios.css">
    <script src="js/validar_usuario.js"></script>
    <script src="js/GenerarContrasena.js"></script>

    <script src="js/actualizar_usuario.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- ionicons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<!-- mi css -->
	<link rel="stylesheet" type="text/css" href="css/estilo_formularios.css">
</head>

<body onload="generarContrasenaAleatoria();">

    <div align='center'>
        <h2>Formulario para Mantenimiento de Usuarios</h2>

        <?php
        include("menu.php");
        ?>


    </div>

    <div>
        <form name='formulario' id='formulario' method="POST" action='form_usuario.php'>
            <input type="hidden" name="accion" id="accion" value="">
            
            <fieldset>
                <label>Nuevo Usuario</label>
                <input type="text" name="txtusuario" id="txtusuario" value="" maxlength="45" placeholder='Ingrese el nombre de usuario'>
            </fieldset>

            <fieldset>
                <label>Seleccionar Empleado</label>
                <select name="cmbempleado" id="cmbempleado">
                    <option value="0" disabled selected >Seleccionar</option>
                    <?php
                        $query = mysqli_query($conexion, "SELECT empleado_cedula, CONCAT(empleado_nombres,' ',empleado_primero_apellido,' ',empleado_segundo_apellido)   AS NOMBRE_COMPLETO FROM tbl_empleado;")
                        or die('error: '.mysqli_error($conexion));  
                        while($columna = mysqli_fetch_assoc($query)){
                            echo "
                            <option value='".$columna["empleado_cedula"]."'>".$columna["NOMBRE_COMPLETO"]."</option>
                            ";
                        }
                    ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Clave temporal</label>
                <input type="text" name="txtClave" id="txtClave" value="" maxlength="45">
                
            </fieldset>
            <fieldset>
                <label>Estado</label>
                <select name="cmbEstado" id="cmbEstado">
                    <option value="ACTIVO">ACTIVO</option>
                    <option value="INACTIVO">INACTIVO</option>
                </select>
            </fieldset>
            <fieldset align="center">
                <button name='btnIngresar' onClick="return validar();">Guardar</button>
                <button name="btnGenerarClave" onClick="return generarContrasenaAleatoria()">Generar contraseña</button>
            </fieldset>
        </form>

        <?php 
		 echo $objetoconsulta->consultaUsuarios();
	    ?>
    </div>
</body>

</html>



