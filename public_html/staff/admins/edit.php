<?php 
    require_once('../../../private/initialize.php'); 
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Administradores'; 
    include(SHARED_PATH . '/header_staff.php');
    include_once("queries.php");
    
    //get the record.
    $id = $_GET['id'] ?? '';
    if(!$id){
      header("Location: index.php" );
    }

    if(is_post_request()){
      $record = [];
      $record['id'] = $id;
      $record['nombre'] = $_POST['admin-nombre'] ?? '';
      $record['apellidos'] = $_POST['admin-apellidos'] ?? '';
      $record['email'] = $_POST['admin-email'] ?? '';
      $record['password'] = $_POST['admin-password'] ?? '';
      $record['password-ver'] = $_POST['admin-password-ver'] ?? '';
      // call the function to update the record
      $result = edit_record($record);
      if ($result === true){
        redirect_to(url_for('/staff/admins/show.php?id=' . $id));
      }else{
        $errors = $result;
      }
      
    }else{
      $record = select_Id_edit($id);
    }
    
?> 
<section class="inicio sub-nav">
  <div class="content_wrap dark filters">
      <h2>Administradores</h2> 
      <a href="index.php">Listado</a>
      <a href="show.php?id= <?php echo h(u($id)) ?>">Detalles</a>
      <a href="new.php">Nuevo</a>
  </div>
</section>
<section class="top">
  <div class="form-box">
    <h3>Crear nueva cuenta de administrador</h3>
    
    <form method="post" action="<?php echo url_for('/staff/admins/edit.php?id=' . h(u($id))); ?>">
      
    <div class="form-row">
        <label for="admin-nombre">Nombre:</label>
        <?php if(isset($errors['nombre'])){
        foreach($errors['nombre'] as $error){
           echo '<p class="error">' . h($error) . '</p>';
        }} ?>
        <input type="text" name="admin-nombre" id="admin-nombre" value="<?php echo h($record['nombre']); ?>" required>
      </div>
      
      
      <div class="form-row">
        <label for="admin-apellidos">Apellidos:</label>
        <?php if(isset($errors['apellidos'])){
        foreach($errors['apellidos'] as $error){
           echo '<p class="error">' . h($error) . '</p>';
        }} ?>
        <input type="text" name="admin-apellidos" id="admin-apellidos" value="<?php echo h($record['apellidos']); ?>" required>
      </div>

      <div class="form-row">
        <label for="admin-email">Email:</label>
        <?php if(isset($errors['email'])){
        foreach($errors['email'] as $error){
           echo '<p class="error">' . h($error) . '</p>';
        }} ?>
        <input type="text" name="admin-email" id="admin-email"value="<?php echo h($record['email']); ?>" required>
      </div>

      <div class="form-row">
        <label for="admin-password">Contraseña:</label>
        <?php if(isset($errors['password'])){
        foreach($errors['password'] as $error){
           echo '<p class="error">' . h($error) . '</p>';
        }} ?>
        <input type="password" name="admin-password" id="admin-password" value="" required>
      </div>

      <div class="form-row">
        <label for="admin-password-ver">Verificar contraseña:</label>
        <?php if(isset($errors['password-ver'])){
        foreach($errors['password-ver'] as $error){
           echo '<p class="error">' . h($error) . '</p>';
        }} ?>
        <input type="password" name="admin-password-ver" id="admin-password-ver" value="">
      </div>
      <p>La contraseña debe ser de por lo menos 12 carácteres e incluir por lo menos una letra mayúscula, mínuscula, número y símbolo.</p>
      <div class="form-row">
        <input type="submit" name="admin-submit" id="admin-submit" value="Guardar cambios">
      </div>
    </form>
  </div>
</section>


