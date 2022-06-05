<?php
    ob_start();
    define("WWW_ROOT", '/enlace/deployed/public_html');
    /*
    Assign file paths to PHP constants
    __FILE__ returns the current path to this file (initialize.php)
    dirname() returns the path to the parent directory (private) folder
    */


    
    
    define('PRIVATE_FILES', dirname(__FILE__));
    // echo PRIVATE_FILES . '<br>';
    define('PROJECT_PATH', dirname(PRIVATE_FILES) . '/public_html');
    // echo PROJECT_PATH. '<br>';
    define('SHARED_PATH', PROJECT_PATH . '/private/shared');
    // echo SHARED_PATH;
    // define('PRIVATE_PATH', dirname(__FILE__));
    
    
    // define('PUBLIC_PATH', PROJECT_PATH . '/public_html');
    // define('SHARED_PATH', PRIVATE_PATH . '/shared');

    

    require_once('functions.php');
    require_once('database.php');
    // require_once('db_queries.php');
    
    $menu_home = array(
        "Inicio" => '/index.php',
        "Contacto" => '/contact.php'
    );
    
    $menu_staff = $menu_home;
    $menu_staff["Traducciones"] = '/staff/traducciones/index.php';

    
    // $menu_staff = array_push($menu_home, "Traducciones" => 'public/staff/traducciones/index.php' );
    
//     $menu_staff = array(
//         "Inicio" => '/index.php',
//         "Staff" => 'public/staff/index.php',
//         "Traducciones" => 'public/staff/traducciones/index.php'
//     );

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