<!-- <?php  phpinfo();?>  -->
<?php 
    require_once('private/initialize.php'); 
    $page_title = 'Inicio'; 
    $menu_items = $menu_home;
    
    include(SHARED_PATH . '/header.php');
?>


<?php 
    include(SHARED_PATH . '/footer.php');
?>