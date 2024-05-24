

// Función para validar el usuario y la contraseña
function validarUsuario(usuario, clave) {
    // Comprobar si el usuario y la clave coinciden con los valores esperados
    if (usuario === "admin" && clave === "123456") {
        // Si coinciden, devolver verdadero
        return true;
    } else {
        // Si no coinciden, devolver falso
        return false;
    }
}

// Función para manejar el inicio de sesión
function iniciarSesion() {
    // Obtener los valores del usuario y la contraseña del formulario de inicio de sesión
    var usuario = document.getElementById("usuario").value;
    var clave = document.getElementById("clave").value;

    // Validar el usuario y la contraseña
    if (validarUsuario(usuario, clave)) {
        // Si son válidos, mostrar un mensaje de bienvenida
        window.location.href = "ingreso.html";
        alert("¡Bienvenido, " + usuario + "!");
    } else {
        // Si no son válidos, mostrar un mensaje de error
        alert("Usuario o contraseña incorrectos. Por favor, inténtelo de nuevo.");
    }
}
