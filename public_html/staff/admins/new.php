<?php 
    require_once('../../../private/initialize.php'); 
    $menu_items = $menu_staff;
    $page_title = 'Administradores'; 
    include(SHARED_PATH . '/header_staff.php');
?>
<section class="inicio sub-nav">
  <?php include('header_sub.php') ?>
</section>
<?php
    //get the record.
    // $nombre = '';
    // $apellidos = '';
    // $email =  '';
    // $pass =  '';
    // $pass_verify = '';
    if(is_post_request()){
      if($_POST['admin-submit']){
        $nombre = $_POST['admin-nombre'] ?? '';
        $apellidos = $_POST['admin-apellidos'] ?? '';
        $email = $_POST['admin-email'] ?? '';
        $pass = $_POST['admin-password'] ?? '';
        // $pass_verify = $_POST['admin-password-ver'] ?? '';
  
        $sql = "INSERT INTO admins (nombre, apellidos, email, hashed_password) VALUES (";
        $sql .= "'" . $nombre . "',";
        $sql .= "'" . $apellidos . "',";
        $sql .= "'" . $email . "',";
        $sql .= "'" . $pass . "')";
        echo $sql;
  
        $result = $db -> query($sql);
        if ($result){
          $new_id = $db -> insert_id;
          redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
  
        }else{
          echo printf('Error al intentar guardar el registro: %s\n', $db->error);
          exit;
        }
        
      }
    }else{
        clear_form_new();
    }
    
?> 

<section class="top">
  <div class="form-box">
    <h3>Crear nueva cuenta de administrador</h3>
    
    <form method="post">
      
    <div class="form-row">
        <label for="admin-nombre">Nombre:</label>
        <input type="text" name="admin-nombre" id="admin-nombre" value="<?php echo h($nombre); ?>" required>
      </div>
      
      <div class="form-row">
        <label for="admin-apellidos">Apellidos:</label>
        <input type="text" name="admin-apellidos" id="admin-apellidos" value="<?php echo h($apellidos); ?>" required>
      </div>

      <div class="form-row">
        <label for="admin-email">Email:</label>
        <input type="text" name="admin-email" id="admin-email"value="<?php echo h($email); ?>" required>
      </div>

      <div class="form-row">
        <label for="admin-password">Contraseña:</label>
        <input type="password" name="admin-password" id="admin-password" value="<?php echo h($pass); ?>" required>
      </div>

      <div class="form-row">
        <label for="admin-password-ver">Verificar contraseña:</label>
        <input type="password" name="admin-password-ver" id="admin-password-ver" value="<?php echo h($pass_verify); ?>">
      </div>
      <p>La contraseña debe ser de por lo menos 12 carácteres e incluir por lo menos una letra mayúscula, mínuscula, número y símbolo.</p>
      <div class="form-row">
        <input type="submit" name="admin-submit" id="admin-submit" value="Crear usuario">
        <input type="submit" name="admin-cancel" id="admin-cancel" value="Cancelar">
      </div>



    </form>
   
  </div>
</section>


