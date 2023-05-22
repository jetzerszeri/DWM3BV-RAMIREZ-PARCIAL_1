<?php
    $libro = "1984";
   $autor= "George Orwell";
    $genero= "ficcion";
    $descripcion= "1984 es una novela distópica que presenta una sociedad totalitaria controlada por el Gran Hermano. Winston Smith, el protagonista, lucha por rebelarse contra el sistema opresivo y por preservar su individualidad.";
    $publicacion= "1949";
    $editorial= "Secker & Warburg";
    $idioma= "Inglés";
    $paginas= 328;
    $imagen= "assets/img/1984.jpg";
    $id= 1;
    $precio = 11.50;
?>

<main>

<p class="breadcumbs"><a href="index.php?seccion=home">Inicio</a> > <a href="#">Categorías</a> > <a href="#">Distopía</a> > Los juegos del hambre</p>

<div class="detalles">
    <img src="<?= $imagen ?>" alt="Tapa del libro <?= $libro ?>">
    <div>
        <div>
            <p><?= $autor ?></p>
            <h1><?= $libro ?></h1>
            <p>Género: <?= $genero ?></p>
            <p>$<?= $precio ?> usd</p>
            <button>Agregar al carrito</button>
        </div>

        <h2>Descripción</h2>
        <p><?= $descripcion ?></p>

        <h2>Detalles del producto</h2>
        <ul>
            <li><span>Publicación:</span> <?= $publicacion ?></li>
            <li><span>Editorial:</span> <?= $editorial ?></li>
            <li><span>Idioma:</span> <?= $idioma ?></li>
            <li><span>Páginas:</span> <?= $paginas ?></li>
        </ul>

    </div>
</div>


</main>