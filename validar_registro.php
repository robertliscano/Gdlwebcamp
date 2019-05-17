
<?php include_once 'includes/templates/header.php'; ?>
  <section class="section contenedor">
     <h2>Registro de Usuarios</h2>

      <?php if (isset($_GET['exitoso'])):
               if ($_GET['exitoso'] == "1"):
                   echo "Registro exitoso";
               endif;
            endif;   ?>

 </section>
<?php include_once 'includes/templates/footer.php'; ?>
