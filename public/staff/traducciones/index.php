
<?php 
    require_once('../../../private/initialize.php'); 
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Subjects'; 
    include(SHARED_PATH . '/header.php');
    
    //create db connection
    $db = tdb_connect();
    $trad_records = mysqli_query($db, $sql);
    confirm_result_set($trad_records);
?>

<div id="content">
<div class="subjects listing">
    <h1>Subjects</h1>

    <div class="actions">
      <a class="action" href="">Create New Subject</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($record = mysqli_fetch_assoc($trad_records)) { ?>
        <tr>
          <td><?php echo h($record['id']); ?></td>
          <td><?php echo h($record['No']); ?></td>
          <td><?php echo h($record['Folio']); ?></td>
          <td><?php echo h($record['Titular']); ?></td>
          <td><?php echo h($record['Tipo']); ?></td>
          <td><?php echo h($record['Fecha']); ?></td>
          <td><a class="action" href="<?php echo url_for('public/staff/traducciones/show.php?id=' . $record['id']) ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    <?php mysqli_free_result($trad_records);?>

  </div>
    
    
</div>

<?php include(SHARED_PATH . '/staff_footer.php');?>
    