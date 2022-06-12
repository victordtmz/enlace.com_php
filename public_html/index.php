<?php 
    require_once('../private/initialize.php'); 
    $language = $_SESSION['language'];
    $page = $_GET['page'] ?? 'index';


    // $header = SHARED_PATH . '/' . $language . '_header.php';
    $header = SHARED_PATH . '/header.php';
    include($header);
    
    $content = PROJECT_PATH . '/' . $language . '/' . $page . '.php';
    include($content);
    
?>





<!-- Close content div before footer -->
</div>
<?php 
    $footer = SHARED_PATH . '/' . $language . '_footer.php';
    include($footer);
?>