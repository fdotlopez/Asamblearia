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

        //Cambiar Estatus
        $('.context').css({
          'opacity':'1'
        });

        $( '#second_step' ).removeClass( "active" ).addClass( "disable" );
        $( '#third_step' ).removeClass( "disable" ).addClass( "active" );

        $( '#issue1' ).addClass( "aactive" );

        //Menu Lateral
        $('#issue1').click(function(e){
          e.preventDefault();
          $( this ).removeClass( "adisable" ).addClass( "aactive" );
          $( '#issue2' ).removeClass( "aactive" ).addClass( 'adisable' );
          $('h2').html('Aspectos a mejorar');
          $('aside').fadeOut('slow');
          $('textarea').val('');
        });


        $('#issue2').click(function(e){
          e.preventDefault();
          $( this ).removeClass( "adisable" ).addClass( "aactive" );
          $( '#issue1' ).removeClass( "aactive" ).addClass( 'adisable' );
          $('h2').html('Día de celebración de la despedida');
          $('.descripcion').html('Debéis votar una de las cuatro fechas propuestas, es cuando hay disponibilidad');
          $('aside').fadeIn('slow');
          $('textarea').val('');
        });


        //Main
        $('.acordeon').click(function(){
            $('.descripcion').animate({
              'height':'toggle'
            }, {duration: 'fast', ease:'easeInOutExpo'});
        });

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


      });
    </script>
  </head>
  <body>

    <!-- Header -->
    <?php include_once 'head.html' ?>

    <ul class="context">
      <li id="first_step" class="disable">Propuesta de temas</li>
      <li id="second_step" class="active">Debate Previo</li>
      <li id="third_step" class="disable">Reunión</li>
      <li id="fourth_step" class="disable">Acta</li>
    </ul>

    <nav class="side_menu">
      <h3>Reunión Trimestral 2</h3>
      <ul>
        <li>
          <a id="issue0" href="#">
            <h5>Últimas Noticias<span></span></h5>
          </a>
        </li>
        <li>
          <a id="issue1" href="#">
            <h5>Aspectos a mejorar</h5>
            <h6>Proponed temas a debatir sobre cosas que creáis necesarias comentar<span></span></h6>
          </a>
        </li>
        <li>
          <a id="issue2" href="#">
            <h5>¡Qué día celebramos la despedi...</h5>
            <h6>Debéis votar una de las cuatro fechas propuestas<span></span></h6>
          </a>
        </li>
        <li>
          <a href="#">
            <h5>Revisión de los objetivos con...</h5>
            <h6>Cada monitor deberá exponer qué aspectos han funcionado ...<span></span></h6>
          </a>
        </li>
      </ul>
      <a class="ir_a_reuniones" href="#">Ver mis reuniones<span></span></a>
    </nav>

    <nav id="third_menu">
      <ul>
        <li><a href="#"><h6>Actividades de excursionismo mejor organizadas</h6></a></li>
        <li><a href="#"><h6>Reuniones con los padres mensuales y no trimestrales</h6></a></li>
        <li><a href="#"><h6>Coordinación con los monitores de otros grupos</h6></a></li>
      </ul>
    </nav>

    <main id="reunion">
      <h2>Aspectos a mejorar</h2>
      <section>

        <article class="acordeon">
          <div>
            <h4>Descripción y dinámica propuestas</h4>
            <svg class="img_desplegable"></svg>
          </div>
          <p class="descripcion">
            Hace tres meses se marcaron unos claros objetivos para
            el trimestre. Debemos proponer aspectos a mejorar que
            reflejen aquellas actividades del día a día que no han
            salido como estaba panificado o que podrían mejorarse.
          </p>
        </article>
        <article>
          <h4>Resumen del tema</h4>
          <form class="" action="" method="post">
            <label for="resumen">Escribe todos los datos que necesitas guardar en acta.</label>
            <textarea name="resumen" placeholder="Escribe aqui el resumen"></textarea>
          </form>
        </article>

        <article>
          <h4>Nota</h4>
          <form class="" action="" method="post">
            <label for="nota">Añade una nota sobre este tema.</label>
            <textarea name="nota" placeholder="Escribe aqui el resumen"></textarea>
          </form>
        </article>

      </section>

      <aside class="gmail_api_content">
        <article class="">
          <div></div>
          <h5>La Ganadora</h5>
          <h6>Viernes 11 de junio</h6>
        </article>
      </aside>

    </main>

    <footer>
      <div class="play"></div>
      <a href="#">Empezar ronda de votaciones</a>
    </footer>

  </body>
</html>
