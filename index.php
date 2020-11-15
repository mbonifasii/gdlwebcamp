
<?php include_once 'includes/templates/header.php';?>

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseno web en espanol</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quis omnis id dolore quasi nesciunt autem saepe asperiores inventore quo, fugiat iure dicta consectetur porro pariatur, in dolorem eos a.</p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogg">  
      </video>
    </div>
      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa del Evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
              <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
              <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
            </nav>
            <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>HTML5, CSS3 Y JavaScript</h3>
                <p><i class="fas fa-clock"></i>16:00 hrs</p>
                <p><i class="fas fa-calendar"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Marcos Daniel Bonifasi de Leon</p>
              </div>
              <div class="detalle-evento">
                <h3>Jakarta EE</h3>
                <p><i class="fas fa-clock"></i>20:00 hrs</p>
                <p><i class="fas fa-calendar"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Marcos Daniel Bonifasi de Leon</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
            </div>
            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Como ser freelancer</h3>
                <p><i class="fas fa-clock"></i>10:00 hrs</p>
                <p><i class="fas fa-calendar"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Gregorio Sanchez</p>
              </div>
              <div class="detalle-evento">
                <h3>Tecnologias del futuro</h3>
                <p><i class="fas fa-clock"></i>17:00 hrs</p>
                <p><i class="fas fa-calendar"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Susan sanchez</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
            </div>
            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Diseno UI/UX para moviles</h3>
                <p><i class="fas fa-clock"></i>17:00 hrs</p>
                <p><i class="fas fa-calendar"></i>11 de Dic</p>
                <p><i class="fas fa-user"></i>Harold Garcia</p>
              </div>
              <div class="detalle-evento">
                <h3>Aprende a programar en una manana</h3>
                <p><i class="fas fa-clock"></i>10:00 hrs</p>
                <p><i class="fas fa-calendar"></i>11 de Dic</p>
                <p><i class="fas fa-user"></i>Susana Rivera</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="Imagen invitado">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="Imagen invitado">
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="Imagen invitado">
          <p>Gregorio Sanchez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="Imagen invitado">
          <p>Susana Rivera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="Imagen invitado">
          <p>Harol Garcia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="Imagen invitado">
          <p>Susana Sanchez</p>
        </div>
      </li>
    </ul>
  </section>

  <div class="contador parallax">
    <div class="contador">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p>Invitados</li>
        <li><p class="numero"></p>Talleres</li>
        <li><p class="numero"></p>Dias</li>
        <li><p class="numero"></p>Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por dos dias</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa">
    
  </div>

  <section class="seccion">
    <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eum vel vero, officiis earum deserunt accusamus magnam corporis at dolore. Obcaecati eaque enim quidem. Magnam tenetur assumenda in. Similique, magni?</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="img testimonial">
              <cite>Osvaldo Aponte Escobedo <span>Desarrollador en @prisma</span> </cite>
            </footer>
          </blockquote>
        </div><!--fin testimonial-->
        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eum vel vero, officiis earum deserunt accusamus magnam corporis at dolore. Obcaecati eaque enim quidem. Magnam tenetur assumenda in. Similique, magni?</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="img testimonial">
              <cite>Osvaldo Aponte Escobedo <span>Desarrollador en @prisma</span> </cite>
            </footer>
          </blockquote>
        </div><!--fin testimonial-->
        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eum vel vero, officiis earum deserunt accusamus magnam corporis at dolore. Obcaecati eaque enim quidem. Magnam tenetur assumenda in. Similique, magni?</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="img testimonial">
              <cite>Osvaldo Aponte Escobedo <span>Desarrollador en @prisma</span> </cite>
            </footer>
          </blockquote>
        </div><!--fin testimonial-->
      </div>
    </section>

    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Registrate al newwletter</p>
        <h3>gdlwebcamp</h3>
        <a href="#" class="button transparent">Registrate</a>
      </div><!--Contenido-->
    </div>

    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta-regresiva">
        <ul class="clearfix">
          <li><p id="dias" class="numero"></p>dias</li>
          <li><p id="horas" class="numero"></p>horas</li>
          <li><p id="minutos" class="numero"></p>minutos</li>
          <li><p id="segundos" class="numero"></p>segundos</li>
        </ul>
      </div>
    </section>

    <?php include_once 'includes/templates/footer.php'; ?>
    


  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="js/jquery-1.12.0.min.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
