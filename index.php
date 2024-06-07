<!DOCTYPE html>
<html lang="en">

<head>
    <title>HelpME</title>
    <?php require_once './fragments/links.php';
    renderLinks('index'); ?>

</head>

<body>

    <?php require_once './fragments/header.php';
    renderHeader('index'); ?>



    <main class="main">






        <div class="caratula">


            <h2 class="tituloCentral">HelpME</h2>
            <br>
            <h2 class="tituloSecundario">Aprovecha los millones de archivos compatidos por una comunidad global</h2>
            <br>
            <input type="text" class="inputBusqueda" placeholder="Busca tu archivo...">
            <br>
            <a href="login.php" class="botonCentral">Iniciar sesión</a>


        </div>


        <div class="row">

            <div class="col2im">
                <img class="imagen" src="img/Objetivos.webp" class="img-fluid z-depth-1-half" alt="">
            </div>
            <div class="col2">
                <h2 class="tituloTerciario">Nuestro Objetivo</h2>
                <br>
                <p class="parrafo">
                    Bienvenidos a Work Guides nuestro principal objetivo es apoyar a estudiantes como tú en su viaje
                    académico.
                    Nuestro objetivo es proporcionarte herramientas, recursos y orientación que te ayuden a alcanzar
                    tus metas educativas con confianza y éxito.
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col2im">
                <img class="imagen" src="img/desarrollo.png" class="img-fluid z-depth-1-half" alt="">
            </div>

            <div class="col2">
                <h2 class="tituloTerciario">Recursos de desarrollo personal y profesional</h2>
                <br>
                <p class="parrafo" id="nosotros">
                    Además de proporcionar ayuda académica, incluye recursos para el desarrollo personal y profesional
                    de los
                    estudiantes. Esto podría incluir consejos sobre gestión del tiempo, habilidades de comunicación,
                    técnicas
                    de estudio efectivas, orientación profesional, entre otros.
                </p>
            </div>
        </div>



        <div class="row">

            <div class="col1">
                <h2 class="tituloCentral" style="color: black; text-align: center;">Nuestros servicios</h2>
                <!--CARACTERISTICAS (NUESTROS SERVICIOS)-->

                <br>

                <p class="parrafo2">
                    En WorkGuides, nos enorgullece ofrecer una amplia gama de servicios diseñados para apoyar a los
                    estudiantes en
                    su viaje académico. Nuestra plataforma está diseñada para brindar ayuda y orientación en una
                    variedad de áreas,
                    incluyendo recursos académicos,tutoría personalizada,comunidad de aprendizaje,desarrollo personal y
                    profesional,
                    actualizaciones y novedades ¡Únete a nuestra comunidad hoy y descubre cómo podemos ayudarte en tu
                    viaje educativo!
                </p>



            </div>
        </div>




        <div>
            <div class="box-container">

                <div class="box">
                    <div class="box1">
                        <h3>Contáctenos</h3>
                    </div>
                    <div class="box2">
                        <i class="fas fa-phone"></i>

                        <p>922382875</p>
                        <a target="_blank" href="#" class="btn4">Escríbenos</a>

                    </div>

                </div>




                <div class="box">


                    <div class="box1">
                        <h3>Reclamos</h3>
                    </div>
                    <div class="box2">
                        <i class="fas fa-exclamation-triangle"></i>

                        <p>“Siéntete en total confianza de reclamar algún documento o injusticia en caso se de”</p>
                        <a target="_blank" href="#" class="btn5">Has tu reclamo</a>

                    </div>
                </div>




                <div class="box">


                    <div class="box1">
                        <h3>Búscanos en Google</h3>
                    </div>

                    <div class="box2">
                        <i class="fab fa-google"></i>

                        <p>Puedes buscarnos en google como Work Guides , tu sitio de confianza</p>
                        <a target="_blank" href="#" class="btn6">Google</a>

                    </div>
                </div>




                <div class="box">


                    <div class="box1">
                        <h3>Compra un documento</h3>
                    </div>
                    <div class="box2">
                        <i class="fas fa-file-contract"></i>

                        <p>Puedes Comprar documentos de investigaciones</p>
                        <a target="_blank" href="#" class="btn7">Comprar</a>

                    </div>
                </div>



            </div>
        </div>






        <div class="row" style="padding-bottom: 50px;">

            <div class="col2im">
                <img class="imagen" src="img/pagos.avif" class="img-fluid z-depth-1-half" alt="">
            </div>
            <div class="col2">
                <h2 class="tituloTerciario">Acerca de los pagos</h2>
                <br>
                <p class="parrafo">
                    WorkGuides Premium es mucho más que leer documentos.Se trata de mejorar tus calificaciones 📚
                    Compara planes y conviértete en Premium ahora:<br>
                <table class="parrafo">
                    <tr>
                        <th>Prize</th>
                        <th style="margin-right:120px;">Days</th>
                        <th>Benefits</th>
                    </tr>
                    <tr>
                        <td>Free</td>
                        <td style="margin-left: 50px;">1 day</td>
                        <td>
                            <ul>
                                <li>Leer 5 documentos gratuitos</li>
                                <li>Leer 5 documentos Premium</li>
                                <li>Descargar 5 Documentos</li>
                            </ul>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>Premium</td>
                        <td>30 days</td>
                        <td>
                            <ul>
                                <li>Leer documentos gratuitos</li>
                                <li>Leer documentos Premium</li>
                                <li>Descargar Documentos</li>
                            </ul>
                            <br>
                        </td>
                    </tr>
                </table>
                </p>
            </div>
        </div>
    </main>

    <?php require_once './fragments/footer.php'; ?>

</body>

</html>