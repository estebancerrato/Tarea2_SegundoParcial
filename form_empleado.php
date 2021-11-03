<?php 

include("conexion.php");
include("consultas.php");

$objetoconsulta = new repositoriofunciones(); 



$accion=(isset($_POST["accion"])?$_POST["accion"]:"");

if($accion=="guardar"){
		$validar_registro = mysqli_query($conexion, "SELECT *  FROM tbl_empleado WHERE empleado_cedula = '".$_POST["txtcedula"]."';");
		if(mysqli_num_rows($validar_registro) <=0){
			$nombres=mysqli_real_escape_string($conexion,$_REQUEST["txtnombre"]);
			$ape1=mysqli_real_escape_string($conexion,$_REQUEST["txtape1"]);
			$ape2=mysqli_real_escape_string($conexion,$_REQUEST["txtape2"]);
	
			$sql="insert into tbl_empleado values(
			'".$nombres."',
			'".$ape1."',
			'".$ape2."',
			'".$_POST["txtcedula"]."',
			'".$_POST["dfechai"]."',
			'".$_POST["dnac"]."',
			'".$_POST["cmbestadoc"]."',
			'".$_POST["txtDireccion"]."',
			'".$_POST["txtcorreo"]."',
			'".$_POST["cmbtipoe"]."',
			'".$_POST["txtgradoa"]."',
			'".$_POST["cmbgenero"]."',
			'".$_POST["cmbestado"]."',
			'".$_POST["txtTelefonoFijo"]."',
			'".$_POST["txtTelefonoCelular"]."',
			'".$_POST["txtSalario"]."',
			'".$_POST["txtobser"]."')";


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
			echo "<script>alert('El Empleado que intenta ingresar ya existe');</script>";
		}
	


}


?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Esteban Cerrato" />
	<title>Formulario de Empleado</title>
	<script src="js/validar_empleado.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- ionicons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<!-- mi css -->
	<link rel="stylesheet" type="text/css" href="css/estilo_formularios.css">
</head>

<body>

	<div align='center'>
		<h2>Formulario para Mantenimiento de Empleados</h2>

		<?php
		include("menu.php");
		?>


	</div>
	<form name='formulario' id='formulario' method="POST" action='form_empleado.php'>
		<input type="hidden" name="accion" id="accion" value="">
		<fieldset>
			<label>Nombre del Empleado</label>
			<input type="text" name="txtnombre" id="txtnombre" value="" maxlength="45" placeholder='Ingrese el nombre o los nombres del empleado'>
		</fieldset>

		<fieldset>
			<label>Primer Apellido Empleado</label>
			<input type="text" name="txtape1" id="txtape1" value="" maxlength="45">
		</fieldset>

		<fieldset>
			<label>Segundo Apellido Empleado</label>
			<input type="text" name="txtape2" id="txtape2" value="" maxlength="45">
		</fieldset>

		<fieldset>
			<label>Cedula Empleado</label>
			<input type="text" name="txtcedula" id="txtcedula" value="" maxlength="45">
		</fieldset>

		<fieldset>
			<label>Fecha de Ingreso</label>
			<input type="date" name="dfechai" id="dfechai" value="<?php echo date("Y-n-j");?>">
		</fieldset>

		<fieldset>
			<label>Fecha de Nacimiento</label>
			<input type="date" name="dnac" id="dnac" value="">
		</fieldset>

		<fieldset>
			<label>Estado Civil</label>
			<select name='cmbestadoc' id='cmbestadoc'>
				<option value='soltero'>SOLTERO</option>
				<option value='casado'>CASADO</option>
				<option value='viudo(a)'>VIUDO(A)</option>
				<option value='divorciado'>DIVORCIADO</option>
			</select>
		</fieldset>

		<fieldset>
			<label>Direccion</label>
			<textarea name='txtDireccion' id='txtDireccion'></textarea>

		</fieldset>


		<fieldset>
			<label>Correo Electronico</label>
			<input type="text" name="txtcorreo" id="txtcorreo" value="" maxlength="140">
		</fieldset>

		<fieldset>
			<label>Tipo</label>
			<select name='cmbtipoe' id='cmbtipoe'>
				<option value='administrativo'>Administrativo</option>
				<option value='docente'>Docente</option>
				<option value='servicio'>Servicio</option>
			</select>
		</fieldset>

		<fieldset>
			<label>Grado Academico</label>
			<input type="text" name="txtgradoa" id="txtgradoa" value="" maxlength="45">
		</fieldset>

		<fieldset>
			<label>Genero</label>
			<select name='cmbgenero' id='cmbgenero'>
				<option value='masculino'>MASCULINO</option>
				<option value='femenino'>FEMENINO</option>
			</select>
		</fieldset>


		<fieldset>
			<label>Estado</label>
			<select name='cmbestado' id='cmbestado'>
				<option value='activo'>ACTIVO</option>
				<option value='inactivo'>INACTIVO</option>
				<option value='jubilado'>JUBILADO</option>
				<option value='suspendido'>SUSPENDIDO</option>
				<option value='fallecido'>FALLECIDO</option>
			</select>
		</fieldset>
		<fieldset>
			<label>Telefono Fijo</label>
			<input type="text" name="txtTelefonoFijo" id="txtTelefonoFijo" maxlength="45">
		</fieldset>
		<fieldset>
			<label>Telefono Celular</label>
			<input type="text" name="txtTelefonoCelular" id="txtTelefonoCelular" maxlength="45">
		</fieldset>
		<fieldset>
			<label>Salario</label>
			<input type="text" name="txtSalario" id="txtSalario" maxlength="45">
		</fieldset>
		<fieldset>
			<label>Observaciones</label>
			<textarea name='txtobser' id='txtobser'></textarea>
		</fieldset>

		<fieldset >
			<button name='btnguardar' onClick="return validar();">Guardar</button>
		</fieldset>

	</form>

	<?php 
		 echo $objetoconsulta->consultaEmpleados();
	?>



 
	
</body>

</html>