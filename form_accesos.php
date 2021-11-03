<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Accesos</title>
    <link rel="stylesheet" type="text/css" href="estilo_formularios.css">
    <meta name="author" content="Esteban Cerrato" />
</head>
<body>
<?php 

?>

	<div align='center'>
		<h2>Formulario para Mantenimiento de Accesos</h2>

<?php 
include("menu.php");
?>


	</div>
    <form name='formulario' id='formulario' method="POST" action='form_accesos.php'>
        <fieldset>
            <label >ACCESOS:</label>
            <select name='cmbacceso' id='cmbacceso'>
                <option value=""></option>
			</select>
        </fieldset>
    </form>
</body>
</html>