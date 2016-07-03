<head>
    <meta charset="utf-8">
    <title>Asamblearia</title>
    <link rel="stylesheet" type='text/css' href="desktop/css/master_desktop.css">
    <link rel="stylesheet" type='text/css' href="css/master_desktop.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        $('.menu').click(function(){
          $('.wrap_menu').animate({
            height: 'toggle'
          });
        });

        $('.profile').click(function(){
          $('.profile ul').fadeToggle();
        });

      });
    </script>
  </head>
  <body>

    <!-- Header -->
    <?php include_once 'head.html' ?>

    <ul class="context">
      <li id="first_step">Propuesta de temas</li>
      <li id="second_step">Debate Previo</li>
      <li id="third_step">Reunión</li>
      <li id="fourth_step">Acta</li>
    </ul>

    <nav class="side_menu">
      <h3>Reunión Trimestral 2</h3>
      <ul>
        <li>
          <a id="issue0" href="#">
            <h5>Últimas Noticias<span></span></h5>
          </a>
        </li>
      </ul>
      <a class="ir_a_reuniones" href="#">Ver mis reuniones<span></span></a>
    </nav>

    <main id="add_issue_section">
      <h2>Puntos del día</h2>
      <h3 class="variable_second_title">Estos son los temas propuestos hasta ahora</h3>
      <section>
        <article class="active-issue">
          <h4>Aspectos a mejorar</h4>
        </article>
        <article class="inactive-issue">
          <h4>¿Qué día celebramos la despedida?</h4>
        </article>
        <article class="inactive-issue">
          <h4>Revisión de los objetivos de cada grupo con los monitores personales</h4>
        </article>
      </section>
      <aside class="gmail_api_content">
        <article class="">
          <h3 class="gmail_api_headtext">Añade un tema</h3>
          <form action="" method="post">
            <div class="">
              <input type="radio" name="tipodetema" value="debate_previo">
              <label for="debate_previo">Debate previo</label>
            </div>
            <div class="">
              <input type="radio" name="tipodetema" value="votacion_previa">
              <label for="votacion_previa">Votación previa</label>
            </div>
            <div class="">
              <input type="radio" name="tipodetema" value="no_debate">
              <label for="no_debate">Tema a tratar en reunión</label>
            </div>
            <div class="">
              <input type="radio" name="tipodetema" value="proxima_reunion">
              <label for="proxima_reunion">Siguente reunión</label>
            </div>
            <div class="">
              <input type="radio" name="tipodetema" value="eliminar_tema">
              <label for="eliminar_tema">Eliminar Tema</label>
            </div>
            <button>Adjuntar archivo</button>
            <input type="submit" name="preparartemas" value="Siguiente Tema">
          </form>
        </article>
      </aside>
    </main>

  </body>
</html>
