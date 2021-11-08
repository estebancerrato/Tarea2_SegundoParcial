function validar() {
	var clave1 = document.getElementById("txtClave").value;
    var clave2 = document.getElementById("txtClave2").value;
    if(clave1 != clave2){
        alert("La contraseña nueva no coinciden");
        return false;
    }else {
        alert("Guardar en BD");
        document.getElementById("accion").value="guardar";
        return true;
    }
    
}