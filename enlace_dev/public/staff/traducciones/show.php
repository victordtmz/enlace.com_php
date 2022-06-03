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
<div class="display-form">
  <h3>Detalles de la traducción</h3>
  <table>
    <form method="post">
      <!-- <tr>
        <th colspan="2">
        <h3>Detalles de traducción</h3>
        </th>
      </tr> -->
      <?php foreach($record as $key => $value){ 
        $type = gettype($value);
        if ('array' == $type){ ?>

          <tr>
            <td>
              <label for="trad-<?php echo h($key);?>"><?php echo h($key);?>:</label>
              <input type="<?php echo h($value[1]);?>" name="trad-<?php echo h($key);?>" value="<?php echo h($value[0]);?>" id="trad-<?php echo h($key);?>">
            </td>
          </tr>
      <?php } else{ ?>
          <tr>
            <td>
              <label for="trad-<?php echo h($key);?>"><?php echo h($key);?>:</label>
              <input type="text" name="trad-<?php echo h($key);?>" value="<?php echo h($value);?>" id="trad-<?php echo h($key);?>">
            </td>
          </tr>
      <?php

      }  } ?>  
    
      <tr>
        <td colspan="2">
          <input type="submit" name="trad-list-apply" value="Obtener Registros">
        </td>
        
      </tr>
      
    </form>
  </table>
      </div>
      </section>


