<title><?= "Tienda de ropa" ?></title>
<?php
require_once("../structure/Header.php");
//HEADER============================================================================
?>

<div class="container">


    <div align="center">
        <h2 class="mt-5">Cuenta</h2>
    </div>

    <div>
        <div align="center">
            <!-- Botones -->
            <button onclick="location.href='./cerrarSesion.php'" class="btn btn-dark">Cerrar Sesion</button>

            <?php
            $sesion = new Session();
            $rol = $sesion->obtenerRol();
            $cliente = $sesion->arrayRolesUser($rol);
            $type = "hidden";
            //var_dum($sesion->getIdUser());

            $usuario = new AbmUsuario();
            $idUsuario = [];
            $idUsuario['idusuario'] = $sesion->getIdUser();
            $user = $usuario->buscar($idUsuario);
            //var_dump($user);
            $mail = $user[0]->getusmail();
            //var_dum($mail);
            
            if ($cliente['Cliente'] == true) {
                $ref = "miscompras.php";
                $type = "button";
                //echo '<button  class="btn btn-dark" onclick="location.href="./cerrarSesion.php"">Mis Compras</button>'; 

                //CAMBIAR LA RUTA!!!!!!!!!!!!!-------------------------------------------------------------------------------------------------------------
                echo '<br><br><input type="text" id="emailCambio" name="emailCambio" placeholder="Nuevo Email" value="'.$mail. '"> '; 
                echo "<button class='btn btn-light' formaction='' id='accion' name='accion' value='editar'>Cambiar email</button><br><br>";
            }

            ?>
            <!-- <button class="btn btn-dark" onclick="location.href='misCompras.php'">Mis Compras</button> -->
            <input type="<?=$type?>" value="Mis Compras" class="btn btn-dark" onclick="location.href='<?=$ref?>'">
            

        </div>
        <br><br>
    </div>




</div>


<?php
//FOOTER============================================================================
require_once("../structure/footer.php");
?>