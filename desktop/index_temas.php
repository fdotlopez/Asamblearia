<head>
    <meta charset="utf-8">
    <title>Asamblearia</title>
    <link rel="stylesheet" type='text/css' href="desktop/css/master_desktop.css">
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
    <header>
      <div></div>
      <nav class="menu">
        <div class="wrap_menu">
          <ul>
            <li class="submenu_item"><a href="#">Ayuda</a></li>
            <li class="submenu_item"><a href="#">FAQ</a></li>
            <li class="submenu_item"><a href="#">Ampliar Servicio</a></li>
            <li class="submenu_item"><a href="#">Protección de datos</a></li>
            <li class="submenu_item"><a href="#">Condiciones Legales</a></li>
          </ul>
        </div>
      </nav>
      <div class="profile">
        <ul>
          <li><a href="">Cambiar comunidad</a></li>
          <li><a href="">Ajustar perfil para esta comunidad</a></li>
          <li><a href="">Cerrar sesión</a></li>
        </ul>
      </div>
    </header>

    <ul class="context">
      <li id="first_step">Propuesta de temas</li>
      <li id="second_step">Debate Previo</li>
      <li id="third_step">Reunión</li>
      <li id="fourth_step">Acta</li>
    </ul>

    <nav class="side_menu">
      <h3>Reunión Trimestral II</h3>
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
        <article>
          <h4>Aspectos a mejorar</h4>
          <h5>Hace tres meses se marcaron unos claros objetivos para el trimestre. Debemos proponer aspectos a mejorar que reflejen aquellas actividades del día a día que no han salido como estaba panificado o que podrían mejorarse.<span>hace 2 minutos</span></h5>
        </article>
        <article>
          <h4>¿Qué día celebramos la despedida?</h4>
          <h5>Dado que llega el final de curso, se celebrará la despedida de la temporada. ¿Cuando os va bien hacerla?<span>hace 3 horas</span></h5>
        </article>
        <article>
          <h4>Revisión de los objetivos de cada grupo con los monitores personales</h4>
          <h5>Cómo cada final de trimestre se hablará de los objetivos alcanzados y se valorará con el resto de grupo. <strong>Preparar presentación</strong>.<span>hace 1 día</span></h5>
        </article>
      </section>
      <aside class="gmail_api_content">
        <article class="">
          <h3 class="gmail_api_headtext">Añade un tema</h3>
          <form action="" method="post">
            <label for="issue">Añade un tema de tu interés</label>
            <input type="text" name="issue" placeholder="Escribe aquí el tema">
            <label for="descrip">Añade una pequeña descripción</label>
            <textarea name="descrip" placeholder="Escribe aquí la descripción"></textarea>
            <input type="submit" value="añadir">
          </form>
        </article>
      </aside>
    </main>

  </body>
</html>
