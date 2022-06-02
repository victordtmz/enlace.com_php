
<?php
  require_once('../../../private/initialize.php');
  require_once('queries.php');
    // $id = $_GET['id'];
    $id = $_GET['id'] ?? '1';
    $trad_records = select_trad_details($id);
    $record = mysqli_fetch_assoc($trad_records);
    mysqli_free_result($trad_records);

    // $sql = "SELECT * FROM traducciones WHERE id = '$id'";
    // $db = tdb_connect();
    // $trad_records = mysqli_query($db, $sql);
    // confirm_result_set($trad_records);
    // $record = mysqli_fetch_assoc($trad_records);
    // mysqli_free_result($trad_records);
?> 

<table>
  <?php foreach($record as $key => $value){ ?>
    <tr>
      <td><?php echo h($key); ?></td>
      <td><?php echo h($value); ?></td>
    </tr>
  <?php } ?>
    
</table>

