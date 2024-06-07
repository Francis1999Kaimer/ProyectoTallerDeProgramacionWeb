function validarUsuario(usuario, clave) {

    if (usuario === "admin" && clave === "123456") {
        return true;   
    } else {
        return false; 
    }
}


function iniciarSesion() {

    var usuario = document.getElementById("usuario").value;
    var clave = document.getElementById("clave").value;
    
    if (validarUsuario(usuario, clave)) {
        window.location.href = "ingreso.php";
        alert("¡Bienvenido, " + usuario + "!"); 
    } else {
        alert("Usuario o contraseña incorrectos. Por favor, inténtelo de nuevo.");
    } 
}
