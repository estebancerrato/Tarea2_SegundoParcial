function generarContrasenaAleatoria() {
    characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    type ='rand';
    var pass = "";
    for (i=0; i < 15; i++){
        if(type == 'rand'){
            pass += String.fromCharCode((Math.floor((Math.random() * 100)) % 94) + 33);
        }else{
            pass += characters.charAt(Math.floor(Math.random()*characters.length));   
        }
    }
    var inputNombre = document.getElementById("txtClave");
    inputNombre.value = pass;
    return false;//evitar que la pagina se recargue
}