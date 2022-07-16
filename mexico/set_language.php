<?php 
    require_once('../private/initialize.php'); 
    // $_SESSION['language'] = $_GET['lan'];
    $language = $_GET['lan'];
    setcookie('language', $_GET['lan']);
    redirect_to(url_for_guanajuato('/index.php?page=' . $_GET['page']));