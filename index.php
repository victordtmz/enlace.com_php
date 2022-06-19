<?php 
    require_once('private/initialize.php'); 
    $language = $_SESSION['language'];
    $page = $_GET['page'] ?? 'index';
    $content = PAGES_PATH . '/' . $language . '/' . $page . '.php';
    if (!file_exists($content)){
        redirect_to(url_for('index.php'));
    }
    // Render header
    $header = PROJECT_PATH . '/shared/header.php';
    include($header);
    // Render content
    $content = PAGES_PATH . '/' . $language . '/' . $page . '.php';
    include($content);
    
?>
<!-- Close content div before footer -->
</div>
<?php 
    // Render Footer. 
    $footer = PROJECT_PATH . '/shared/footer.php';
    include($footer);
?>