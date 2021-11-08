function validar_ingreso(){
    if (document.getElementById("txtusuario").value == "") {
        alert("Favor Ingresar el Nombre de Usuario");
        document.getElementById("txtusuario").focus();
    }
    else if (document.getElementById("txtClave").value == "") {
        alert("Favor Ingresar su clave");
        document.getElementById("txtClave").focus();
    } else {
        document.getElementById("accion").value="ingreso";
        return true;
    }
    return false
}