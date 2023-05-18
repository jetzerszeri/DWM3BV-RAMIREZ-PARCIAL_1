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
    
    <header>
      <nav class="navbar">
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
      </nav>
    </header>

    <h1>Parcial I - Programación II </h1>
    <p>Jake</p>

    <script>
        const toggleButton = document.getElementsByClassName("toggle-button")[0];
        const navbarLinks = document.getElementsByClassName("navbar-links")[0];

        toggleButton.addEventListener("click", () => {
        navbarLinks.classList.toggle("active");
        });
    </script>
</body>
</html>