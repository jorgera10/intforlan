<?php
include "../_global/conexionBuscar.php";
include "../_global/config.php";
include "../_global/conexion.php";
include "../php/carrito.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM `pedestales` WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $CodPED = $row['CodigoPED'];
        $nombre  = $row['nombre'];
        $marca  = $row['marca'];
        $categoria  = $row['categoria'];
        $subcategoria  = $row['subcategoria'];
        $descripcion  = $row['descripcion'];
        $estado  = $row['estado'];
        $color = $row["color"];
        $precio = $row["precio"];
        $disponible = $row["Disponible"];
        $imagen = $row["imagen"];

        echo $nombre;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $nombre ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/informacionProducts.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<?php
$sentencia = $pdo->prepare("SELECT * FROM `pedestales`");

$sentencia->execute();
$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<body>

    <div class="container my-auto">
        <div class="row">
            <div class="column img col-12 col-sm-6 ">
                <div id="carouselExampleInterval" class="img carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img class="imgItem img-fluid" src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $nombre ?>_I1.jpg?raw=true" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="imgItem img-fluid" src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $nombre ?>_I2.jpg?raw=true" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="imgItem img-fluid" src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $nombre ?>_I3.jpg?raw=true" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


            <div class="column info col-12 col-sm-6 ">
                <div class="producto-texto">
                    <h1><?php echo $nombre ?></h1>
                    <h3><?php echo $marca . "    " . $precio . "$" ?> </h3>
                    <br><br>
                    <p>Descripcion:</p>
                    <p><?php echo $descripcion ?></p><br>
                    <br>

                    <p>Estado:</p>
                    <p><?php echo $estado ?></p><br>
                    <br>

                    <p>Color:</p>
                    <p><?php echo $color ?></p><br>

                    <br>
                    <br><br>
                    <div class="containerBtn d-flex justify-content-evenly">
                        <a type="button" class="btn btn-outline-primary" href="javascript:history.back()">Volver</a>

                        <form action="../php/mostrarCarrito.php" method="POST" class="formCard tm-call-to-action-form">
                            <button onclick="location.href='../php/carrito.php'" type="submit" name="btnAccion" value="Agregar" class="btn btn-outline-primary">Agregar <i class="fas fa-cart-plus"></i> </button>

                            <input class="imputDisplay" style="display: none;" name="id" id="id" value="<?php echo (openssl_encrypt($id, COD, KEY)); ?>">
                            <br>

                            <input class="imputDisplay" style="display: none;" name="nombre" id="nombre" value="<?php echo (openssl_encrypt($nombre, COD, KEY)); ?>">
                            <br>

                            <input class="imputDisplay" style="display: none;" name="marca" id="marca" value="<?php echo (openssl_encrypt($marca, COD, KEY)); ?>">
                            <br>

                            <input class="imputDisplay" style="display: none;" name="categoria" id="categoria" value="<?php echo (openssl_encrypt($categoria, COD, KEY)); ?>">
                            <br>

                            <input class="imputDisplay" style="display: none;" name="precio" id="precio" value="<?php echo (openssl_encrypt($precio, COD, KEY)); ?>">
                            <br>

                            <input class="imputDisplay" style="display: none;" name="imagen" id="imagen" value="<?php echo (openssl_encrypt($imagen, COD, KEY)); ?>">
                            <br>
                            <input class="imputDisplay" style="display: none;" name="fecha" id="fecha" value="<?php echo (openssl_encrypt($fecha, COD, KEY)); ?>">
                            <br>

                            <input class="imputDisplay" style="display: none;" name="cantidad" id="cantidad" value="<?php echo (openssl_encrypt(1, COD, KEY)) ?>" ;>


                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>