<?php 
    require_once('../private/initialize.php'); 
    // $_SESSION['language'] = $_GET['lan'];
    $language = $_GET['lan'];
    $page = $_GET['page'];
    setcookie('language', $language, time()+60*60*24*365); 
    redirect_to(url_for('index.php?page=' . $page . '&lan=' . $language));