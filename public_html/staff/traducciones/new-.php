<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones | Detalles'; 
    include(SHARED_PATH . '/header_staff.php');
    //get the record.
    
?> 
<section class="inicio sub-nav">
  <?php  include('header_sub.php');?>
</section>
<section class="top">
  <div class="form-box">
    <h3>Nueva traducción</h3>
    <form method="post">
      
    <div class="form-row">
        <label for="trad-id">id:</label>
        <input type="text" name="trad-id" id="trad-id">
      </div>
      
      <div class="form-row">
        <label for="trad-folio">Folio:</label>
        <input type="text" name="trad-folio" id="trad-folio">
      </div>

      <div class="form-row">
        <label for="trad-titular">Titular:</label>
        <input type="text" name="trad-titular" id="trad-titular">
      </div>

      <div class="form-row">
        <label for="trad-tipo">Tipo:</label>
        <input type="text" name="trad-tipo" id="trad-tipo">
      </div>

      <div class="form-row">
        <label for="trad-fecha">Fecha:</label>
        <input type="date" name="trad-fecha" id="trad-fecha" value="<?php 
        date_default_timezone_set('America/Los_Angeles');
        echo date('Y-m-d'); ?>">
      </div>

      <div class="form-row">
        <label for="trad-hojas">Hojas:</label>
        <input type="text" name="trad-hojas" id="trad-hojas">
      </div>

      <div class="form-row">
        <label for="trad-costo">Costo:</label>
        <input type="text" name="trad-costo" id="trad-costo">
      </div>

      <div class="form-row">
        <label for="trad-destino">Destino:</label>
        <input type="text" name="trad-destino" id="trad-destino">
      </div>

      <div class="form-row">
        <label for="trad-idioma">Idioma:</label>
        <input type="text" name="trad-idioma" id="trad-idioma">
      </div>

      <div class="form-row">
        <label for="trad-pais">Pais:</label>
        <input type="text" name="trad-pais" id="trad-pais">
      </div>

      <div class="form-row">
        <label for="trad-estado">Estado:</label>
        <input type="text" name="trad-estado" id="trad-estado">
      </div>

      <div class="form-row">
        <label for="trad-ciudad">Ciudad:</label>
        <input type="text" name="trad-ciudad" id="trad-ciudad">
      </div>

      <div class="form-row">
        <label for="trad-origen">Origen:</label>
        <input type="text" name="trad-origen" id="trad-origen">
      </div>

      <div class="form-row">
        <label for="trad-contacto">Contacto:</label>
        <input type="text" name="trad-contacto" id="trad-contacto">
      </div>

      <div class="form-row">
        <label for="trad-email">Email:</label>
        <input type="text" name="trad-email" id="trad-email">
      </div>

      <div class="form-row">
        <label for="trad-telPais">Teléfono - Pais:</label>
        <input type="text" name="trad-telPais" id="trad-telPais" value="+">
      </div>

      <div class="form-row">
        <label for="trad-telNo">Teléfono - Número:</label>
        <input type="text" name="trad-telNo" id="trad-telNo" >
      </div>
      
      <div class="form-row">
        <label for="trad-notas">Notas:</label>
        <textarea type="text" name="trad-notas" id="trad-notas"></textarea>
      </div>
      
      
    </form>
   
  </div>
</section>


