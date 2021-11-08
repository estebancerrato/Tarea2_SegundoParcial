
	function actualizar(usuario)
	{   
        document.getElementById("txtusuario").value = usuario;
        document.getElementById("accion").value="actualizar";
        document.getElementById("formulario").submit();
		return false;
	}
