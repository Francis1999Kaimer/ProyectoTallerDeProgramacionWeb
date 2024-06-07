<!DOCTYPE html>
<html lang="en">

<head>
    <title>HelpME</title>
    <?php require_once './fragments/links.php';
    renderLinks('contacto'); ?>
</head>

<body>
    <?php require_once './fragments/header.php';
    renderHeader('contacto'); ?>


    <section>

        <div class="caratula">
            <div class="form-container">
                <h2>Envianos <br> un mensaje</h2>
                <form>
                    <div class="campo-1">
                        <p>
                            <input class="campo" type="text" placeholder="Nombre">
                        </p>
                        <p>
                            <input class="campo" type="email" placeholder="Correo">
                        </p>

                        <p>
                            <textarea class="multilinea" id="msg" name="user_message"
                                placeholder="Escribenos..."></textarea>
                        </p>
                    </div>

                    <input type="submit" value="Enviar" class="btn9">
                </form>
            </div>

        </div>





    </section>

    <?php require_once './fragments/footer.php'; ?>

</body>



</html>