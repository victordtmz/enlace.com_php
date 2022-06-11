<?php
require_once('../../private/initialize.php'); 
require_once(PROJECT_PATH . '/staff/admins/queries.php');

$errors = [];
$username = '';
$password = '';

if(is_post_request()) {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Error validation
  if(is_blank($username)){
    $errors[] = 'Proporcione usuario';
  }
  if(is_blank($password)){
    $errors[] = 'Proporcione contraseña';
  }
  // log in if there are no errors. - if not, the rest of the form will process
  if(empty($errors)){
    $login_error = 'Datos no validos, intente nuevamente';
    $admin = select_user_name($username);
    if($admin){//if a user is found
      if(password_verify($password, $admin['hashed_password'])){//verify password

        log_in_admin($admin);
        // var_dump($_SESSION);
        redirect_to(url_for('staff/index.php'));
      }else{//password did not match
        $errors[] = $login_error;
      }
    }else{//no se encontró el usuario
      $errors[] = $login_error;
    }
  }
  
}

?>

<!-- Page heading -->
<?php
    $menu_items = $menu_staff;
    $page_title = 'Log in'; 
    include(SHARED_PATH . '/header_staff.php');
?> 

<section class="top">
  <div class="form-box">
    <h3>Iniciar sesión</h3>


  <?php echo display_errors($errors); ?>

  <form action="login.php" method="post">
    <div class="form-row">
      <label for="username">Usuario:</label>
      <input type="text" name="username" id="username" value="<?php echo h($username); ?>" required>
    </div>
    <div class="form-row">
      <label for="password">Usuario:</label>
      <input type="password" name="password" id="password" value="<?php echo h($password); ?>" required>
    </div>
    
    <input type="submit" value="Iniciar sesion" name="submit"  />
  </form>

</div>
</section>

<?php include(PROJECT_PATH . '/private/shared/footer_staff.php'); ?>

