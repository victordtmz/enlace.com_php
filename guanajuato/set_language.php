<?php 
    require_once('../private/initialize.php'); 
    // $_SESSION['language'] = $_GET['lan'];
    $language = $_GET['lan'];
    setcookie('language', $_GET['lan']);
    redirect_to(set_url_for('/index.php?page=' . $_GET['page']));