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

?> 
<section class="inicio sub-nav">

<div class="content_wrap dark filters">
    <h2>Administradores</h2> 
    <a href="index.php">Listado</a>
    <a href="edit.php?id= <?php echo h(u($id)) ?>">Editar</a>
    <a href="new.php">Nuevo</a>

  </div>

</section>
<section class="top">
  <div class="form-box">
    <h3>Detalles de la cuenta de administrador</h3>
    <?php set_show_html($record);?>
  </div>
</section>


