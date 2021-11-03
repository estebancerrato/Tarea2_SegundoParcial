<?php
include (dirname(__FILE__)."/../conexion.php"); 
$accion=(isset($_POST["accion"])?$_POST["accion"]:"");

if($accion=="guardar"){
		$validar_registro = mysqli_query($conexion, "SELECT *  FROM tbl_usuario WHERE usuario_codigo = '".$_POST["txtusuario"]."';");
		if(mysqli_num_rows($validar_registro) <=0){
			$usuario=mysqli_real_escape_string($conexion,$_REQUEST["txtusuario"]);
            $clave = $_POST["txtClave"];
	
			$sql="insert into tbl_usuario values(
			'".$usuario."',
			'".$clave."',
			'".$_POST["cmbEstado"]."',
			'".$_POST["cmbempleado"]."'
			)";

			$result=mysqli_query($conexion,$sql);
			if($result)
			{
				echo "<script>alert('Datos guardados exitosamente.');</script>";
			}else
			{
				echo "Error no se puede ejecutar ".$sql." Error ".mysqli_error($conexion);
			}

		}
		else{
			echo "<script>alert('El Usuario que intenta ingresar ya existe');</script>";
		}
	


}

?>