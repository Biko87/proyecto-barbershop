<h1 class="nombre-pagina">Actualizar Servicio</h1>
<p class="descripcion-pagina">Modifica los valores del formulario</p>

<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton" value="Actualizar">
</form>

<div class="paginacion">
    <a href="/admin" id="anterior" class="boton">&laquo; Anterior</a>
</div>