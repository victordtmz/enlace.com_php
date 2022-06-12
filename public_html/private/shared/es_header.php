<?php  
    $page_title = (isset($page_title) ? ("Enlace LLC | $page_title") : 'Enlace LLC' );
    if(!isset($menu_items)){
        $menu_items = $menu_home;
    } 
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo h($page_title);?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('private/css/styles.css'); ?>">
    <link rel="stylesheet" media="all" href="<?php echo url_for('private/css/public.css'); ?>">
    <link rel="icon" type="images/x-icon" href="<?php echo url_for('private/images/enlace.ico'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Libre+Franklin&display=swap" rel="stylesheet">
    <script src="<?php echo url_for('private/js/header.js'); ?>" defer></script>
    <script src="<?php echo url_for('private/js/scripts.js'); ?>" defer></script>
</head>
<body>
<header>
    <nav class="nav-main">
      <div class="logo">
          <img src="<?php echo url_for('private\images\logo.png'); ?>" alt="enlaceLLC">
      </div>
      <ul class="nav-links dark">
      <li><a href="<?php echo url_for('index.php?page=index') ?>">Inicio</a></li>
        <li><a href="<?php echo url_for('index.php?page=contact') ?>">Contacto</a></li>
        <li><a href="<?php echo url_for('set_language.php?lan=en&page=' . $_GET['page']); ?>">Ingles</a></li>

      </ul>
      <div class="burger">
          <div class="line1"></div>
          <div class="line3"></div>
          <div class="line2"></div>
      </div>
  </nav>
</header>
<div class="content">

    
