<div class="container container-fluid mt-4">
    <h2>Selecciona un usuario para operar:</h2>
    <?php foreach ($usuarioList as $usuario) { ?>
            <button type="button" class="btn btn-info btn-block" href="ficha-cine.php" value = "<?php $usuario->getId();?>"><?php echo $usuario->getApellido();?>, <?php echo $usuario->getNombre();?></button>
        <hr>
    <?php } ?>
</div>