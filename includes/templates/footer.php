<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
      <h3>Sobre <span>gdlwebcamp</span></h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium libero doloremque earum sit eos saepe voluptatem, sunt iure expedita, quaerat reprehenderit? Provident nihil quasi possimus minus, omnis at illum autem.</p>
    </div>
    <div class="ultimos-tweets">
      <h3>Ultimos <span>tweets</span></h3>
      <ul>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium libero doloremque earum sit eos saepe voluptatem</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium libero doloremque earum sit eos saepe voluptatem</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium libero doloremque earum sit eos saepe voluptatem</li>
      </ul>
    </div>
    <div class="menu">
      <h3>Redes <span>Sociales</span></h3>
      <nav class="redes-sociales">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>
  <p class="copyright">
    Todos los Derechos Reservados GDLWEBCAMP 2020 &copy.
  </p>
</footer>

<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/jquery.animateNumber.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.lettering.js"></script>
<?php
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);

if ($pagina == 'invitados' || $pagina == 'index') {
  echo '<script src="js/jquery.colorbox.js"></script>';
} else if ($pagina == 'conferencia') {
  echo '<script src="js/lightbox.js"></script>';
}
?>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function() {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
<script src="js/main.js"></script>
</body>

</html>