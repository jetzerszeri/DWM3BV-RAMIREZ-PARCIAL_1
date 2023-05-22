<?php
function obetenerCatalogoLibros() {
    $content = file_get_contents('data/info.json');
    $data = json_decode($content, true);
    return $data['libros'];
};

function filtrarPorGenero($libros, $genero) {
    $libros_filtrados = [];
    foreach ($libros as $libro) {
        if ($libro['genero'] == $genero ) {
            $libros_filtrados[] = $libro;
        } 
    }
    return $libros_filtrados;
}

?>