<?php 
    if(!isset($page_title)){
        $page_title = 'Staff Area';
        } 
    if(!isset($menu_items)){
        $menu_items = array(
            "Menu" => '/index.php');
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlace LLC Personal - <?php echo h($page_title);?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('public/stylesheets/staff.css'); ?>">
    <link rel="stylesheet" media="all" href="<?php echo url_for('private/css/styles.css'); ?>">
    <link rel="icon" type="images/x-icon" href="<?php echo url_for('private/images/enlace.ico'); ?>">
    <script src="<?php echo url_for('private/js/header.js'); ?>" defer></script>
</head>
<body>
<header>
    <nav>
      <div class="logo">
          <img src="<?php echo url_for('private/images/logo.png'); ?>" alt="enlaceLLC">
          <!-- <h3 class="logo-txt">Enlace</h3> -->
      </div>
      <ul class="nav-links dark">
        <?php 
            foreach ($menu_items as $key => $value){
                echo "<li><a href='" . url_for($value) . "'>$key</a></li>";
            }
        ?>  
        <!-- <li><a href="<?php echo url_for('/public/staff/index.php'); ?>">Inicio</a></li>
        <li><a href="contact.htm">Contacto</a></li> -->
      </ul>
      <div class="burger">
          <div class="line1"></div>
          <div class="line3"></div>
          <div class="line2"></div>
      </div>
  </nav>
</header>
    
    <navigation>
        <ul>
            <?php 
                foreach ($menu_items as $key => $value){
                    echo "<li><a href='" . url_for($value) . "'>$key</a></li>";
                }
            ?>    
        
            
        </ul>
    </navigation> 