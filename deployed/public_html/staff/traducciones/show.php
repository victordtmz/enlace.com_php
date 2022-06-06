<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones | Detalles'; 
    include(SHARED_PATH . '/header.php');
    $id = $_GET['id'] ?? '1';
    $record = select_trad_view($id);
    
?> 
<section class="top">
  <div class="form-box">
    <h3>Detalles de la traducción</h3>
    <?php set_show_html($record);?>
  </div>
</section>


