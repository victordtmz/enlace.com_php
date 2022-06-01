<?php require_once('../../../private/initialize.php'); ?>
<?php
    // $id = $_GET['id'];
    $id = $_GET['id'] ?? '1';
    $sql = "SELECT * FROM traducciones WHERE id = '$id'";
    $db = tdb_connect();
    $trad_records = mysqli_query($db, $sql);
    confirm_result_set($trad_records);
    $record = mysqli_fetch_assoc($trad_records);
    mysqli_free_result($trad_records);
?>
<div class="tradShow">
    <h3>Id: <?php echo h($record['id']); ?></h3>
    <h3>Id: <?php echo h($record['folio']); ?></h3>
</div>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br>
<a href="show.php?company=<?php echo u('Widgets&more'); ?>">Link</a><br>
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br>