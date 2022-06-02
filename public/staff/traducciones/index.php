<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones'; 
    include(SHARED_PATH . '/header_staff.php');
?>
<section class="db-list">
  <form method="post" class="filters">
    <label for="trad-fyear">Año:</label>
    <select name="trad-fyear" id="trad-fyear">
        <option value="">--Seleccione año--</option>
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
    </select>
    <input type="submit" name="trad-list-apply" value="Obtener Registros">
  </form>
  

    <?php 
      function requery(){
    ?>
    <table class="list">
    <tr>
      <th>Folio</th>
      <th>Titular</th>
      <th>Tipo</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr> 
    <?php
      $trad_records = select_trad_list();
      while($record = mysqli_fetch_assoc($trad_records)) { ?>
      <tr>
        <td><?php echo h($record['Folio']); ?></td>
        <td><?php echo h($record['Titular']); ?></td>
        <td><?php echo h($record['Tipo']); ?></td>
        <td><a class="action" href="<?php echo url_for('public/staff/traducciones/show.php?id=' . $record['id']); ?>">View</a></td>
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
      include(SHARED_PATH . '/footer.php');
    }else{
      include(SHARED_PATH . '/footer.php');
    }
    
  ?>
</section>

    