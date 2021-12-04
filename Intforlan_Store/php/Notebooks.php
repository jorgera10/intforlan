<?php include '../_templates/headerProducto.php' ?>

<?php
/*$query = mysqli_query($conexion, "SELECT nombre FROM productos");*/

$sentencia = $pdo->prepare("SELECT * FROM `computadora` WHERE subcategoria2 = 'NoteBooks'"); //aqui
$sentencia->execute();

$result = $sentencia->fetchAll();

$productsPage = 8; //products for page
$totalProducts = $sentencia->rowCount();
$totalPages = ceil($totalProducts / $productsPage);
?>

<?php
if (!$_GET) {
    //header('Location:computadoras.php?pages=1');
    echo '<meta http-equiv="refresh" content="50000000;url=Notebooks.php?pages=1">'; //aqui
}

if ($_GET['pages'] < 1 || $_GET['pages'] > $totalPages) {
    //header('Location:computadoras.php?pages=1');
    echo '<meta http-equiv="refresh" content="0;url=Notebooks.php?pages=1">'; //aqui
}
?>

<?php

//productos por pagina 

$start = ($_GET['pages'] - 1) * $productsPage;

$sql_articles = "SELECT * FROM computadora WHERE subcategoria2 = 'NoteBooks' LIMIT :Start, :ProductsPage"; //limit dice que del articulo tal a tal articulo //aqui
$sentencia_articles = $pdo->prepare($sql_articles);
$sentencia_articles->bindParam(':Start', $start, PDO::PARAM_INT);
$sentencia_articles->bindParam(':ProductsPage', $productsPage, PDO::PARAM_INT);
$sentencia_articles->execute();

$result_articles = $sentencia_articles->fetchAll();

?>


<?php foreach ($result_articles as $producto) { ?>

<div class="container col-12 col-xl-3 col-md-4 col-lg-3 col-xl-2  mb-5">
    <div class="card tm-bg-black-transparent contenedor">

        <a href="../_archivos/informacion.php?id=<?php echo $producto['id'] ?>"><img alt="<?php echo $producto['nombre']; ?>" title="<?php echo $producto['nombre']; ?>" src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $producto['nombre'] ?>_I1.jpg?raw=true" data-content=<?php echo $producto['descripcion']; ?>></h3></a>

        <div class="accordion accordion-flush tm-bg-black-transparent" id="accordionFlushExample">
            <div class="accordion-item">
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="color: black;">
                        <h6 style="font-size: 13px; text-align: justify;"><?php echo $producto['descripcion']; ?></h6>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <a href="../_archivos/informacion.php?id=<?php echo $producto['id'] ?>">
            <h3 style='color: #ffffff'><?php echo $producto['nombre']; ?></h3>
        </a>

        <h4 class="btnPrecio tm-about-description justify-content-end"> $
            <?php echo $producto['precio']; ?>
        </h4>

        <form action="" method="POST" class="formCard tm-call-to-action-form">

            <input class="imputDisplay" name="id" id="id" value="<?php echo (openssl_encrypt($producto['id'], COD, KEY)); ?>">
            <br>

            <input class="imputDisplay" name="nombre" id="nombre" value="<?php echo (openssl_encrypt($producto['nombre'], COD, KEY)); ?>">
            <br>

            <input class="imputDisplay" name="marca" id="marca" value="<?php echo (openssl_encrypt($producto['marca'], COD, KEY)); ?>">
            <br>

            <input class="imputDisplay" name="categoria" id="categoria" value="<?php echo (openssl_encrypt($producto['categoria'], COD, KEY)); ?>">
            <br>

            <input class="imputDisplay" name="precio" id="precio" value="<?php echo (openssl_encrypt($producto['precio'], COD, KEY)); ?>">
            <br>

            <input class="imputDisplay" name="imagen" id="imagen" value="<?php echo (openssl_encrypt($producto['imagen'], COD, KEY)); ?>">
            <br>
            <input class="imputDisplay" name="fecha" id="fecha" value="<?php echo (openssl_encrypt($producto['fecha'], COD, KEY)); ?>">
            <br>

            <input class="imputDisplay" name="cantidad" id="cantidad" value="<?php echo (openssl_encrypt(1, COD, KEY)) ?>" ;>
            <br>

            <div class="btnContent" style="position: absolute; ">
                <button type="submit" style="position: absolute; text-align: center; justify-content: center;" onclick="alerta()" class="btn btnCard" name="btnAccion" value="Agregar" type="submit">
                    Agregar
                </button>
            </div>
        </form>

    </div>
</div>
<?php } echo $estado; ?>
</section>








<nav aria-label="Page navigation d-flex justify-content-center navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
    <ul class="pagination d-flex justify-content-center tm-bg-white-transparent "  >
        <li class=" tm-bg-white-transparent page-item <?php echo $_GET['pages'] <= 1 ? 'disabled' : '' ?> "><a class=" page-link" href="Notebooks.php?pages=<?php echo $_GET['pages'] - 1 ?>">Anterior</a></li>

        <?php for ($i = 0; $i < $totalPages; $i++) { ?>
            <li class="tm-bg-white-transparent page-item <?php echo $_GET['pages'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="Notebooks.php?pages=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
        <?php } ?>

        <li class="tm-bg-white-transparent page-item <?php echo $_GET['pages'] >= $totalPages ? 'disabled' : '' ?>"><a class=" page-link" href="Notebooks.php?pages=<?php echo $_GET['pages'] + 1 ?>">Siguiente</a></li>
    </ul>
</nav>

</body>


<?php
include "../_templates/footer.php";
?>