<?php require_once('../../../private/initialize.php'); ?>
<?php
    // $id = $_GET['id'];
    $id = $_GET['id'] ?? '1';
    echo h($id);
?>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br>
<a href="show.php?company=<?php echo u('Widgets&more'); ?>">Link</a><br>
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br>