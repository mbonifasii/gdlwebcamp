<?php include_once 'includes/templates/header.php';?>


  <section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>
    <?php

        try {
            //code...
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT * FROM eventos";
            $resultado = $conn->query($sql);
        
        } catch (\Exception $e) {
            //throw $th;
            echo $e->getMessage();
        }

    ?>

    <div class="calendario">
        <?php
            $eventos = $resultado->fetch_assoc();//Imprime los resultados

        ?>

        <pre>
            <?php var_dump($eventos) ?>
        </pre>
    </div>
    
    <?php
        $conn->close(); 
    ?>

  </section>

  <?php include_once 'includes/templates/footer.php'; ?>

  <script src="js/jquery-1.12.0.min.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/lightbox.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

