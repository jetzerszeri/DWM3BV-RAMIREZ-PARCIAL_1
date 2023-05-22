<?php
require_once 'libs/catalogos.php';

$generosolicitado =  $_GET['genero'];
$generosolicitado = $generosolicitado ? $generosolicitado : 'todos';


$libros = obetenerCatalogoLibros();

if ($generosolicitado == 'todos'){
    $genero = $libros;
} else {
    $genero = filtrarPorGenero($libros, $generosolicitado);
};

?>
<script>
    console.log("genero: ", <?=json_encode($genero)?>);
</script>

<main>

<header>
    <p class="breadcumbs"><a href="index.php">Inicio</a> > Categorías</p>

    <ul>
        <li><a href="index.php?seccion=categorias&genero=ficcion">Ficción</a></li>
        <li><a href="index.php?seccion=categorias&genero=misterio">Misterio</a></li>
        <li><a href="index.php?seccion=categorias&genero=fantasia">Fantasía</a></li>
        <li><a href="index.php?seccion=categorias&genero=terror">Teror</a></li>
        <li><a href="index.php?seccion=categorias&genero=comics">Comics</a></li>
        <li><a href="index.php?seccion=categorias&genero=romance">Romance</a></li>
    </ul>

    <h1>Libros de <?= $generosolicitado ?></h1>
    <p>19 productos encontrados</p>
<header>

<div>
    <ul class="listadelibros">

        <?php foreach ($genero as $libro) { ?>
            <li>
                <img src="<?= $libro['imagen'] ?>" alt="Portada del libro <?= $libro['nombre'] ?>">
                <div>
                    <ul>
                        <li><h2><?= $libro['nombre'] ?><h2></li>
                        <li><?= $libro['autor'] ?></li>
                        <li>$<?= $libro['precio'] ?> USD</li>
                        <a href="index.php?seccion=detalles&id=<?= $libro['id'] ?>" class="btn">Ver detalles</a>
                    </ul>
                </div>
            </li>
        <?php } ?>

</ul>

</div>


</main>