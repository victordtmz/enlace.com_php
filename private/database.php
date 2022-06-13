<?php 
    // require_once('credentials.php');

    // $db_traducciones = new mysqli(DB_SERVER, DB_TRAD_USER, DB_PASS, DB_TRAD);
    // $db_admin = new mysqli(DB_SERVER, DB_ADMIN_USER, DB_ADMIN_PASS, DB_ADMIN);

    // function db_connect($db, $user, $password){
    //     $t_connection = mysqli_connect(DB_SERVER, $user, $password, $db);
    //     confirm_db_connect();
    //     return $t_connection;
    // }
    
    function db_disconnect($connection){
        if(isset($connection)){
            mysqli_close($connection);
        }
    }

    function db_escape($connection, $string){
        return mysqli_real_escape_string($connection, $string);
    }

    function confirm_db_connect(){
        if(mysqli_connect_errno()){
            $msg = "Error de conexion con la base de datos: ";
            $msg .= mysqli_connect_error();
            $msg .= " (" . mysqli_connect_errno() . ")";
            exit($msg);
        }
    }

    function confirm_result_set($result_set) {
        if (!$result_set) {
            exit("No se obtuvieron datos de la base.");
        }
    }

    //TRADUCCIONES
    //---------------------------------------------------------------------------
    function traducciones_db_connect(){
        $connection = db_connect(DB_TRAD, DB_TRAD_USER, DB_PASS);
        return $connection;
    }
    //ADMINS
    //---------------------------------------------------------------------------
    function admins_db_connect(){
        $connection = db_connect(DB_ADMIN, DB_ADMIN_USER, DB_ADMIN_PASS);
        return $connection;
    }
    
?>
