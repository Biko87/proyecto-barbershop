<div class="barra">
    <p>Bienvenid@  <?php echo $nombre ?? ''; ?> &#x1f5c4;&#xfe0f;</p>
    <a class="boton" href="/logout">Cerrar Sesión &#9940;</a>
</div>

<?php if(isset($_SESSION['admin'])) { ?>
    <div class="barra-servicios">
        <a class="boton" href="/admin">Ver Citas</a>
        <a class="boton" href="/servicios">Ver Servicios</a>
        <a class="boton" href="/servicios/crear">Nuevo Servicio</a>
    </div>
<?php } ?>