<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones'; 
    include(SHARED_PATH . '/header.php');
    // $id = $_GET['id'];
    $id = $_GET['id'] ?? '1';
    $trad_records = select_trad_details($id);
    $record = mysqli_fetch_assoc($trad_records);
    mysqli_free_result($trad_records);

?> 

<table>
  <?php foreach($record as $key => $value){ ?>
    <tr>
      <td><?php echo h($key); ?></td>
      <td><?php echo h($value); ?></td>
    </tr>
  <?php } ?>
    
</table>

