<?php 
    require_once('private/initialize.php'); 
    //default language set in initilize as spanish, unless _COOKIE has ben set
    // $language = $_SESSION['language'];
    $language = $_GET['lan'] ?? 'es';
    $page = $_GET['page'] ?? 'index';
    $_SESSION['website'] = 'enlace';

    // before rendering page, check if page exists or redirect
    $content = PAGES_PATH . '/' . $language . '/' . $page . '.php';
    if (!file_exists($content)){
        redirect_to(url_for('index.php'));
    }
    //render links for pages for developer mode
    

    $header = PROJECT_PATH . '/shared/header.php';
    include($header);
    if (str_starts_with(PRIVATE_PATH, 'C:\\')){ ?>
        <nav class="">
            <ul class="dark">
                <li>
                    <a href="<?php echo url_for('/index.php'); ?>" >Enlace</a>
                </li>
                <li>
                    <a href="<?php echo url_for('/guanajuato'); ?>" >Guanajuato</a>
                </li>
                <li>
                <a href="<?php echo url_for('/mexico'); ?>" >Mexico</a>
                </li>
                <li>
                <a href="<?php echo url_for('/tri-cities'); ?>" >TriCities</a>
                </li>
            </ul>
        </nav>
    <br>
    <br>
    <br>
<?php }
    include($content);
    $footer = PROJECT_PATH . '/shared/footer.php';
    include($footer);
    // $server = $_SERVER['REMOTE_ADDR'];
    // echo $server;
?> 
</div>
