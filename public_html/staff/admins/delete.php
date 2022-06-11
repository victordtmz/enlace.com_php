<?php 
    require_once('../../../private/initialize.php'); 
    require_login();
    $id = $_GET['id'] ?? '';
    if(!$id){
      redirect_to('index.php');
    }
    require_once('queries.php');
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones | Eliminar'; 
    include(SHARED_PATH . '/header_staff.php');
    //get the record.
   
    

    if(is_post_request()){
        $result = delete_Id($id);
        if($result){
            redirect_to('index.php');
        }
    }else{
        $record = select_Id($id);
    }


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
    <h3>Eliminar Registro</h3>
    <p>Estás seguro que deseas eliminar el usuario</p>
    <form method="post" action="delete.php?id= <?php echo h(u($id))?>">
      <div class="form-row">
        <input type="submit" name="submit" id="submit" value="Eliminar usuario">
      </div>
    </form>
  </div>
</section>
<section class="top">
  <div class="form-box">
    <h3>El siguiente registro será eliminado</h3>
    <?php set_show_html($record);?>
  </div>
</section>