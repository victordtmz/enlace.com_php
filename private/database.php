<?php 
    require_once('db_credentials.php');

    function tdb_connect(){
        $t_connection = mysqli_connect(DB_SERVER, DB_TRAD_USER, DB_PASS, DB_TRAD);
        confirm_db_connect();
        return $t_connection;
    }
    function tdb_disconnect($t_connection){
        if(isset($t_connection)){
            mysqli_close($t_connection);
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

    
?>
