<?php 
    require_once('../private/initialize.php'); 
    // $language = $_SESSION['language'];
    $page = $_GET['page'] ?? 'index'; 
    $website = 'tri-cities';
    $_SESSION['website'] = $website;
    $page_path = '/' . $language . '/' . $page . '.php';
    $content = TRI_CITIES_PAGES_PATH . $page_path;
    if (!file_exists($content)){
        $content = PAGES_PATH . $page_path;
        if (!file_exists($content)){
            // this will look at the session to see what page(tri-cities) we are in. 
            redirect_to(set_url_for('index.php'));
        }
    }
    if (str_starts_with(PRIVATE_PATH, 'C:\\')){ ?>
        <header> 
            <nav class="nav-main">
                
                <ul class="nav-menu dark">
                    <li>
                        <!-- url_for will set url regardles of website -->
                        <a href="<?php echo url_for('/index.php') ?>" >Enlace</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('/guanajuato') ?>" >Guanajuato</a>
                    </li>
                    <li>
                    <a href="<?php echo url_for('/mexico') ?>" >Mexico</a>
                    </li>
                    <li>
                    <a href="<?php echo url_for('/tri-cities') ?>" >TriCities</a>
                    </li>
                </ul>
            </nav>
        </header>
        <br>
        <br>
        <br>
    <?php }


    // Render header
    $header = PROJECT_PATH . '/shared/header.php';
    include($header);
    // Render content
    // $content = PAGES_PATH . '/' . $language . '/' . $page . '.php';
    include($content);

    // Render Footer. 
    $footer = PROJECT_PATH . '/tri-cities/shared/footer.php';
    include($footer);
    // $server = $_SERVER['REMOTE_ADDR'];
    // echo $server;
?>  