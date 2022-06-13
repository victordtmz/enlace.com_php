<?php 
    require_once('../private/initialize.php'); 
    $language = $_SESSION['language'];
    $page = $_GET['page'] ?? 'index';


    // $header = SHARED_PATH . '/' . $language . '_header.php';
    $header = SHARED . '/header.php';
    include($header);
    
    $content = SHARED . '/' . $language . '/' . $page . '.php';
    include($content);
    
?>





<!-- Close content div before footer -->
</div>
<?php 
    $footer = SHARED . '/' . $language . '_footer.php';
    include($footer);
?>