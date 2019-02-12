<footer class="site-footer">
  <div class="contenedor clearfix">
     <div class="footer-informacion">
        <h3>Sobre <span>gdlwebcamp</span></h3>
        <p>Quisque in dolor blandit, molestie odio id, mattis lectus. Ut euismod vehicula consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ornare neque turpis, sit amet faucibus elit fermentum non. Maecenas pulvinar, enim eu aliquet pulvinar, leo ex dapibus sapien, et pellentesque quam magna nec mi. </p>
     </div>
     <div class="ulrimos-tweets">
        <h3>Ultimos <span>Tweets</span></h3>
        <ul>
           <li>Phasellus neque ex, ornare sit amet neque quis, vestibulum pulvinar lectus. Fusce imperdiet venenatis enim a faucibus. Donec dignissim placerat orci sed commodo.</li>
           <li>Phasellus neque ex, ornare sit amet neque quis, vestibulum pulvinar lectus. Fusce imperdiet venenatis enim a faucibus. Donec dignissim placerat orci sed commodo.</li>
           <li>Phasellus neque ex, ornare sit amet neque quis, vestibulum pulvinar lectus. Fusce imperdiet venenatis enim a faucibus. Donec dignissim placerat orci sed commodo.</li>
        </ul>
     </div>
     <div class="menu">
        <h3>Sobre <span>gdlwebcamp</span></h3>
        <nav class="redes-sociales">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-pinterest-p"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
      </div>
  </div>

  <p class="copyright">Todos los derechos reservados GDLWEBCAMP 2019</p>
</footer>


<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>

<?php
   $archivo = basename($_SERVER['PHP_SELF']);
   $pagina = str_replace(".php", "", $archivo);
   if($pagina == 'invitados' || $pagina == 'index'){
     echo '<script src="js/jquery.colorbox-min.js"></script>';
     ?>
     <script>
     $('.invitado-info').colorbox({inline:true, width: "50%"});
     </script>
     <?php
   } else if($pagina == 'conferencias') {
     echo '<script src="js/lightbox.js"></script>';
   }
 ?>

<script src="js/jquery.lettering.js"></script>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
 window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
 ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
