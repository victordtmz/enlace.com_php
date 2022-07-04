<?php  
    // require_once(PROJECT_PATH . '/shared/header_head.php'); 
    $language = $_SESSION['language'];
    $page = $_GET['page'] ?? 'index';
    
    if($language == 'es'){
        $new_language = 'en';
        $title = match ($page){
            // Idioma actual español
            'immigration/I-130' => 'I-130',
            'immigration/index' => 'Migratorios',
            'trials/index' => 'Juicios',
            'trials/divorcio' => 'Divorcio',
            'index' => 'Inicio',
            'contact' => 'Contacto',
            default => ''
        };
    }else{ 
        $new_language = 'es';
        
        $title = match ($page){
            //idioma actual inglés
            'immigration/I-130' => 'I-130',
            'immigration/index' => 'Immigration',
            'trials/divorcio' => 'Divorce',
            'trials/index' => 'Trials',
            'index' => 'Home',
            'contact' => 'Contact',
            default => ''
        };
    }
    $title = "Enlace | $title";

    
?>
    

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('private/css/dark.css'); ?>">
    <link rel="stylesheet" media="all" href="<?php echo url_for('private/css/styles.css'); ?>">
    <link rel="stylesheet" media="all" href="<?php echo url_for('private/css/header_footer.css'); ?>">
    <link rel="icon" type="images/x-icon" href="<?php echo url_for('private/images/enlace.ico'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Libre+Franklin&display=swap" rel="stylesheet">
    <script src="<?php echo url_for('private/js/header.js'); ?>" defer></script>
    <script src="<?php echo url_for('private/js/scripts.js'); ?>" defer></script>
</head>
 
<body>
    <div class="main-body">
<header> 
    <nav class="nav-main dark"> 
      <div class="logo">
          <img src="<?php echo url_for('private\images\logo.png'); ?>" alt="enlaceLLC">
      </div>
      <ul class="nav-links dark">
        <li class="<?php if($page == 'index') {echo 'selected';} ?>">
            <a href="<?php echo set_url_for('/index.php?page=index') ?>" ><?php
            if($language == 'es'){ echo 'Inicio';}else{echo 'Home';} ?></a>
        </li>
        <li class="<?php if($page == 'contact') {echo 'selected';} ?>">
            <a href="<?php echo set_url_for('/index.php?page=contact') ?>" ><?php
            if($language == 'es'){ echo 'Contacto';}else{echo 'Contact';} ?></a>
        </li>
        <li>
            <a href="<?php echo set_url_for('/set_language.php?lan=' . $new_language . '&page=' . $page); ?>"><?php
            if($language == 'es'){ echo 'English';}else{echo 'Español';} ?></a>
        </li>
      </ul>
      <div class="burger">
          <div class="line1"></div>
          <div class="line3"></div>
          <div class="line2"></div>
      </div>
  </nav>
</header>




<section class="sub-header dark" >
    <h1>Enlace LLC</h1>
    <h2>
        <?php if($language == 'en'){
            echo 'International Services Provider';
        } else{
            echo 'Despacho de Servicios Internacionales';
        } ?>    
    </h2>
</section> 