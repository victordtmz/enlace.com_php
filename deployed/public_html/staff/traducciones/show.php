<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones | Detalles'; 
    include(SHARED_PATH . '/header.php');
    $id = $_GET['id'] ?? '1';
    $trad_records = select_trad_details($id);
    $record = mysqli_fetch_assoc($trad_records);
    mysqli_free_result($trad_records);
    
    
?> 
<section class="top">
  <div class="form-box">
    <h3>Detalles de la traducción</h3>
    <?php set_show_html($record);?>
  </div>
</section>


