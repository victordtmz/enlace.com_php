<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $menu_items = $menu_staff;
    $page_title = 'Administradores'; 
    include(SHARED_PATH . '/header_staff.php');
?>

<?php
    if(is_post_request()){
      if($_POST['admin-submit']){
        $record = [];
        $record['nombre'] = $_POST['admin-nombre'] ?? '';
        $record['apellidos'] = $_POST['admin-apellidos'] ?? '';
        $record['email'] = $_POST['admin-email'] ?? '';
        $record['password'] = $_POST['admin-password'] ?? '';
        $record['password-ver'] = $_POST['admin-password-ver'] ?? '';
        // call the function to update the record
        $result = new_record($record);
        if(is_array($result)){
          $errors = $result;
        }elseif ($result){
          $id = $result;
          echo 'New record created with id:' . $id;
          // redirect_to(url_for('/staff/admins/show.php?id=' . $id));
        }

      }
    }else{
        $record = clear_form_new();
    }
    
?> 
<section class="inicio sub-nav">

<div class="content_wrap dark filters">
    <h2>Administradores</h2> 
    <a href="index.php">Listado</a>
  </div>

</section>
<section class="top">
  <div class="form-box">
    <h3>Crear nueva cuenta de administrador</h3>
    
    <form method="post">
      
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
        <input type="password" name="admin-password" id="admin-password" value="<?php echo h($record['password']); ?>" required>
      </div>

      <div class="form-row">
        <label for="admin-password-ver">Verificar contraseña:</label>
        <?php if(isset($errors['password-ver'])){
        foreach($errors['password-ver'] as $error){
           echo '<p class="error">' . h($error) . '</p>';
        }} ?>
        <input type="password" name="admin-password-ver" id="admin-password-ver" value="<?php echo h($record['password-ver']); ?>">
      </div>
      <p>La contraseña debe ser de por lo menos 12 carácteres e incluir por lo menos una letra mayúscula, mínuscula, número y símbolo.</p>
      <div class="form-row">
        <input type="submit" name="admin-submit" id="admin-submit" value="Crear usuario">
      </div>



    </form>
   
  </div>
</section>


