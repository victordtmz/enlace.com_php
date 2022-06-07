<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Administradores'; 
    include(SHARED_PATH . '/header_staff.php');
    //get the record.
    
?> 
<section class="inicio sub-nav">
  <?php  include('header_sub.php');?>
</section>
<section class="top">
  <div class="form-box">
    <h3>Crear nueva cuenta de administrador</h3>
    
    <form method="post">
      
    <div class="form-row">
        <label for="trad-nombre">Nombre:</label>
        <input type="text" name="trad-nombre" id="trad-nombre">
      </div>
      
      <div class="form-row">
        <label for="trad-apellidos">Apellidos:</label>
        <input type="text" name="trad-apellidos" id="trad-apellidos">
      </div>

      <div class="form-row">
        <label for="trad-email">Email:</label>
        <input type="text" name="trad-email" id="trad-email">
      </div>

      <div class="form-row">
        <label for="trad-password">Contraseña:</label>
        <input type="password" name="trad-password" id="trad-password">
      </div>

      <div class="form-row">
        <label for="trad-password-ver">Verificar contraseña:</label>
        <input type="password" name="trad-password-ver" id="trad-password-ver">
      </div>

    </form>
   
  </div>
</section>


