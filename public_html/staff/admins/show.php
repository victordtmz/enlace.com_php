<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    require_login();
    $id = $_GET['id'] ?? '';
    if(!$id){
      header("Location: index.php" );
    }
?>

<!-- Page heading -->
<?php
    $menu_items = $menu_staff;
    $page_title = 'Traducciones | Detalles'; 
    include(SHARED_PATH . '/header_staff.php');
?> 
<!-- Side bar  -->
<section class="inicio sub-nav">
  <div class="content_wrap dark filters">
      <h2>Administradores</h2> 
	    <p>Usuario:</p>
      <p><?php echo $_SESSION['user'];?></p>
      <a href="index.php">Listado</a>
      <a href="edit.php?id= <?php echo h(u($id)) ?>">Editar</a>
      <a href="delete.php?id= <?php echo h(u($id)) ?>">Eliminar</a>
      <a href="new.php">Nuevo</a>
  </div>
</section>

<!-- Content  -->
<section class="top">
  <div class="form-box">
    <h3>Detalles de la cuenta de administrador</h3>
    <?php $record = select_Id($id); ?>
    <?php set_show_html($record);?>
  </div>
</section>


