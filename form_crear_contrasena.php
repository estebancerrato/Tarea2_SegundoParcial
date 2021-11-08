<?php
include('conexion.php');
session_start();

$accion=(isset($_POST["accion"])?$_POST["accion"]:"");


if($accion=="guardar"){
    $usuario = $_SESSION["usuario"];

    //echo "<script>alert( '".$usuario."');</script>";  
    $claveTemporal = $_POST["txtClaveTemporal"];
    $clave = $_POST["txtClave"];
    $sql = "SELECT * FROM tbl_usuario2 WHERE usuario_codigo=  '".$usuario."' AND usuario_clave_temporal = '".$claveTemporal."'" ;
        $validar_usuario = mysqli_query($conexion, $sql);
        if(mysqli_num_rows($validar_usuario) == 1){

           $sql = "UPDATE tbl_usuario2
           SET  usuario_claveTemp_activa = 0,usuario_clave_temporal='', usuario_clave = '$clave'
           WHERE usuario_codigo = '$usuario'
           ";
            $result=mysqli_query($conexion,$sql);
            if($result)
            {
                echo "<script>alert('Contraseña guardada exitosamente.');</script>";
                echo "<meta http-equiv='Refresh' content='0;url=principal.php'>";
            }else
            {
                echo "Error no se puede ejecutar ".$sql." Error ".mysqli_error($conexion);
            }
        }else{
            echo "<script>alert('Error clave temporal: ".$clave." Incorrecta' );</script>";
        }
   

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Contraseña</title>
    <link rel="stylesheet" type="text/css" href="css/estilo_formularios.css">
    <script src="js/validar_contrasena.js"></script>
</head>
<body>
    <div>
    <form name='formulario' id='formulario' method="POST" action='form_crear_contrasena.php'>
            <input type="hidden" name="accion" id="accion" value="">
            <fieldset>
                <label>Usuario</label>
                <?php 
                   echo "
                   <input type='text' name='txtusuario' id='txtusuario' value='$_SESSION[usuario]' maxlength='45' readonly>
                   ";
                ?>

            </fieldset>
            <fieldset>
                <label>Clave Temporal</label>
                <input type="text" name="txtClaveTemporal" id="txtClaveTemporal" value="" maxlength="45">            
            </fieldset>
            <fieldset>
                <label>Nueva Clave</label>
                <input type="text" name="txtClave" id="txtClave" value="" maxlength="45">
                
            </fieldset>
            <fieldset>
                <label>Repetir Clave</label>
                <input type="text" name="txtClave2" id="txtClave2" value="" maxlength="45">
            </fieldset>

            <fieldset align="center">
                <button name='btnIngresar' onClick="return validar();">Guardar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>