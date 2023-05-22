<?php
$id = $_GET['id'];

function obetenerCatalogoLibros() {
    $content = file_get_contents('data/info.json');
    $data = json_decode($content, true);
    return $data['libros'];
};

$libros = obetenerCatalogoLibros();

$libro = $libros[$id];
?>




<main>

<p class="breadcumbs"><a href="index.php?seccion=home">Inicio</a> > <a href="#">Categorías</a> > <a href="#">Distopía</a> > Los juegos del hambre</p>

<div class="detalles">
    <img src="<?= $libro['imagen'] ?>" alt="Tapa del libro <?= $libro['nombre'] ?>">
    <div>
        <div>
            <p><?= $libro['autor'] ?></p>
            <h1><?= $libro['nombre'] ?></h1>
            <p>Género: <?= $libro['genero'] ?></p>
            <p>$<?= $libro['precio'] ?> usd</p>
            <button>Agregar al carrito</button>
        </div>

        <h2>Descripción</h2>
        <p><?= $libro['descripcion'] ?></p>

        <h2>Detalles del producto</h2>
        <ul>
            <li><span>Publicación:</span> <?= $libro['publicacion'] ?></li>
            <li><span>Editorial:</span> <?= $libro['editorial'] ?></li>
            <li><span>Idioma:</span> <?= $libro['idioma'] ?></li>
            <li><span>Páginas:</span> <?= $libro['paginas'] ?></li>
        </ul>

    </div>
</div>


</main>