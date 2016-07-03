<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Asamblearia</title>
    <link rel="stylesheet" href="mobile/css/master_mobile.css">
    <link rel="stylesheet" href="css/master_mobile.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>

    </script>
  </head>
  <body>

    <?php include_once 'head_interno.html' ?>

    <main id="reunion2">
      <h2>Reunión Trimestral 2</h2>

      <div>
       <div class="status1">
         <h4>Reunión</h4>
       </div>
       <div class="status2">
         <h4>Acta</h4>
       </div>
      </div>

      <h3 class="titlepage">Aspectos a mejorar</h3>
      <div class="tagline">
        <span class="duracion">Duración: 50'</span>
        <a href="*" class="link">ver índice</a>
      </div>
      <article class="box_content">
        <h5>Votaciones</h5>
          <form action="" method="post">
            <div class="">
              <input type="radio" name="votacion" value="votacion">
              <label for="votacion">Priorizar la organización de salidas.</label>
            </div>
            <div class="">
              <input type="radio" name="votacion" value="votacion">
              <label for="votacion">Priorizar la comunicación con los padres
                e implantar una nueva reunión mensual.</label>
            </div>
            <div class="">
              <input type="radio" name="votacion" value="votacion">
              <label for="votacion">Voto por dividir nuestro tiempo y trabajar
                sobre las dos acciones.</label>
            </div>
            <input type="submit" name="votacion" value="Votar">
          </form>
      </article>
    </main>
  </body>
</html>
