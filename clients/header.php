<header>

    <a href="<?php echo $relativePath?>.">
        <div class="logo">FRIXIO</div>
    </a>

    <nav>

    </nav>

    <div class="user-menu">
        <span><?php echo $_SESSION["frixio-user"]["name"]?></span>
        <div class="arrow-down"></div>
        <div class="user-menu-div">
            <a href="<?php echo $relativePath?>change-pass/">
                <div>Cambiar Contraseña</div>
            </a>
            <a href="<?php echo $relativePath?>login/logout.php">
                <div>Cerrar Sesión</div>
            </a>
        </div>
    </div>

</header>



