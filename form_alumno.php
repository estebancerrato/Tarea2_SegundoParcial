
<?php 

include("conexion.php");
include("consultas.php");

$objetoconsulta = new repositoriofunciones(); 

$accion=(isset($_POST["accion"])?$_POST["accion"]:"");



if($accion=="guardar")
	{
		$validar_registro = mysqli_query($conexion, "SELECT *  FROM tbl_alumno WHERE alumno_identidad = '".$_POST["txtidentificacion"]."';");
		if(mysqli_num_rows($validar_registro) <=0){
				$pnombre=mysqli_real_escape_string($conexion,$_REQUEST["txtpnombre"]);
				$snombre=mysqli_real_escape_string($conexion,$_REQUEST["txtsnombre"]);
				$ape1=mysqli_real_escape_string($conexion,$_REQUEST["txtape1"]);
				$ape2=mysqli_real_escape_string($conexion,$_REQUEST["txtape2"]);
			
				$sql="insert into tbl_alumno values('".$_POST["txtidentificacion"]."',
				'".$pnombre."',
				'".$snombre."',
				'".$ape1."',
				'".$ape2."',
				'".$_POST["cmbgenero"]."',
				'".$_POST["dnac"]."',
				'".$_POST["txtnacionalidad"]."',
				'".$_POST["txtDireccion"]."',
				'".$_POST["txtdepartamento"]."',
				'".$_POST["txtmunicipio"]."',
				'".$_POST["txtTelefonoFijo"]."',
				'".$_POST["txtTelefonoCelular"]."',
				'".$_POST["cmbBecado"]."',
				'".$_POST["dmatricula"]."',
				'".$_POST["cmbgrado"]."',
				'".$_POST["cmbestado"]."')";
	
				//echo "<br>".$sql;
					if($result)
					{
						echo "<script>alert('Datos guardados exitosamente.');</script>";
					}else
					{
						echo "Error no se puede ejecutar ".$sql." Error ".mysqli_error($conexion);
					}

		}
		else{
			echo "<script>alert('El Alumno que intenta ingresar ya existe');</script>";
		}
	


}


?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Esteban Cerrato" />
	<title>Formulario de Alumno</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_formularios.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- ionicons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<script src="js/validar_alumno.js"></script>	
</head>

<body>


	<div align='center'>
		<h2>Formulario para Mantenimiento de Alumnos</h2>
		
		<?php include("menu.php");?>


	</div>
	<form name='formulario' id='formulario' method="POST" action='form_alumno.php'>
	    <input type="hidden" name="accion" id="accion" value="">
		
		<fieldset>
			<label>Numero de identificacion</label>
			<input type="text" name="txtidentificacion" id="txtidentificacion" value="" maxlength="45">
		</fieldset>

		<fieldset>
			<label>Primer Nombre</label>
			<input type="text" name="txtpnombre" id="txtpnombre" value="" maxlength="45">
		</fieldset>
		<fieldset>
			<label>Segundo Nombre</label>
			<input type="text" name="txtsnombre" id="txtsnombre" value="" maxlength="45">
		</fieldset>

		<fieldset>
			<label>Primer Apellido</label>
			<input type="text" name="txtape1" id="txtape1" value="" maxlength="45">
		</fieldset>

		<fieldset>
			<label>Segundo Apellido</label>
			<input type="text" name="txtape2" id="txtape2" value="" maxlength="45">
		</fieldset>

		<fieldset>
			<label>Genero</label>
			<select name='cmbgenero' id='cmbgenero'>
				<option value='masculino'>MASCULINO</option>
				<option value='femenino'>FEMENINO</option>
			</select>
		</fieldset>


		<fieldset>
			<label>Fecha de Nacimiento</label>
			<input type="date" name="dnac" id="dnac" value="">
		</fieldset>

		<fieldset>
			<label>Nacionalidad</label>
			<input type="text" name="txtnacionalidad" id="txtnacionalidad">
		</fieldset>


		<fieldset>
			<label>Direccion</label>
			<textarea name='txtDireccion' id='txtDireccion'>
		    </textarea>
		</fieldset>

		<fieldset>
			<label>Departamento</label>
			<input type="text" name="txtdepartamento" id="txtdepartamento">
		</fieldset>
		<fieldset>
			<label>Municipio</label>
			<input type="text" name="txtmunicipio" id="txtmunicipio">
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
			<label>Becado</label>
			<select name="cmbBecado" id="cmbBecado">
				<option value="Si">Si</option>
				<option value="No">No</option>
			</select>
		</fieldset>
		<fieldset>
			<label>Fecha de Matricula</label>
			<input type="date" name="dmatricula" id="dmatricula" value="">
		</fieldset>

		<fieldset>
			<label>Grado</label>
			<select name="cmbgrado" id="cmbgrado">
				<option value="grado1">Grado 1</option>
				<option value="grado2">Grado 2</option>
			</select>
		</fieldset>
		<fieldset>
			<label>Estado</label>
			<select name='cmbestado' id='cmbestado'>
				<option value='activo'>ACTIVO</option>
				<option value='RETIRADO'>RETIRADO</option>
				<option value='TRASLADADO'>TRASLADADO</option>
				<option value='DESERCION'>DESERCION</option>
			</select>
		</fieldset>

		<fieldset>
			<button name='btnguardar' onClick="return validar();">Guardar</button>
		</fieldset>
	</form>

	<?php 
		 echo $objetoconsulta->consultaAlumnos();
	?>



 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>




</body>

</html>