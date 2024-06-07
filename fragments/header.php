<?php
function renderHeader($page) {
    ?>
    <header id="main-header" class="header">
        <h1 class="h1LogoImagen1">
            <img src="img/svg/bombilla.svg" height="35">
        </h1>
        <div class="logo">
            <h1 class="h1LogoImagen2">
                <img src="img/svg/bombilla.svg" height="35">
            </h1>
            <h1 class="h1LogoTexto">
                <a href="index.php" class="a">HELP ME</a>
            </h1>
        </div>
        <button class="button">
            <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <nav class="nav">
            <ul class="ul">
                <?php if ($page === 'contacto') : ?>
                    <li class="li"><a href="index.php" class="a">Inicio</a></li>
                    <li class="li"><a href="dashboard.php" class="a">Dashboard</a></li>
                    <li class="li"><a href="index.php#nosotros" class="a">Nosotros</a></li>
                    <li class="li"><a href="login.php" class="a">Iniciar sesión</a></li>
                    <li class="li"><a href="signup.php" class="a">Crear Cuenta</a></li>
                
                <?php endif; ?>
                
                <?php if ($page === 'dashboard') : ?>
                    <li class="li"><a href="index.php" class="a">Inicio</a></li>
                    <li class="li"><a href="dashboard.php" class="a">Dashboard</a></li>
                    <li class="li"><a href="index.php#nosotros" class="a">Nosotros</a></li>
                    <li class="li"><a href="contacto.php" class="a">Contacto</a></li>
                    <li class="li"><a href="login.php" class="a">Iniciar sesión</a></li>
                    <li class="li"><a href="signup.php" class="a">Crear Cuenta</a></li>
                <?php endif; ?>
                
                <?php if ($page === 'index') : ?>
                    <li class="li"><a href="dashboard.php" class="a">Dashboard</a></li>
                    <li class="li"><a href="#nosotros" class="a">Nosotros</a></li>
                    <li class="li"><a href="contacto.php" class="a">Contacto</a></li>
                    <li class="li"><a href="login.php" class="a">Iniciar sesión</a></li>
                    <li class="li"><a href="signup.php" class="a">Crear Cuenta</a></li>
                <?php endif; ?>
                
                <?php if ($page === 'ingreso') : ?>
                    <li class="li"><a href="index.php" class="a">Inicio</a></li>
                    <li class="li"><a href="dashboard.php" class="a">Dashboard</a></li>
                    <li class="li"><a href="index.php#nosotros" class="a">Nosotros</a></li>
                    <li class="li"><a href="contacto.php" class="a">Contacto</a></li>
                    <li class="li"><a href="login.php" class="a">Cerrar sesión</a></li>

                <?php endif; ?>
                <?php if ($page === 'login') : ?>
                    <li class="li"><a href="index.php" class="a">Inicio</a></li>
                    <li class="li"><a href="dashboard.php" class="a">Dashboard</a></li>
                    <li class="li"><a href="index.php#nosotros" class="a">Nosotros</a></li>
                    <li class="li"><a href="contacto.php" class="a">Contacto</a></li>
                    <li class="li"><a href="signup.php" class="a">Crear Cuenta</a></li>
          
                <?php endif; ?>
                
                <?php if ($page === 'signup') : ?>
                    <li class="li"><a href="index.php" class="a">Inicio</a></li>
                <li class="li"><a href="dashboard.php" class="a">Dashboard</a></li>
                <li class="li"><a href="index.php#nosotros" class="a">Nosotros</a></li>
                <li class="li"><a href="contacto.php" class="a">Contacto</a></li>
                <li class="li"><a href="login.php" class="a">Iniciar sesión</a></li>
           
                <?php endif; ?>
                
                <?php if ($page === 'visorPdf') : ?>
                    <li class="li"><a href="index.php" class="a">Inicio</a></li>
                    <li class="li"><a href="dashboard.php" class="a">Dashboard</a></li>
                    <li class="li"><a href="index.php#nosotros" class="a">Nosotros</a></li>
                    <li class="li"><a href="contacto.php" class="a">Contacto</a></li>
                    <li class="li"><a href="login.php" class="a">Cerrar sesión</a></li>
                   
                <?php endif; ?>
        


                </ul>
                
        </nav>
    </header>
    <?php
}
?>
