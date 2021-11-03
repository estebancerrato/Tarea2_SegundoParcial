function validar() {
    //alert("Voy a validar");
    if (document.getElementById("txtnombre").value == "") {
        alert("Favor Ingresar el Nombre del Empleado");
        document.getElementById("txtnombre").focus();
    } else if (document.getElementById("txtape1").value == "") {
        alert("Favor Ingresar el Primer Apellido del Empleado");
        document.getElementById("txtape1").focus();
    } else if (document.getElementById("txtape2").value == "") {
        alert("Favor Ingresar el Segundo Apellido del Empleado");
        document.getElementById("txtape2").focus();
    } else if (document.getElementById("txtnombre").value == "") {
        alert("Favor Ingresar el Nombre del Empleado");
        document.getElementById("txtnombre").focus();
    } else if (document.getElementById("txtcedula").value == "") {
        alert("Favor Ingresar el Numero de Cedula del Empleado");
        document.getElementById("txtcedula").focus();
    } else if (document.getElementById("dfechai").value == "") {
        alert("Favor Ingresar el Fecha de ingreso del Empleado");
        document.getElementById("dfechai").focus();
    } else if (document.getElementById("dnac").value == "") {
        alert("Favor Ingresar el Fecha de Nacimiento del Empleado");
        document.getElementById("dnac").focus();
    } else if (document.getElementById("cmbestadoc").value == "") {
        alert("Favor Seleccionar el estado civil del Empleado");
        document.getElementById("cmbestadoc").focus();
    } else if (document.getElementById("txtDireccion").value == "") {
        alert("Favor Ingresar la direccion del Empleado");
        document.getElementById("txtDireccion").focus();
    } else if (document.getElementById("txtcorreo").value == "") {
        alert("Favor Ingresar el correo del Empleado");
        document.getElementById("txtcorreo").focus();
    } else if (document.getElementById("cmbtipoe").value == "") {
        alert("Favor seleccionar el Area Empleado");
        document.getElementById("cmbtipoe").focus();
    } else if (document.getElementById("txtgradoa").value == "") {
        alert("Favor Ingresar el grado academico del Empleado");
        document.getElementById("txtgradoa").focus();
    } else if (document.getElementById("cmbgenero").value == "") {
        alert("Favor seleccionar el Genero del Empleado");
        document.getElementById("cmbgenero").focus();
    } else if (document.getElementById("cmbestado").value == "") {
        alert("Favor seleccionar el estado del Empleado");
        document.getElementById("cmbestado").focus();
    } else if (document.getElementById("txtTelefonoFijo").value == "") {
        alert("Favor Ingresar el Telefono Fijo del Empleado");
        document.getElementById("txtTelefonoFijo").focus();
    } else if (document.getElementById("txtTelefonoCelular").value == "") {
        alert("Favor Ingresar el Telefono Celular del Empleado");
        document.getElementById("txtTelefonoCelular").focus();
    } else if (document.getElementById("txtSalario").value == "") {
        alert("Favor Ingresar el Salario del Empleado");
        document.getElementById("txtSalario").focus();
    } else if (document.getElementById("txtobser").value == "") {
        alert("Favor Ingresar observaciones del Empleado");
        document.getElementById("txtobser").focus();
    }else if(document.getElementById("dnac").value >= document.getElementById("dfechai").value ) {
        alert("Fecha ingresada incorrecta, La fecha de nacimiento no puede ser mayor o igual a la fecha de ingreso");
        document.getElementById("dnac").focus();
    } 
    
    else {
        alert("Guardar en BD");
        document.getElementById("accion").value="guardar";
        return true;
    }
    return false;
}