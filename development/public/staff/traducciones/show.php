<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones'; 
    include(SHARED_PATH . '/header.php');
    $id = $_GET['id'] ?? '1';
    $trad_records = select_trad_details($id);
    $record = mysqli_fetch_assoc($trad_records);
    mysqli_free_result($trad_records);
    
    
?> 
<section class="top">
  <?php
    $record['Fecha'] = array( $record['Fecha'], 'date');
  ?>

<div class="form-box">
  <h3>Detalles de la traducción</h3>
    <form method="post">
      <?php foreach($record as $key => $value){ 
        $type = gettype($value);
        if ('array' == $type){ ?>
          <div class="form-row">
              <label for="trad-<?php echo h($key);?>"><?php echo h($key);?>:</label>
              <input type="<?php echo h($value[1]);?>" name="trad-<?php echo h($key);?>" value="<?php echo h($value[0]);?>" id="trad-<?php echo h($key);?>">
          </div>
      <?php } else{ ?>
        <div class="form-row">
              <label for="trad-<?php echo h($key);?>"><?php echo h($key);?>:</label>
              <input type="text" name="trad-<?php echo h($key);?>" value="<?php echo h($value);?>" id="trad-<?php echo h($key);?>">
      </div>
      <?php

      }  } ?>  
    
      
          <input type="submit" name="trad-list-apply" value="Obtener Registros">
        
      
    </form>
      </div>
      </section>


