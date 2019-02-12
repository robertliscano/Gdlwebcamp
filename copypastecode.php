<?php
   $archivo = basename($_SERVER['PHP_SELF']);
   $pagina = str_replace(".php", "", $archivo);
   if($pagina == 'invitados'){
     echo '<link rel="stylesheet" href="css/colorbox.css">';
   } else if($pagina == 'conferencias') {
     echo '<link rel="stylesheet" href="css/lightbox.css">';
   }
 ?>



 <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados'){
      echo '<script src="js/jquery.colorbox-min.js"></script>';
    } else if($pagina == 'conferencias') {
      echo '<script src="js/jquery.lightbox.js"></script>';
    }
  ?>


<a href="#talleres"><i class="fas fa-code"></i> Talleres</a>


<?php
try {
   require_once('includes/funciones/bd_conexion.php');
   $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
   $sql .= " FROM eventos ";
   $sql .= " INNER JOIN categoria_evento ";
   $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
   $sql .= " INNER JOIN invitados ";
   $sql .= " ON eventos.id_inv = invitados.invitado_id ";
   $sql .= " AND eventos.id_cat_evento = 1 ";
   $sql .= " ORDER BY evento_id LIMIT 2 ";
   $resultado = $conn->query($sql);
} catch (\Exception $e) {
   echo $e->getMessage();
}
?>
 <?php $eventos = $resultado->fetch_assoc() ?>

 <pre>
   <?php var_dumb($eventos); ?>
 </pre>









<div id="talleres" class="info-curso ocultar clearfix">
<div class="detalle-evento">
<h3>HTML5, CSS3 Y JavaScript</h3>
<p><i class="far fa-clock"></i> 16:00 hrs</p>
<p><i class="fas fa-calendar"></i> 10 de Dic</p>
<p><i class="fas fa-user"></i>Juan Pablio de la Torre</p>
</div>
<div class="detalle-evento">
<h3>Responsive Web Desing</h3>
<p><i class="far fa-clock"></i> 20:00 hrs</p>
<p><i class="fas fa-calendar"></i> 10 de Dic</p>
<p><i class="fas fa-user"></i>Juan Pablio de la Torre</p>
</div>
<a href="#" class="button float-right">Ver todos</a>
</div><!--Talleres-->

<div id="conferencias" class="info-curso ocultar clearfix">
<div class="detalle-evento">
   <h3>Como ser Freelancer</h3>
   <p><i class="far fa-clock"></i> 10:00 hrs</p>
   <p><i class="fas fa-calendar"></i> 10 de Dic</p>
   <p><i class="fas fa-user"></i>Grgorio Sanchez</p>
</div>
<div class="detalle-evento">
   <h3>Tecnologias Del Fututo</h3>
   <p><i class="far fa-clock"></i> 1:00 hrs</p>
   <p><i class="fas fa-calendar"></i> 10 de Dic</p>
   <p><i class="fas fa-user"></i>Suzan Sanchez</p>
</div>
<a href="#" class="button float-right">Ver todos</a>
</div><!--Talleres-->

<div id="seminarios" class="info-curso ocultar clearfix">
  <div class="detalle-evento">
      <h3>Diseño UI/Ux para moviles</h3>
      <p><i class="far fa-clock"></i> 1:00 hrs</p>
      <p><i class="fas fa-calendar"></i> 11 de Dic</p>
      <p><i class="fas fa-user"></i>harol Garcia</p>
  </div>
  <div class="detalle-evento">
      <h3>Aprende a programar una mañana</h3>
      <p><i class="far fa-clock"></i> 10:00 hrs</p>
      <p><i class="fas fa-calendar"></i> 11 de Dic</p>
      <p><i class="fas fa-user"></i>Susana Rivera</p>
  </div>

 <a href="#" class="button float-right">Ver todos</a>
</div><!--Talleres-->
