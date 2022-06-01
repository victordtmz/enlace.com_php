<!-- <?php  phpinfo();?>  -->
<?php 
    require_once('private/initialize.php'); 
    $page_title = 'Main Menu'; 
    $menu_items = array(
        "Inicio" => '/index.php',
        "Traducciones" => 'public/staff/traducciones/index.php'
    );
    
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
    include(SHARED_PATH . '/staff_footer.php');
?>