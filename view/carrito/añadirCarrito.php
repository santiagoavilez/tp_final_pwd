<?php
require_once("../structure/Header.php");
//HEADER============================================================================
$sesion = new Session();
$dir = "../inicio_cliente/index.php";
$rol = "Cliente";
$sesion->permisoAcceso($dir, $rol);

$datos = data_submited();
$carrito = new Carrito();
$carrito -> aniadirCarrito($datos);
#Cargo la informacion que cargo en el formulario cuando ingreso un carrito










//FOOTER============================================================================
require_once("../structure/footer.php");
?>