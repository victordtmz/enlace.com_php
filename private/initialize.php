<?php
    ob_start();
    session_start(); 

    
    define('PRIVATE_PATH', dirname(__FILE__));
    define('PROJECT_PATH', dirname(PRIVATE_PATH));
    define('SHARED_PAGES', PROJECT_PATH . '/shared');
    define('SHARED_PATH', PRIVATE_PATH . '/shared');
    define('PAGES_PATH', PROJECT_PATH . '/pages');
    define('GTO_PAGES_PATH', PROJECT_PATH . '/guanajuato/pages');
    define('TRI_CITIES_PAGES_PATH', PROJECT_PATH . '/tri-cities/pages');
    define('MEXICO_PAGES_PATH', PROJECT_PATH . '/mexico/pages');
    
    
    // echo PRIVATE_PATH . '<br>';
    //  
    // echo PROJECT_PATH ;
    // 
    // define('GTO_PAGES_PATH', PROJECT_PATH . '/guanajuato/pages');
    // define('SHARED', PRIVATE_PATH . '/shared');

    if (str_starts_with(PRIVATE_PATH, 'C:\\')){
        define("WWW_ENLACE", '/enlacellc.com'); 
        define("WWW_TRI", '/enlacellc.com/tri-cities');
        define("WWW_MX", '/enlacellc.com/mexico');
        define("WWW_GTO", '/enlacellc.com/guanajuato');
        $_SESSION['mode'] = 'developer';
    }else{
        define("WWW_ENLACE", 'https://enlacellc.com');
        define("WWW_TRI", 'https://tri-cities.enlacellc.com/');
        define("WWW_MX", 'https://mexico.enlacellc.com/');
        define("WWW_GTO", 'https://guanajuato.enlacellc.com/');
        $_SESSION['mode'] = 'live';
    }

    require_once(SHARED_PATH . '/functions.php');
    // require_once(PRIVATE_PATH . '/database.php');
    require_once(SHARED_PATH . '/validation_functions.php');
    require_once(SHARED_PATH . '/auth_functions.php');
    require_once(SHARED_PATH . '/credentials.php');

    
    // if(isset($_COOKIE['language'])){
    //     $_SESSION['language'] = $_COOKIE['language'];
    // }else {
    //     $_SESSION['language'] = 'es';
    // }
    if(isset($_COOKIE['language'])){
        $language = $_COOKIE['language'];
    }else {
        $language = 'es';
    }
    
    $menu_home = array(
        'Inicio' => '/index.php',
        'Contacto' => '/contact.php',
        'login' => '/staff/login.php'
    );
    $menu_staff = array(
        'Inicio' => '/index.php',
        'Staff' => '/staff',
        'Traducciones' => '/staff/traducciones',
        'Admin' => '/staff/admins/',
        'login' => '/staff/login.php' 
    );
    
    $signatureStart = '
    <div style="line-height: 1rem; display: inline-block;">
    <h1 style="margin: 50px 0 2px 0;">Enlace LLC</h1>';
    $signatureEnd = '
    <p style="margin: 2px 0;">&copy;' . date('Y') . '| Enlace LLC</p>
    </div>';    
    
    $signatureUS = '
    <p style="margin: 2px 0;">7511 W Arrowhead Ave, Suite A</p>
    <p style="margin: 2px 0;">Kennewick, WA 99336</p>
    <p style="margin: 2px 0;">(509) 619-0838</p>';

    $signatureMexico = '
    <p style="margin: 2px 0;">Prolongacion Mina 110</p>
    <p style="margin: 2px 0;">Colonia Centro</p>
    <p style="margin: 2px 0;">Jerécuaro, Guanajuato 38540</p>
    <p style="margin: 2px 0;">(461) 265-4168</p>';
    define('SIGNATURE_US', $signatureStart . $signatureUS . $signatureEnd);
    define('SIGNATURE_MEXICO', $signatureStart . $signatureMexico . $signatureEnd);
?>