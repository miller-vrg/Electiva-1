  <?php 
  session_start();
  require_once "../partials/student-date.php";

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Practicas ::.</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-contenedor.css">
  </head>
  <body>
      <nav  class="cabecera">
            <button class="btn" onclick="location='../pages/home.php'">Regresar</button>
            <p class="titulo">Practicas</p>
            <button class="btn" onclick="alert('Guardo con exito'); location='home.php' ">Enviar</button>
      </nav>
    <section class="container">
        <div class="contenido">
            <form>
                <table class="prueba">
                    <?= llenarPractica() ?>
                </table>
            </form>
        </div>
    </section>

  </body>
  </html> 