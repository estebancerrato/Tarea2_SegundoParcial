function validar() {

    if (document.getElementById("txtusuario").value == "") {
        alert("Favor Ingresar el Nombre de Usuario");
        document.getElementById("txtusuario").focus();
    }
    else if (document.getElementById('cmbempleado').value == 0 || document.getElementById('cmbempleado').value == "") {
        alert("Favor seleccionar un empleado");
        document.getElementById("cmbempleado").focus();
    } 
    else if (document.getElementById("txtClave").value == "") {
        alert("Favor Ingresar su clave");
        document.getElementById("txtClave").focus();
    } else {
        document.getElementById("accion").value="guardar";
        return true;
    }
    return false;
}