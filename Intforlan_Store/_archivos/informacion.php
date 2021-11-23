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
    <link rel="stylesheet" href="../css/informacion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<?php
$sentencia = $pdo->prepare("SELECT * FROM `computadora`");

$sentencia->execute();
$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<body>
    <div class="presentacion">
        <div id="carouselExampleInterval" class="img carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img class="imgItem" src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $nombre ?>_I1.jpg?raw=true" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img class="imgItem" src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $nombre ?>_I2.jpg?raw=true" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="imgItem" src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $nombre ?>_I3.jpg?raw=true" class="d-block w-100" alt="...">
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
        <div class="producto-info  tm-bg-black-transparent">
            <div class="producto-texto">
                <h1><?php echo $nombre ?></h1>
                <h2><?php echo $marca ."    ".$precio."$" ?> </h2>

                <b style="display: inline;"> <p style="display: inline;">Peso:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $peso?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Modelo:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $modelo?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Procesador:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $procesador?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Memoria:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $memoria?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Ranuras Memoria:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $ranurasMemoria?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Disco Duro:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $discoDuro?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Sistema Operativo:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $sistemaOperativo?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Graficos:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $graficos?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Puertos:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $puertos?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Sonido:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $sonido?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Color:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $color?></p><br>
                <b style="display: inline;"> <p style="display: inline;">Garantia:</p></b> <p style = "display: inline; height: 20px;" ><?php echo $garantia?></p><br>
            </div>
            <div class="volverAtras">
               <br><br><a style="color: 2D8FEB; text-decoration:none; text-align: center;     font-family: sans-serif;
    text-transform: uppercase;
    letter-spacing: .2em;" href="javascript:history.back()" >Volver</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <form action="../php/mostrarCarrito.php" method="POST" class="formCard tm-call-to-action-form">
					       <br><br><br><br><br><br><br> <button style="background: #2D8FEB; border-color: white; height: 58px; color: white;
    width: 150px;border-radius: 15px;" onclick="location.href='../php/carrito.php'" type="submit" name="btnAccion" value="Agregar" type="submit">Agregar<img src="../img/cart icon.png" alt="x" /></button>
                        
                    <input class="imputDisplay" style="display: none;"  name="id" id="id" value="<?php echo (openssl_encrypt($id, COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" style="display: none;"  name="nombre" id="nombre" value="<?php echo (openssl_encrypt($nombre, COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" style="display: none;"  name="marca" id="marca" value="<?php echo (openssl_encrypt($marca, COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay"  style="display: none;" name="categoria" id="categoria" value="<?php echo (openssl_encrypt($categoria, COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" style="display: none;"  name="precio" id="precio" value="<?php echo (openssl_encrypt($precio, COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" style="display: none;"  name="imagen" id="imagen" value="<?php echo (openssl_encrypt($imagen, COD, KEY)); ?>">
                    <br>
                    <input class="imputDisplay" style="display: none;"  name="fecha" id="fecha" value="<?php echo (openssl_encrypt($fecha, COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay"  style="display: none;" name="cantidad" id="cantidad" value="<?php echo (openssl_encrypt(1, COD, KEY)) ?>" ;>
                
					
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>