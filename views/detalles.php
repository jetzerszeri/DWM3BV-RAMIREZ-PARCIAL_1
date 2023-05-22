<?php
$id = $_GET['id'];


// $libro = "1984";
// $autor= "George Orwell";
// $genero= "ficcion";
// $descripcion= "1984 es una novela distópica que presenta una sociedad totalitaria controlada por el Gran Hermano. Winston Smith, el protagonista, lucha por rebelarse contra el sistema opresivo y por preservar su individualidad.";
// $publicacion= "1949";
// $editorial= "Secker & Warburg";
// $idioma= "Inglés";
// $paginas= 328;
// $imagen= "assets/img/1984.jpg";
// $id= 1;
// $precio = 11.50;

$libros = [
    [
        "nombre" => "1984",
        "autor" => "George Orwell",
        "genero" => "Ficción",
        "descripcion" => "1984 es una novela distópica que presenta una sociedad totalitaria controlada por el Gran Hermano. Winston Smith, el protagonista, lucha por rebelarse contra el sistema opresivo y por preservar su individualidad.",
        "publicacion" => "1949",
        "editorial" => "Secker & Warburg",
        "idioma" => "Inglés",
        "paginas" => '328',
        "imagen" => "assets/img/1984.jpg",
        "id" => '0',
        "precio" => '11.5',
    ],
    [
        "nombre" => "Cien años de soledad",
        "autor" => "Gabriel García Márquez",
        "genero" => "Ficción",
        "descripcion" => "Cien años de soledad narra la historia de la familia Buendía a lo largo de varias generaciones en el ficticio pueblo de Macondo. La obra fusiona realidad y fantasía, y aborda temas como el amor, la soledad y el paso del tiempo.",
        "publicacion" => "1967",
        "editorial" => "Sudamericana",
        "idioma" => "Español",
        "paginas" => '471',
        "imagen" => "assets/img/100asoledad.jpg",
        "id" => '1',
        "precio" => '10.8',
    ]
    ];

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