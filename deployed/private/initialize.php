<?php
    ob_start();
    define("WWW_ROOT", '/enlace/deployed');
    /*
    Assign file paths to PHP constants
    __FILE__ returns the current path to this file (initialize.php)
    dirname() returns the path to the parent directory (private) folder
    */
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    

    require_once('functions.php');
    require_once('database.php');
    // require_once('db_queries.php');
    
    $menu_home = array(
        "Inicio" => '/index.php',
        "Contacto" => 'public/site/contact.php'
    );
    
    $menu_staff = $menu_home;
    $menu_staff["Traducciones"] = 'public/staff/traducciones/index.php';
    // $menu_staff = array_push($menu_home, "Traducciones" => 'public/staff/traducciones/index.php' );
    
//     $menu_staff = array(
//         "Inicio" => '/index.php',
//         "Staff" => 'public/staff/index.php',
//         "Traducciones" => 'public/staff/traducciones/index.php'
//     );
?>