<?php 
    $id = $_GET['id'] ?? '';
    if(!$id){
      header("Location: index.php" );
    }
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones | Detalles'; 
    include(SHARED_PATH . '/header_staff.php');
    //get the record.
   
    $record = select_Id($id);
    $tel = $record['Telefono'];
    $email = $record['email'];
    //give telefono and email htags
    if($email){
        $record['email'] = "<a href='mailto:$email'>$email</a>";
    }
    if($tel){
        $record['Telefono'] = "<a href='tel:$tel'>$tel</a>";
        $whats = str_replace('+', '', $tel);
        $record['WhatsApp'] = "<a href='https://wa.me/$whats'>$tel</a>";
    }else{
      $record['WhatsApp'] = '';
    }
    $procedencia = $record['pais'] . ', ' . $record['estado'] . ', ';
    $procedencia .= $record['ciudad'] . ', ' . $record['origen'];

    //configure the record to be shown as associate array
    $display_record = array(
      'Id' => $record['id'],
      'Folio' => $record['Folio'],
      'Titular' => $record['titular'],
      'Tipo' => $record['tipo'],
      'Fecha' => $record['fecha'],
      'Hojas' => $record['hojas'],
      'Costo' => $record['costo'],
      'Destino' => $record['destino'],
      'Idioma' => $record['idioma'],
      'Origen del documento' => $procedencia,
      'Contacto' => $record['contacto'],
      'Telefono' => $record['Telefono'],
      'WhatsApp' => $record['WhatsApp'],
      'Email' => $record['email'],
      'Notas' => $record['notas']
      
    );
    
    
    
?> 
<section class="inicio sub-nav">
  <?php  include('header_sub.php');?>
</section>
<section class="top">
  <div class="form-box">
    <h3>Detalles de la traducción</h3>
    <?php set_show_html($display_record);?>
  </div>
</section>


