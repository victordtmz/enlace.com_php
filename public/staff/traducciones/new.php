<?php 
require_once('../../../private/initialize.php'); 
$test = $_GET['test'] ?? '';

if ($test == '404'){
    error_404();
}elseif ($test == '500'){
    error_500();
}elseif ($test == 'redirect') {
    redirect_to( url_for('/public/staff/subjects/index.php'));
    
}
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones'; 
    include(SHARED_PATH . '/header_staff.php');
?>
