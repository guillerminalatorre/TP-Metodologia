    <?php

    require_once 'anon-navbar.php';

    ?>

    <div class="container">
        <div class="loginForm">
            <form action="<?php echo FRONT_ROOT ?>Usuario/Register" method="POST">
                <a class="btn btn-secondary" href="<?php echo FRONT_ROOT ?>Usuario/ShowLoginView" role="button">Volver a login</a>
                <h2 class="text-left">Ingresa tus datos: </h2>
                <br>
                <div class="row">
                    <div class="form-group col-sm text-right">
                        <label for="dni">Dni:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="dni" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm text-right">
                        <label for="nombre">Nombre:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm text-right">
                        <label for="apellido">Apellido:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="apellido" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm text-right">
                        <label for="email">Email:</label>
                    </div>
                    <div>
                        <input type="email" class="form-control" name="email" placeholder="example@example.com" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm text-right">
                        <label for="contraseña">Contraseña:</label>
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group col-sm text-right">
                        <label for="contaseña_dos">Repite tu contraseña:</label>
                    </div>
                    <div>
                        <input type="password" class="form-control" name="confirmpassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Crear cuenta</button>
            </form>
            <br>
            <button class="btn btn-primary btn-lg btn-block mt-3"><i class="fab fa-facebook-f"></i> Iniciar sesion con Facebook</button>
        </div>