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

        $('.context').animate({
          'opacity':'1'
        }, {duration: 'fast', ease:'easeInOutExpo'});

        $('textarea').focus(function(){
          $(this).animate({
            height:'250px'
          }, {duration: 'fast', ease:'easeInOutQuint'});
        });

        $('textarea').blur(function(){
          $(this).animate({
            height:'30px'
          }, {duration: 'fast', ease:'easeInOutQuint'});
        });

        //User Interaction
        var count=1
        $('#anade_tema').click(function(e){
          e.preventDefault();
          if(count==1){
            $('#tema2').fadeIn();
            count=count+1
          } else {
            $('#tema3').fadeIn();
          }
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
        <article id="tema1">
          <h4>Aspectos a mejorar</h4>
          <h5>Hace tres meses se marcaron unos claros objetivos para el trimestre. Debemos proponer aspectos a mejorar que reflejen aquellas actividades del día a día que no han salido como estaba panificado o que podrían mejorarse.<span>hace 2 minutos</span></h5>
        </article>
        <article id="tema2">
          <h4>¿Qué día celebramos la despedida?</h4>
          <h5>Dado que llega el final de curso, se celebrará la despedida de la temporada. ¿Cuando os va bien hacerla?<span>hace 3 horas</span></h5>
        </article>
        <article id="tema3">
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
            <input type="submit" value="añadir" id="anade_tema">
          </form>
        </article>
      </aside>
    </main>

  </body>
</html>
