//alert("Entro validacion");

function validar() {
			
    if (document.getElementById("txtidentificacion").value == "") {
        alert("Favor Ingresar la identificacion del Alumno");
        document.getElementById("txtidentificacion").focus();
    }
    else if (document.getElementById("txtpnombre").value == "") {
        alert("Favor Ingresar el Primer Nombre del Alumno");
        document.getElementById("txtpnombre").focus();
    } else if (document.getElementById("txtsnombre").value == "") {
        alert("Favor Ingresar el Segundo Nombre del Alumno");
        document.getElementById("txtsnombre").focus();
    } else if (document.getElementById("txtape1").value == "") {
        alert("Favor Ingresar el Primer Apellido del Alumno");
        document.getElementById("txtape1").focus();
    } else if (document.getElementById("txtape2").value == "") {
        alert("Favor Ingresar el Segundo Apellido del Alumno");
        document.getElementById("txtape2").focus();
    } else if (document.getElementById("cmbgenero").value == "") {
        alert("Favor Seleccionar el genero del Alumno");
        document.getElementById("cmbgenero").focus();
    } else if (document.getElementById("dnac").value == "") {
        alert("Favor Ingresar el Fecha de Nacimiento del Alumno");
        document.getElementById("dnac").focus();
    } else if (document.getElementById("txtnacionalidad").value == "") {
        alert("Favor ingresar la nacionalidad del Alumno");
        document.getElementById("txtnacionalidad").focus();
    } else if (document.getElementById("txtDireccion").value == "") {
        alert("Favor Ingresar la direccion del Alumno");
        document.getElementById("txtDireccion").focus();
    } else if (document.getElementById("txtdepartamento").value == "") {
        alert("Favor Ingresar el departamento del Alumno");
        document.getElementById("txtdepartamento").focus();
    } else if (document.getElementById("txtmunicipio").value == "") {
        alert("Favor ingresar el municipio del Alumno");
        document.getElementById("txtmunicipio").focus();
    } else if (document.getElementById("txtTelefonoFijo").value == "") {
        alert("Favor Ingresar el Telefono Fijo del Alumno");
        document.getElementById("txtTelefonoFijo").focus();
    } else if (document.getElementById("txtTelefonoCelular").value == "") {
        alert("Favor Ingresar el Telefono Celular del Alumno");
        document.getElementById("txtTelefonoCelular").focus();
    } else if (document.getElementById("cmbBecado").value == "") {
        alert("Favor Seleccionar si es becado el Alumno");
        document.getElementById("cmbBecado").focus();
    } else if (document.getElementById("dmatricula").value == "") {
        alert("Favor Ingresar fecha de matricula del Alumno");
        document.getElementById("dmatricula").focus();
    } else if (document.getElementById("cmbgrado").value == "") {
        alert("Favor Seleccionar el grado del Alumno");
        document.getElementById("cmbgrado").focus();
    } else if (document.getElementById("cmbestado").value == "") {
        alert("Favor Seleccionar el estado del Alumno");
        document.getElementById("cmbestado").focus();
    } else {
        alert("Guardar en BD");
        document.getElementById("accion").value="guardar";
        return true;
    }
    return false;
}