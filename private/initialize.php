<?php
    ob_start();
    session_start();

    
    define('PRIVATE_PATH', dirname(__FILE__));
    define('PROJECT_PATH', dirname(PRIVATE_PATH));
    define('SHARED_PATH', PRIVATE_PATH . '/shared');
    define('GTO_PAGES_PATH', PROJECT_PATH . '/guanajuato/pages');
    
    
    // echo PRIVATE_PATH . '<br>';
    // 
    // echo PROJECT_PATH ;
    // 
    // define('GTO_PAGES_PATH', PROJECT_PATH . '/guanajuato/pages');
    // define('SHARED', PRIVATE_PATH . '/shared');

    if (str_contains(PRIVATE_PATH, 'C:\\')){
        define("WWW_ROOT", '/enlacellc.com');
    }else{
        define("WWW_ROOT", 'https://enlacellc.com');
    }

    require_once(SHARED_PATH . '/functions.php');
    // require_once(PRIVATE_PATH . '/database.php');
    require_once(SHARED_PATH . '/validation_functions.php');
    require_once(SHARED_PATH . '/auth_functions.php');
    require_once(SHARED_PATH . '/credentials.php');

    
    if(isset($_COOKIE['language'])){
        $_SESSION['language'] = $_COOKIE['language'];
    }else {
        $_SESSION['language'] = 'es';
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