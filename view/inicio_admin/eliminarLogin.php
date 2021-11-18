<title><?= "Tienda de ropa" ?></title>
<?php
require_once("../structure/Header.php");
$datos = data_submited();
$id = $datos['userDelete'];
//HEADER============================================================================
?>

<div class="row my-5">
    <form class="mb-5" id="eliminarLogin" method="POST" action="abmUsuario.php">
        <div class="d-flex justify-content-center">
            <?php
            echo "<input class='d-none' id='idusuario' name='idusuario' type='hidden' value='" . $id . "'>";
            echo "<div class='card text-center border border-3 border-primary' style='width: 25rem;'>
                <div class='card-body'>
                    <h4 class='card-title'>¡Atención!</h4>
                    <p class='card-text'>¿Realmente desea eliminar este usuario?</p>
                    <button href='#' class='btn btn-primary' id='accion' name='accion' type='submit' value='deshabilitar' style='width: 3rem;'>Sí</button>
                    <button href='#' class='btn btn-primary' id='accion' name='accion' type='submit' value='noAccion' style='width: 3rem;'>No</button>
                </div>
            </div>";
            ?>
        </div>
    </form>
    <!-- Botones -->
    <div class="mb-5">
        <a class="btn btn-dark" href="listarUsuarios.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
    </div>
</div>


<?php
//FOOTER============================================================================
require_once("../structure/footer.php");
?>