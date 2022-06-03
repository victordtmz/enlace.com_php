<?php
    $id = $_GET['id'];
    $id = $_GET['id'] ?? '1';
    $sql = "SELECT * FROM traducciones WHERE id = '$id'";
    $db = tdb_connect();
    $trad_records = mysqli_query($db, $sql);
    confirm_result_set($trad_records);
    $record = mysqli_fetch_assoc($trad_records);
    mysqli_free_result($trad_records);
?>