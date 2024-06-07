<!DOCTYPE html>
<html lang="en">

<head>
    <title>HelpME</title>
    <?php require_once './fragments/links.php';
    renderLinks('login'); ?>
</head>
<body>
    <?php require_once './fragments/header.php';
    renderHeader('login'); ?>

    <section> 
        <div class="caratula">

            <div class="form-container"> 
                <form>
                    <h2>Iniciar sesión</h2>
                    <div class="campo-1">
                        <p>
                            <input class="campo" id="usuario" type="text" placeholder="Nombre de Usuario">
                        </p>
                        <p>
                            <input class="campo" id="clave" type="password" placeholder="Contraseña">
                        </p>
                    </div>
                    <input class="btn9" type="submit" value="Ingresar" onclick="iniciarSesion()">
                    <br>
                    <input class="btnOl" type="button" value="Olvide la contraseña">
                </form>
            </div>
        </div>
    </section>
    <?php require_once './fragments/footer.php'; ?>
</body>
</html>