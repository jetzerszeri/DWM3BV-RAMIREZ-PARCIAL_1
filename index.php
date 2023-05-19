<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympbooks</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <nav>
        <div class="navbar">
        <div>Olympbooks</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Categorías</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Datos</a></li>
            </ul>
        </div>
        </div>
    </nav>


    <!-- main del home page -->

        <!-- <div class="homebanner">
            <div>
                <h1>Bienvenido <span>al paraíso de los libros</span></h1>
                <p>“Un escritor solo comienza un libro, un lector lo termina”</p>
                <a href="#" class="btn">Explorar catálogo</a>
            </div>
        </div> -->



    
    <!-- main de la pagina de todos los productos -->
    <main>
        <header>
            <p><a href="#">Inicio</a> > <a href="#">Todos los libros</a></p>
            <h1><span>Explora</span> Todos los libros</h1>
        <header>

        <div>
            <ul class="listadelibros">
                <li>
                    <img src="assets/img/hungergames1.jpeg" alt="Tapa del libro Los juegos del hambre">
                    <div>
                        <ul>
                            <li><h2>Los juegos<h2></li>
                            <li>Suzanne Collins</li>
                            <li>$10.98 US</li>
                        </ul>
                    </div>
                </li>
                <li>
                    <img src="assets/img/hungergames1.jpeg" alt="Tapa del libro Los juegos del hambre">
                    <div>
                        <ul>
                            <li><h2>Los juegos del hambre<h2></li>
                            <li>Suzanne Collins</li>
                            <li>$10.98 US</li>
                        </ul>
                    </div>
                </li>
                <li>
                    <img src="assets/img/hungergames1.jpeg" alt="Tapa del libro Los juegos del hambre">
                    <div>
                        <ul>
                            <li><h2>Los juegos del hambre<h2></li>
                            <li>Suzanne Collins</li>
                            <li>$10.98 US</li>
                        </ul>
                    </div>
                </li>




            </ul>
        </div>

    </main>
    
    <footer>
        <ul>
            <li>olympbooks.com</li>
            <li><a href="#">home</a></li>
            <li>© Mayo 21, 2023</li>
        </ul>
    </footer>

    <script>
        const toggleButton = document.getElementsByClassName("toggle-button")[0];
        const navbarLinks = document.getElementsByClassName("navbar-links")[0];

        toggleButton.addEventListener("click", () => {
        navbarLinks.classList.toggle("active");
        });
    </script>
</body>
</html>