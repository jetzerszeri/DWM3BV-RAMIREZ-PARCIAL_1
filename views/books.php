<?php
require_once 'libs/catalogos.php';

$libros = obetenerCatalogoLibros();

?>



<main>
        <header>
            <p class="breadcumbs"><a href="index.php?seccion=home">Inicio</a> > Todos los libros</p>
            <h1><span>Explora</span> Todos los libros</h1>
        <header>

        <div>
            <ul class="listadelibros">

            <?php foreach ($libros as $libro) { ?>
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