<?php 
    $page_title = 'Contacto'; 
    // $menu_items = $menu_home;
 

    if(is_post_request()){
      $c_name = $_POST['contact-name'] ?? '';
      $c_phone = $_POST['contact-phone'] ?? '';
      $c_email = $_POST['contact-email'] ?? '';
      $c_inquiry = $_POST['contact-inquiry'] ?? '';
      $c_signature = $_POST['contact-pais'] ?? '';
    }else{
      $c_name = '';
      $c_phone = '';
      $c_email = '';
      $c_inquiry = '';
      $c_signature = 'US';
    }
    
?>
<!-- INICIO - GREEN BKGND WITH TITLE -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<section class="content-start">
<div class="form-box">
  <!-- <div class="form-elements-box"> -->
    <h3>Contact:</h3>
    <form action="" method="Post">
      
      <div class="form-row">
        <label for="contact-name">Name*: </label>
        <input type="text" name="contact-name" id="contact-name" value="<?php echo $c_name;?>" required aria-required="true">
      </div> 
      
      <div class="form-row">
        <fieldset>
          <legend>Country:</legend>
          
        <label for="US"><input type="radio" name="contact-pais" value="US" id="US" <?php echo ($c_signature == 'US' ? 'checked' : '' );?>>United States</label>
        <label for="Mexico"><input type="radio" name="contact-pais" value="Mexico" id="Mexico" <?php echo ($c_signature == 'Mexico' ? 'checked':''); ?>>Mexico</label>

      </fieldset>
      </div> 
     
      <div class="form-row">
          <label for="contact-phone">Phone*: </label>
          <input type="tel" name="contact-phone" id="contact-phone" required value="<?php echo $c_phone;?>">
        </div>
        
        <div class="form-row">
          <label for="contact-email">Email: </label>
          <input type="email" id="contact-email" name="contact-email" value="<?php echo $c_email;?>">
        </div>
        <div class="form-row">
          <label for="contact-inquiry">Inquiry*: </label>
          <textarea name="contact-inquiry" id="contact-inquiry" 
            cols="30" rows="5" placeholder="How can we help you" required aria-required="true"><?php echo $c_inquiry;?></textarea>
        </div>
        
        <div class="g-recaptcha"  name="g-recaptcha-response"  
          data-sitekey="<?php echo CAPTCHA_SITE_KEY?>"></div>
        
        <input type="submit" value="Send" name="submit">
        
        <div class="form-status">
      
        <?php
          if(isset($_POST['submit'])){
            include(PRIVATE_FILES . '/phpMailer/config.php');
            
            $c_name = $_POST['contact-name'];
            $c_phone = $_POST['contact-phone'];
            $c_email = $_POST['contact-email'];
            $c_inquiry = $_POST['contact-inquiry'];
            $c_signature = $_POST['contact-pais'];
            // $c_language = $_SESSION['language'];
            
          
            // $email_from = 'admin@enlacellc.com';
            $email_subject = "Consulta de $c_name";
            $email_body = "
              <strong>Nombre</strong>: $c_name.<br>".
              "<strong>Telefono</strong>: $c_phone.<br>".
              "<strong>Email</strong>: $c_email.<br>".
              "<strong>Consulta</strong>: $c_inquiry.<br>".
              "<strong>Idioma</strong>: $language.<br>";
            
            
            // $headers = "From: $email_from\r\n";
            // $headers .= "Reply-to: $c_email\r\n";

            $secretKey = CAPTCHA_SECRET_KEY;
            $responseKey = $_POST['g-recaptcha-response'];
            $c_ip = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$c_ip";

            $response = file_get_contents($url);
            $response = json_decode($response);
            
            

            if ($response->success){
              mailerOpen();
              $email_enlace = array('Despacho - Enlace LLC' => 'abogadovictordomingo@hotmail.com', 'Victor - Personal' => 'victordmtz@hotmail.com', 'Ange - Personal' =>'angeles84_01@live.com.mx');
              $enlace_body = 'Se ha solicitado una consulta a traves de enlacellc.com con los siguinetes datos: <br><br>' . $email_body;
              mailerSend(to: $email_enlace, subject: $email_subject, body: $enlace_body, signature: $c_signature);
              mailerClose();
            } else{
              echo "<pre>Invalid reCaptcha, please try again</pre>";
            }
          }
          ?>
      </div>

    </form>
  <!-- </div> -->
</div>
 

</section>