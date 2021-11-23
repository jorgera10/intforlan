<?php
include "../_global/conexionBuscar.php";
include "../_global/config.php";
include "../_global/conexion.php";
include "../php/carrito.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM `computadora` WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $nombre  = $row['nombre'];
        $marca  = $row['marca'];
        $categoria  = $row['categoria'];
        $subcategoria  = $row['subcategoria'];
        $subcategoria2  = $row['subcategoria2'];
        $estado  = $row['Estado'];
        $peso  = $row['Peso'];
        $modelo  = $row['Modelo'];
        $procesador  = $row['Procesador'];
        $memoria  = $row['Memoria'];
        $ranurasMemoria  = $row['Ranuras memoria'];
        $discoDuro = $row['Disco duro'];
        $sistemaOperativo  = $row['Sistema operativo'];
        $graficos  = $row['Graficos'];
        $puertos  = $row['Puertos'];
        $sonido  = $row['Sonido'];
        $color  = $row['Color'];
        $garantia  = $row['Garantia'];
        $precio  = $row['precio'];
        $disponible  = $row['Disponible'];
        $imagen  = $row['imagen'];
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
</head>

<?php
$sentencia = $pdo->prepare("SELECT * FROM `computadora`");

$sentencia->execute();
$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<body>

    <div class="container my-auto">
        <div class="row">
            <div class="column img col-12 col-sm-6 ">
                <h1>chao</h1>
            </div>
            <div class="column info col-12 col-sm-6 ">
                <h1>hola</h1>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>