<?php 
    require_once('db_credentials.php');

    function tdb_connect(){
        $t_connection = mysqli_connect(DB_SERVER, DB_TRAD_USER, DB_PASS, DB_TRAD);
        return $t_connection;
    }
    function tdb_disconnect($t_connection){
        if(isset($t_connection)){
            mysqli_close($t_connection);
        }
    }
?>
