<main>
        <header>
            <p class="breadcumbs"><a href="index.php?seccion=home">Inicio</a> > Contacto</p>
            <p>¿No encuentras el libro que buscas?</p>
            <h1 class="contactoh1">Contáctanos</h1>
        <header>

        <form method="GET" action="formulariorecibido.php">
            <div>
                <label for="nombre">Nombre*</label>
                <input type="text" name="nombre" id="nombre" placeholder="ej. Adrian" required>
			</div>
            <div>
                <label for="apellido">Apellido*</label>
                <input type="text" name="apellido" id="apellido" placeholder="ej. Álvarez" required>
			</div>
            <div>
                <label for="email">E-mail*</label>
                <input type="email" name="email" id="email" placeholder="username@dominio.com" required>
			</div>
            <div>
                <label for="libro">Nombre de libro*</label>
                <input type="text" name="libro" id="libro" placeholder="ej. El código DaVinci" required>
			</div>
            <div>
                <label>Mensaje*</label>
                <textarea placeholder="Cuéntanos sobre el libro que no encontraste" required></textarea> 
            </div>
            <p>*Campos obligatorios</p>
            <button type="submit">Enviar</button>
        </form>
    </main>