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
      $('document').ready(function(){

        $('#g_reunion2').click(function(e){
          e.preventDefault();
          window.location.href = "mobile/reunion2.php";
        });

        $('#anade_tema').click(function(e){
          e.preventDefault();
          $('#tema3').fadeIn();
        });

      });
    </script>
  </head>
  <body>

    <?php include_once 'head.html' ?>

    <main id="propuestas">
      <h2>Reunión Trimestral 2</h2>

      <div>
       <div class="status1">
         <h4>Propuesta de temas</h4>
       </div>
       <div class="status2">
         <h4>Debate previo</h4>
       </div>
      </div>

      <h3>Temas Propuestos</h3>
      <article class="box_content">
        <h4>Aspectos a mejorar</h4>
        <div></div>
      </article>
      <article class="box_content">
        <h4>¿Qué día celebramos la despedida?</h4>
        <div></div>
      </article>
      <article class="box_content" id="t3">
        <h4>Revisión de los objetivos de cada grupo con los monitores responsables</h4>
        <div></div>
      </article>
      <article class="">
        <h4>Nuevo Tema</h4>
        <form action="#" method="post">
          <label for="issue">Añade un tema de tu interés</label>
          <input type="text" name="issue" placeholder="Escribe aquí el tema">
          <label for="descrip">Añade una pequeña descripción</label>
          <textarea name="descrip" placeholder="Escribe aquí la descripción"></textarea>
          <input type="submit" value="añadir" id="anadir_tema">
        </form>
      </article>
    </main>
  </body>
</html>
