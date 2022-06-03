<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones'; 
    include(SHARED_PATH . '/header.php');
    
?>
<div class="list-filters">
<section class="inicio sub-nav">
  <form method="post" class="filters">
  <div class="form-set">
      <label for="trad-fyear">Año:</label>
      <select name="trad-fyear" id="trad-fyear">
          <?php 
          for($y = date('Y'); $y > 2014; $y--){
            echo "<option value='$y'>$y</option>";
          } ?>
      </select>
    </div>

    <div class="form-set">
      <label for="trad-search">Busqueda:</label>
      <input type="search" name="trad-search">
    </div>
    
    <div class="form-set">
      <input type="submit" name="trad-list-apply" value="Obtener Registros">
    </div>
    
  </form>
</section>
<section class="db-list">
  
  

    <?php 
      function requery(){
    ?>
    <table class="list">
    <tr>
      <th>Folio</th>
      <th>Titular</th>
      <th>Tipo</th>
      <!-- <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th> -->
    </tr> 
    <?php
      $trad_records = select_trad_list();
      while($record = mysqli_fetch_assoc($trad_records)) { ?>
      <tr>
        <td><a class="list-action" href="<?php echo url_for('public/staff/traducciones/show.php?id=' . $record['id']); ?>"><?php echo h($record['Folio']); ?></a></td>
        <!-- <td><?php echo h($record['Folio']); ?></td> -->
        <td><?php echo h($record['Titular']); ?></td>
        <td><?php echo h($record['Tipo']); ?></td>
        
        <!-- <td><a class="action" href="">Edit</a></td>
        <td><a class="action" href="">Delete</a></td> -->
      </tr>
    <?php }
      
    } ?>
    
      
  </table>
  <?php 
    if(isset($trad_records)){
      mysqli_free_result($trad_records);
    }
    
    if(isset($_POST['trad-list-apply'])){
      requery();
    }else{
      requery();
    }
    // 
      
    
    
  ?>
</section>
</div>

    