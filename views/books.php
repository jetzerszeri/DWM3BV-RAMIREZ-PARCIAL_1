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



<main>
        <header>
            <p class="breadcumbs"><a href="index.php?seccion=home">Inicio</a> > Todos los libros</p>
            <h1><span>Explora</span> Todos los libros</h1>
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