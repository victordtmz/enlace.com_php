<!-- <?php  phpinfo();?>  -->
<?php 
    require_once('../../private/initialize.php'); 
    $page_title = 'Contacto'; 
    // $menu_items = $menu_home;
    include(SHARED_PATH . '/header.php');
?>
<!-- INICIO - GREEN BKGND WITH TITLE -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<section class="inicio">
  <div class="content_wrap">
    <h1>Enlace LLC</h1>
    
  </div>
</section>

<div class="form-box">
  <!-- <div class="form-elements-box"> -->
    <h3>Contacto:</h3>
    <form action="" method="Post">
      
      <div class="form-row">
        <label for="contact-name">Nombre*: </label>
        <input type="text" name="contact-name" id="contact-name" required aria-required="true">
      </div>

      <div class="form-row">
          <label for="contact-phone">Teléfono*: </label>
          <input type="tel" name="contact-phone" id="contact-phone" required>
        </div>
        
        <div class="form-row">
          <label for="contact-email">Email: </label>
          <input type="email" id="contact-email">
        </div>
        <div class="form-row">
          <label for="contact-inquiry">Consulta*: </label>
          <textarea name="contact-inquiry" id="contact-inquiry" cols="30" rows="5" placeholder="En que te podemos ayudar" required aria-required="true"></textarea>
        </div>
        <div class="g-recaptcha"    data-sitekey="6Ld24i8gAAAAAOIxE-gSZEPWw8k-OiYwilMzapT5"></div>
        <input type="submit" value="Enviar">

    </form>
  <!-- </div> -->
</div>


<!-- Close content div before footer -->
</div>
<?php 
    include(SHARED_PATH . '/footer.php');
?>