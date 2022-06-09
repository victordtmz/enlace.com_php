<?php 
    $db = new mysqli(DB_ADMIN[0],DB_ADMIN[1],DB_ADMIN[2],DB_ADMIN[3]);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
}
    function db_connect(){

    }


    function select_Id($id){
        // returns an associate array with the record
        global $db;
        $sql = "SELECT id,
            CONCAT(nombre, ' ', apellidos) as 'Nombre', 
            email from admins WHERE id ='" . db_escape($db, $id) . "'";
        $records = $db->query($sql);
        $record = $records->fetch_assoc();
        $records->free_result();
        return $record;
    }

    function select_Id_edit($id){
        // returns an associate array with the record
        global $db;
        $sql = "SELECT id,
            nombre,
            apellidos, 
            email from admins WHERE id ='" . db_escape($db, $id) . "'";
        $records = $db->query($sql);
        $record = $records->fetch_assoc();
        $records->free_result();
        return $record;
    }

    
    function select_all(){
        // get filter values
        global $db;
        $search = $_POST['trad-search'] ?? ""; 
        $search = "%" . $search . "%"; 

        $sql = "SELECT id, 
            nombre AS 'Nombre', 
            apellidos AS 'Apellidos', 
            email AS 'Email'
            FROM admins
        
        WHERE nombre LIKE '" . db_escape($db,$search) . "'
        OR apellidos LIKE '" . db_escape($db,$search) . "'
        OR email LIKE '" . db_escape($db,$search) . "'
        OR id LIKE '" . db_escape($db,$search) . "'
        ORDER BY apellidos, nombre ASC        
        ;";
        $records = $db->query($sql);
        return $records;
    }

    
    function edit_record($record){
        global $db;
        
        $errors = validate_record($record);
        if(!empty($errors)){
            return $errors;
        }

        $sql = "UPDATE admins SET ";
        $sql .= "nombre = '" . $record['nombre'] . "', ";
        $sql .= "apellidos = '" . $record['apellidos'] . "', ";
        $sql .= "email = '" . $record['email'] . "', ";
        $sql .= "hashed_password ='" . $record['password'] . "' ";
        $sql .= "WHERE id = '" . $record['id'] . "' LIMIT 1;";
        // echo $sql;
  
        $result = $db -> query($sql);
        if ($result){
          //update succesfull
          return true;
        }else{
          // update failed
          echo printf('Error al intentar guardar el registro: %s\n', $db->error);
          exit;
        }
      }
      
      function new_record($record){
        global $db;
        
        $errors = validate_record($record);
        if(!empty($errors)){
            return $errors;
        }

        $sql = "INSERT INTO admins (nombre, apellidos, email, hashed_password) VALUES (";
        $sql .= "'" . $record['nombre'] . "',";
        $sql .= "'" . $record['apellidos'] . "',";
        $sql .= "'" . $record['email'] . "',";
        $sql .= "'" . $record['password'] . "')";
        $result = $db -> query($sql);
        
        if ($result){
            $new_id = $db -> insert_id;
            return $new_id;
        }else{
            echo printf('Error al intentar guardar el registro: %s\n', $db->error);
            exit;
        }
      }
      
      
      function clear_form_new(){
        $record = [];
        $record['nombre'] = '';
        $record['apellidos'] =  '';
        $record['email'] =  '';
        $record['password'] = '';
        $record['password-ver'] = '';
        return $record;
    }

?>

<?php
// functions 
// ---------------------------------------------------------------------------------
    function validate_record($record){
        $errors = [];
        //nombre
        if(is_blank($record['nombre'])){
            $errors['nombre'][] = 'Campo obligatorio';
        }
        //apellidos
        if(is_blank($record['apellidos'])){
            $errors['apellidos'][] = 'Campo obligatorio';// = array('Campo obligatorio')
        }
        //email
        if(is_blank($record['email'])){
            $errors['email'][] = 'Campo obligatorio';
        }
        if(!has_valid_email_format($record['email'])){ 
            $errors['email'][] = 'Este campo requiere un correo valido';
        }
        if(!isset($record['id'])){
            $record['id'] = 0;
        }
        if(!has_unique_username($record['email'], $record['id'])){
            $errors['email'][] = 'Nombre de usuario no disponible';
        }

        // password
        if(is_blank($record['password'])){
            $errors['password'][] = 'Campo obligatorio';
        }
        if(has_length_less_than($record['password'], 12)){
            $errors['password'][] = 'Su contraseña debe de contenr por lo menos 12 carácteres';
        }
        // if(has_inclusion_of($record['password'], [])){
        //     $errors['password'][] = 'Su contraseña debe de contenr por lo menos 12 carácteres';
        // }
        //password verification
        if($record['password-ver'] != $record['password']){
            $errors['password-ver'][] = 'Debe ser igual a su contraseña';
        }
        return $errors;
    }
?>