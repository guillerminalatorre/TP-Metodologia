<?php require_once(VIEWS_PATH."navbar.php"); ?>
<div class="container">
    <div class="loginForm">
        <a class="btn btn-secondary" href="<?php echo FRONT_ROOT ?>Cine/ShowFichaView/<?php echo $idCine; ?>" role="button">Volver a ficha del cine</a>
        <?php require_once(VIEWS_PATH."alert.php"); ?>
        <form action="<?php echo FRONT_ROOT ?>Funcion/Add/<?php echo $idCine ?>" method="POST">
            <h2 class="text-left">Ingresa datos de la funcion: </h2>
            <br>
            <div class="row">
                <div class="form-group col-sm text-right">
                    <label for="idCine">Cine:</label>
                </div>
                <div>
                    <input type="text" class="form-control" name="idCine" readonly="readonly" value="<?php echo $idCine?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm text-right">
                    <label for="idPelicula">Id Pelicula:</label>
                </div>
                <div>
                    <input type="text" class="form-control" name="idPelicula" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm text-right">
                    <label for="fecha">Fecha:</label>
                </div>
                <div>
                    <input type="date" class="form-control" name="fecha" min="<?php echo date("Y-m-d")?>" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm text-right">
                    <label for="hora">Hora:</label>
                </div>
                <div>
                    <input type="time" class="form-control" name="hora"  required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm text-right">
                    <label for="cantEntradas">Cant. Entradas:</label>
                </div>
                <div>
                    <input type="number" class="form-control" name="cantEntradas" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm text-right">
                <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-plus-circle"></i> Agregar Funcion</button>
            </div>
        </form>
    </div>
</div>