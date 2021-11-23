<link rel="stylesheet" href="css/cards.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../bootstrap-5.1.1-dist/css/bootstrap.min.css">


<?php
include("../_global/conexionBuscar.php");
include "../php/carrito.php";



$buscardor = mysqli_query($conexion, "SELECT * FROM productos WHERE nombre LIKE LOWER('%" . $_POST["buscar"] . "%') OR marca LIKE LOWER ('%" . $_POST["buscar"] . "%') ");
$numero = mysqli_num_rows($buscardor);

/*------numero total de registros en la tabla ----*/
$sql = "SELECT * FROM productos";
$result = mysqli_query($conexion,$sql);
$numeroProductos = mysqli_num_rows($result);
?>

<?php

if ($numero == $numeroProductos) {
    echo ' ';
} else {
    while ($producto = mysqli_fetch_assoc($buscardor)) { ?>
        <div class="col-lg-12 tm-bg-black-transparent ">

            <div class="container" style="width: 100%; height: 175px ">
                <button onclick="location.href='php/mostrarCarrito.php'">
                    <div class="w-45 h-100 my-auto  p-5 productImagen">
                        <img src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $producto['nombre'] ?>_I1.jpg?raw=true" style="width: 70px; height: 70px;">
                    </div>

                </button>
                <div class="w-25 h-100 my-auto productNombre">
                    <h5 style="line-height: 160px"><?php echo $producto['nombre'] ?></h5>
                </div>

                <div class="w-25 h-100 my-auto  productPrecio">
                    <h5 style="line-height: 160px">$ <?php echo $producto['precio'] ?></h5>
                </div>

                <div class="w-5 h-100 my-auto productDelete">
                    <form action="" method="POST">
                        <input type="hidden" id="id" name="id" value="<?php echo (openssl_encrypt($producto['id'], COD, KEY)); ?>">
                        <button type="submit" name="btnAccion" value="Eliminar" style="border: none; line-height: 160px; background:transparent;"><i class="fas fa-trash-alt" style=" font-size: 25px; color:#E7264C "></i></button>
                    </form>
                </div>
            </div>
        </div>

<?php
    }
}

?>
