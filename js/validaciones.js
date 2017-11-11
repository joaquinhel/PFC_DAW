function recuperarDatos() {
    nombrebre = $("#nombre").val();
    apellido = $("#apellido").val();
    email = $("#email").val();
    telefono = $("#telefono").val();
    sueldo = $("#sueldo").val();
    alert("HOLA");
    controlarEntrada();
}

//isNaN--> Si introduzco una letra se evalua a false
//Debemos usar .append y no .html ya que sino solo nos sadrá el último mensaje de error
function controlarEntrada() { //No hacen falta parámetros usamos las variables
    error = false;
    $("#error").html(""); //Borramos los mensajes de error anteriores, si los hubiera
    if (nombre == "" || apellido == "" || email == "" || telefono == "" || sueldo == "") {
        $('#error').append('<h2>' + "No puede dejar los campos en blanco" + '</h2');
        error = true;
    }
    if (isNaN(sueldo) || isNaN(telefono)) {
        $('#error').append('<h2>' + "El campo de sueldo y telefono deben ser númerico" + '</h2');
        error = true;
    }

    if (nombre.length < 3 || apellido.length < 3 || nombre.length > 50 || apellido.length > 50) {
        $('#error').append('<h2>' + "Los campos de nombrebre apellidollido solo aceptan valores entre 3 y 50 caracteres" + '</h2');
        error = true;
    }
    return !error;
}

/*
 function validar() {
 if (completados() && comprobarEmail() && comprobarTelefono() && comprobarNivel()) {
 return true;
 } else {
 return false;
 }
 }*/