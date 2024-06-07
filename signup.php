<!DOCTYPE html>
<html lang="en">

<head>
    <title>HelpME</title>
    <?php require_once './fragments/links.php';
    renderLinks('signup'); ?>
</head>

<body>
    <?php require_once './fragments/header.php';
    renderHeader('signup'); ?>









    <section>
        <div class="caratula">


            <div class="form-container" style="    margin-top: 50px;"> <!-- Contenedor con bordes redondeados -->


                <form>
                    <h2>Crear cuenta</h2>


                    <div class="campo-1">
                        <input class="campo" type="text" placeholder="Nombres">



                        <input class="campo" type="text" placeholder="Apellidos">


                        <input class="campo" type="text" placeholder="Nombre de Usuario">

                    </div>

                    <div class="campo-1">
                        <p>
                            <input class="campo" type="email" placeholder="Correo">
                        </p>

                        <p>
                            <input type="date" class="campo">
                        </p>
                        <p>
                            <input type="phone" class="campo" placeholder="Telefono" pattern="\+\d{2}\s\d{9}">
                        </p>

                    </div>

                    <input type="submit" value="Crear" class="btn9">
                </form>
            </div>
        </div>
    </section>

    <?php require_once './fragments/footer.php'; ?>


</body>


</html>