<!-- <?php require_once('../../../private/initialize.php'); ?>
<?php
    // $id = $_GET['id'];
    // $id = $_GET['id'] ?? '1';
    // $sql = "SELECT * FROM traducciones WHERE id = '$id'";
    // $db = tdb_connect();
    // $trad_records = mysqli_query($db, $sql);
    // confirm_result_set($trad_records);
    // $record = mysqli_fetch_assoc($trad_records);
    // mysqli_free_result($trad_records);
?> -->

<!-- <div class="tradShow">
    <h3>Id: <?php echo h($record['id']); ?></h3>
    <h3>Id: <?php echo h($record['folio']); ?></h3>
</div> -->
<section class="contact">
        <div class="content_wrap">
          <form id="contact" method="post" action="" class="dark" onsubmit="sendEmail(); reset(); return false;">
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

            <!-- <div class="form-row">
              <fieldset>
                <legend>País en el que vives:</legend>
                <label for="contact-us">Estados Unidos: </label>
                <input checked type="radio" id="contact-us" name="contact-location" value="Estados Unidos">

                <label for="contact-mx">México: </label>
                <input type="radio" id="contact-mx" name="contact-location" value="México">
              </fieldset>
            </div> -->

            <div class="form-row">
              <label for="contact-inquiry">Consulta*: </label>
              <textarea name="contact-inquiry" id="contact-inquiry" cols="30" rows="5" placeholder="En que te podemos ayudar" required aria-required="true"></textarea>
            </div>
            <div class="g-recaptcha"    data-sitekey="6Ld24i8gAAAAAOIxE-gSZEPWw8k-OiYwilMzapT5"></div>
            <input type="submit" value="Enviar">
            <button id="trad-populate">Ajax Request</button>
            <div id="exec-ajax">

            </div>
          </form>
        </div>
      </section>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br>
<a href="show.php?company=<?php echo u('Widgets&more'); ?>">Link</a><br>
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br>