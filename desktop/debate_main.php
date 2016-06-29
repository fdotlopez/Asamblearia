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

        var secondmenu = true;

        $('#issue1').click(function(e){
          e.preventDefault();

          if(secondmenu==true){

            $('#third_menu').css({
              'left':'300px',
              'opacity': '1'
            });
            $('main').css({
              'padding-left':'620px',
            });

              $('.context li').fadeIn();

            secondmenu = false;

            $('#main_debate').fadeIn();
            $('#main_ultimas_noticias').hide();
            $('#voto').hide();
            $(this).addClass('aactive');
          }
        });

        $('#issue0').click(function(e){
          e.preventDefault();
          if(secondmenu==false){
            $('#third_menu').css({
              'left':'0px',
              'opacity': '0'
            });
            $('main').css({
              'padding-left':'300px'
            });
            $('.context li').fadeOut();

            secondmenu=true;

            $('#main_debate').hide();
            $('#main_ultimas_noticias').fadeIn();
            $('#voto').hide();
            $(this).addClass('aactive');
          }
        });

        $('#issue2').click(function(e){
          e.preventDefault();
            $('#third_menu').css({
              'left':'0px',
              'opacity': '0'
            });
            $('main').css({
              'padding-left':'300px'
            });

            $('.context li').fadeIn();

            secondmenu=true;

            $('#main_debate').hide();
            $('#main_ultimas_noticias').hide();
            $('#voto').fadeIn();
            $(this).addClass('aactive');

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
      <h3>Reunión Trimestral II</h3>
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

    <main id="main_ultimas_noticias">
      <h2>Que ha pasado mientras no estabas</h2>
      <section>
        <article>
          <div class="logo1"></div>
          <a href="#">
            <h4>Tienes 5 temas por decidir antes de la <strong>Reunión Trimestral II</strong>.<span>hace 3 horas</span></h4>
          </a>
        </article>
        <article>
          <div class="logo2"></div>
          <a href="#">
            <h4>Tu propuesta ha generado debate. Esto es lo que se opina sobre <strong>'Habitatge per joves'</strong>.<span>hace 5 horas</span></h4>
          </a>
        </article>
        <article>
          <div class="logo2"></div>
          <a href="#">
            <h4>Añade una propuesta a la reunión <strong>Reunión II</strong>. <span>hace 16 horas</span></h4>
          </a>
        </article>
      </section>
      <aside class="gmail_api_content">
        <article class="">
          <h3 class="gmail_api_headtext">Reunión Pendiente</h3>
          <p>
            Tienes una reunión mañana a las 14:30
          </p>
        </article>
      </aside>
    </main>

    <?php include_once 'debate_prev.html' ?>
    <?php include_once 'voto.html' ?>


  </body>
</html>
