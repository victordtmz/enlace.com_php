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
          <input type="email" id="contact-email" name="contact-email">
        </div>
        <div class="form-row">
          <label for="contact-inquiry">Consulta*: </label>
          <textarea name="contact-inquiry" id="contact-inquiry" cols="30" rows="5" placeholder="En que te podemos ayudar" required aria-required="true"></textarea>
        </div>
        <div class="g-recaptcha"  name="g-recaptcha-response"  data-sitekey="CAPTCHA_SITE_KEY"></div>
        
        <input type="submit" value="Enviar" name="submit">
        <div class="status">
      <?php
        if(isset($_POST['submit'])){
          include(PRIVATE_PATH . '/phpMailer/config.php');
          
          $User_name = $_POST['contact-name'];
          echo $User_name;
          $User_phone = $_POST['contact-phone'];
          $User_email = $_POST['contact-email'];
          $User_inquiry = $_POST['contact-inquiry'];
          echo $User_phone, $User_email, $User_inquiry;

          $email_from = 'admin@enlacellc.com';
          $email_subject = "Consulta de $User_name";
          $email_body = "Nombre: $User_name.\n".
                        "Telefono: $User_phone.\n".
                        "Email: $User_email.\n".
                        "Consulta: $User_inquiry.\n";
          $email_to = 'admin@enlacellc.com';
          $headers = "From: $email_from\r\n";
          $headers .= "Reply-to: $User_email\r\n";

          $secretKey = "CAPTCHA_SECRET_KEY";
          $responseKey = $_POST['g-recaptcha-response'];
          $UserIP = $_SERVER['REMOTE_ADDR'];
          $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

          $response = file_get_contents(u($url));
          $response = json_decode($response);
          
          

          if ($response->success){
            mailerOpen();
            mailerSend();
            mailerClose();
          } else{
            echo "<span>Captcha invalido, intenta nuevamente</span>";
          }

          

        }
        ?>
      </div>

    </form>
  <!-- </div> -->
</div>
 

<!-- Close content div before footer -->
</div>
<?php 
    include(SHARED_PATH . '/footer.php');
?>