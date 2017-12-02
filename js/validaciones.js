
function controlarEntradaCategoria() {
    nombre = $("#nombre").val();
    error = false;
    $("#error").html(""); //Borramos los mensajes de error anteriores, si los hubiera

    if (nombre == "") {
        $('#error').append('<h4>' + "Los campos marcados con * son obligatorios" + '</h4>');
        error = true;
    } else if ((nombre.length < 3) || !isNaN(nombre)) {
        $('#error').append('<h4>' + "El dato introducido no es correcto" + '</h4>');
        error = true;
    }
    if (error == true) {
        return false;
    } else {
        alert("El registro ha sido grabado correctamente");
        return true;
    }
}

function controlarEntradaEmpleado() { //No hacen falta parámetros usamos las variables
    nombre = $("#nombre").val();
    apellido = $("#apellido").val();
    email = $("#email").val();
    telefono = $("#telefono").val();
    sueldo = $("#sueldo").val();
    direccion = $("#direccion").val();
    dni = $("#nif").val();
    error = false;
    $("#error").html(""); //Borramos los mensajes de error anteriores, si los hubiera

    if (nombre == "" || apellido == "" || email == "" || telefono == "" || sueldo == "") {
        $('#error').append('<h4>' + "Los campos marcados con * son obligatorios" + '</h4>');
        error = true;
    }
    else if (isNaN(sueldo) || isNaN(telefono)) {
        $('#error').append('<h4>' + "El campo de sueldo y telefono deben ser númerico" + '</h4>');
        error = true;
    }
    else if (telefono.length < 9) {
        $('#error').append('<h4>' + "El campo teléfono debe tener 9 dígitos" + '</h4>');
        error = true;
    }

    else if (nombre.length < 3 || apellido.length < 3 || nombre.length > 50 || apellido.length > 50) {
        $('#error').append('<h4>' + "Los campos de nombrebre apellido solo aceptan valores entre 3 y 50 caracteres" + '</h4>');
        error = true;
    }
    else if (validarEmail(email) === false) {
        $('#error').append('<h4>' + "Introduzca un email correcto" + '</h4>');
        error = true;
    }

    else if (validarNIF(dni) === false) {
        $('#error').append('<h4>' + "El dni introducido es incorrecto" + '</h4>');
        error = true;
    }
    else if (direccion != "") {
        if (direccion.length < 5 || !isNaN(direccion)) {
            $('#error').append('<h4>' + "La dirección introducida no es correcta" + '</h4>');
            error = true;
        }
    }

    else if (email != "") {
        if (email.length < 5 || !isNaN(email))
            $('#error').append('<h4>' + "La dirección introducida no es correcta" + '</h4>');
        error = true;
    }
    if (error == true) {
        return false;
    } else {
        alert("El registro ha sido grabado correctamente");
        return true;
    }
}


/************************************************/
function controlarEntradaCliente() { //No hacen falta parámetros usamos las variables
    error = false;
    nombre = $("#nombre").val();
    apellido = $("#apellido").val();
    email = $("#email").val();
    telefono = $("#telefono").val();
    dni = $("#nif").val();
    direccion = $("#direccion").val();
    $("#error").html(""); //Borramos los mensajes de error anteriores, si los hubiera

    if (nombre == "" || apellido == "" || email == "" || telefono == "") {
        $('#error').append('<h4>' + "Los campos marcados con * son obligatorios" + '</h4>');
        error = true;
    }
    else if (isNaN(telefono) || telefono.length < 9) {
        $('#error').append('<h4>' + "El campo teléfono deben ser númerico y jjjjtener 9 dígitos" + '</h4>');
        error = true;
    }

    else if (nombre.length < 3 || apellido.length < 3 || nombre.length > 50 || apellido.length > 50) {
        $('#error').append('<h4>' + "Los campos de nombre apellido solo aceptan valores entre 3 y 50 caracteres" + '</h4>');
        error = true;
    }

    else if (!isNaN(nombre) || !isNaN(apellido)) {
        $('#error').append('<h4>' + "El campo nombre y apellido no pueden ser númerico" + '</h4>');
        error = true;
    }

    else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/).test(email)) {
        $('#error').append('<h4>' + "Introduzca un email correcto" + '</h4>');
        error = true;
    }

    else if (validarNIF(dni) === false) {
        $('#error').append('<h4>' + "El dni introducido es incorrecto" + '</h4>');
        error = true;
    }

    else if (direccion != "") {
        if (direccion.length < 5 || !isNaN(direccion)) {
            $('#error').append('<h4>' + "La dirección introducida no es correcta" + '</h4>');
            error = true;
        }
    }
    if (error == true) {
        return false;
    } else {
        alert("El registro ha sido grabado correctamente");
        return true;
    }
    alert("El registro ha sido grabado correctamente");
}


function controlarEntradaProducto() { //No hacen falta parámetros usamos las variables
    nombre = $("#nombre").val();
    descripcion = $("#descripcion").val();
    marca = $("#marca").val();
    precio = $("#precio").val();
    error = false;
    $("#error").html(""); //Borramos los mensajes de error anteriores, si los hubiera

    if (nombre == "" || marca == "" || precio == "") {
        $('#error').append('<h4>' + "Los campos marcados con * son obligatorios" + '</h4>');
        error = true;
    }
    else if (isNaN(precio)) {
        $('#error').append('<h4>' + "El campo precio debe ser númerico" + '</h4>');
        error = true;
    }

    else if (nombre.length < 3 || marca.length < 3 || nombre.length > 50 || marca.length > 50) {
        $('#error').append('<h4>' + "Los campos de nombre y marca solo aceptan valores entre 3 y 50 caracteres" + '</h4>');
        error = true;
    }

    else if (descripcion != "") {
        if (descripcion.length < 3 || !isNaN(descripcion)) {
            $('#error').append('<h4>' + "La dirección introducida no es correcta" + '</h4>');
            error = true;
        }
    }
    if (error == true) {
        return false;
    } else {
        alert("El registro ha sido grabado correctamente");
        return true;
    }
}

function controlarEntradaProveedor() { //No hacen falta parámetros usamos las variables
    nombre = $("#nombre").val();
    direccion = $("#direccion").val();
    contacto = $("#contacto").val();
    cif = $("#cif").val();
    email = $("#email").val();
    telefono = $("#telefono").val();
    error = false;
    $("#error").html(""); //Borramos los mensajes de error anteriores, si los hubiera

    if (nombre == "" || cif == "" || email == "" || telefono == "") {
        $('#error').append('<h4>' + "Los campos marcados con * son obligatorios" + '</h4>');
        error = true;
    }
    else if (isNaN(telefono)) {
        $('#error').append('<h4>' + "El campo precio debe ser númerico" + '</h4>');
        error = true;
    }

    else if (nombre.length < 3 || marca.length < 3 || email.length > 50 || email.length > 50) {
        $('#error').append('<h4>' + "Los campos de nombre y marca solo aceptan valores entre 3 y 50 caracteres" + '</h4>');
        error = true;
    }

    else if (contacto != "") {
        if (contacto.length < 3 || !isNaN(contacto))
            $('#error').append('<h4>' + "El contacto introducida no es correcta" + '</h4>');
        error = true;
    }

    else if (direccion != "") {
        if (direccion.length < 3 || !isNaN(direccion))
            $('#error').append('<h4>' + "La dirección introducida no es correcta" + '</h4>');
        error = true;
    }
    if (error == true) {
        return false;
    } else {
        alert("El registro ha sido grabado correctamente");
        return true;
    }
}


function controlarEntradaPrueba() {
    nombre = $("#nombre").val();
    instrumental = $("#instrumental").val();
    descripcion = $("#descripcion").val();
    error = false;
    $("#error").html(""); //Borramos los mensajes de error anteriores, si los hubiera

    if (nombre == "" || instrumental == "" || descripcion == "") {
        $('#error').append('<h4>' + "Los campos marcados con * son obligatorios" + '</h4>');
        error = true;
    }
    else if (nombre.length < 3 || instrumental.length < 3 || email.length > 50 || instrumental.length > 50) {
        $('#error').append('<h4>' + "Los campos de nombre e instrumental solo aceptan valores entre 3 y 50 caracteres" + '</h4>');
        error = true;
    }
    else if (descripcion != "") {
        if (descripcion.length < 3 || !isNaN(descripcion)) {
            $('#error').append('<h4>' + "La dirección introducida no es correcta" + '</h4>');
            error = true;
        }
        return false;
    }
    if (error == true)
        return false
    else {
        alert("El registro ha sido grabado correctamente");
        return true;
    }
}

function controlarEntradaPruebaCliente() {
    alert("El registro ha sido grabado correctamente");

    fecha = $("#fecha").val();
    diagnostico = $("#diagnostico").val();
    error = false;
    $("#error").html(""); //Borramos los mensajes de error anteriores, si los hubiera

    if (fecha == "" || diagnostico == "") {
        $('#error').append('<h4>' + "Los campos marcados con * son obligatorios" + '</h4>');
        error = true;
    }
    else if (diagnostico.length < 3 || diagnostico.length > 50) {
        $('#error').append('<h4>' + "El campo diagnostico solo acepta valores entre 3 y 50 caracteres" + '</h4>');
        error = true;
    }
    if (error == true) {
        alert("El registro ha sido grabado correctamente");
        return false;
    } else {
        alert("El registro ha sido grabado correctamente");
        return true;
    }

}


function controlarUsuario() { //No hacen falta parámetros usamos las variables
    nombre = $("#nombre").val();
    login = $("#login").val();
    pass = $("#pass").val();
    fecha = $("#fecha").val();

    error = false;
    $("#error").html(""); //Borramos los mensajes de error anteriores, si los hubiera

    if (nombre == "" || login == "" || pass == "" || fecha == "") {
        $('#error').append('<h4>' + "Los campos marcados con * son obligatorios" + '</h4>');
        error = true;
    }

    else if (nombre.length < 3 || login.length < 3 || email.length > 50 || login.length > 50
            || pass.length < 3 || pass.length > 50) {
        $('#error').append('<h4>' + "Los campos de nombre, login y pass solo aceptan valores entre 3 y 50 caracteres" + '</h4>');
        error = true;
    }
    return !error;
}


function validarEmail(email) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email)) {
        return false;
    } else {
        return true;
    }
}


function validarNIF(nif) {

    var letrasValidas = 'TRWAGMYFPDXBNJZSQVHLCKET';
    var nifRexp = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
    var nieRexp = /^[XYZ][0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
    var str = nif.toString().toUpperCase();
    if (!nifRexp.test(str) && !nieRexp.test(str)) {
        return false;
    }

    var nie = str
            .replace(/^[X]/, '0')
            .replace(/^[Y]/, '1')
            .replace(/^[Z]/, '2');
    var letra = str.substr(-1);
    var charIndex = parseInt(nie.substr(0, 8)) % 23;
    if (letrasValidas.charAt(charIndex) === letra) {
        return true;
    }

    return false;
}




function validarCIF(cif) {
    par = 0;
    non = 0;
    letras = "ABCDEFGHKLMNPQS";
    let = cif.charAt(0);
    if (cif.length != 9) {
//alert('El Cif debe tener 9 dígitos');
        return false;
    }

    if (letras.indexOf(let.toUpperCase()) == -1) {
//alert("El comienzo del Cif no es válido");
        return false;
    }

    for (zz = 2; zz < 8; zz += 2) {
        par = par + parseInt(cif.charAt(zz));
    }

    for (zz = 1; zz < 9; zz += 2) {
        nn = 2 * parseInt(cif.charAt(zz));
        if (nn > 9)
            nn = 1 + (nn - 10);
        non = non + nn;
    }

    parcial = par + non;
    control = (10 - (parcial % 10));
    if (control == 10)
        control = 0;
    if (control != cif.charAt(8)) {
//alert("El Cif no es válido");
        return false;
    }
//alert("El Cif es válido");
    return true;
}
