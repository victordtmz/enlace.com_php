<?php 
    require_once('../private/initialize.php'); 
    $language = $_SESSION['language'];
    $page = $_GET['page'] ?? 'index';
    $content = GTO_PAGES_PATH . '/' . $language . '/' . $page . '.php';
    if (!file_exists($content)){
        redirect_to(url_for('guanajuato/index.php'));
    }
    // Render header
    $header = PROJECT_PATH . '/guanajuato/shared/header.php';
    include($header);
    // Render content
    $content = GTO_PAGES_PATH . '/' . $language . '/' . $page . '.php';
    include($content);
    
?>
<!-- Close content div before footer -->
</div>
<?php 
    // Render Footer. 
    $footer = PROJECT_PATH . '/guanajuato/shared/footer.php';
    include($footer);
?>