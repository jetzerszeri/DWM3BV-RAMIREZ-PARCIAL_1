<?php 
    $vista = $_GET['seccion'];
    $vista = $vista ? $vista : 'home';
?>

<?php include('partials/header.php')?>
<?php include("views/$vista.php")?>
    



    <!-- main de la pagina de categorias -->   




    <!-- main de la pagina de contacto parte 2 -->
    <!-- <main>
        <div class="formularioenviado">
            <p>¡Mensaje enviado exitosamente!</p>
            <h1>Muchas gracias por contactarnos, Jetzer</h1>
            <p>Recibimos tu solicitud sobre <span>El código Davinci</span>, en los próximos días nos pondremos en contacto contigo para notificarte cuando el libro esté disponible.</p>
            <p>La notificación será enviada a: <span>jetzers.2@gmail.com</span></p>

            <a href="index.php" class="btn">Volver a inicio</a>
        </div>
    </main> -->


<?php include('partials/footer.php')?>