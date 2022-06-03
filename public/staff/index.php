<?php 
    $page_title = 'Staff Menu'; 
    require_once('../../private/initialize.php'); 
    $menu_items = $menu_staff;
    include(SHARED_PATH . '/header.php');
?>

<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href="<?php echo url_for('public/staff/subjects/index.php') ?> ">Subjects</a></li>
            <li><a href="<?php echo url_for('public/staff/pages/index.php') ?> ">Pages</a></li>
        </ul>
    </div>

</div>

<?php 
    include(SHARED_PATH . '/footer.php');
?>