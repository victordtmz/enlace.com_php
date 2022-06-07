<?php 
    require_once('../../../private/initialize.php'); 
    // $db = admins_db_connect();
    // create connection
    $db = new mysqli(DB_ADMIN[0],DB_ADMIN[1],DB_ADMIN[2],DB_ADMIN[3]);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
}
    function db_connect(){

    }

    // function select_admin_headers(){
    //     global $db;
    //     $sql = "SELECT COLUMN_NAME 
    //         FROM INFORMATION_SCHEMA.COLUMNS 
    //         WHERE TABLE_SCHEMA = 'u210833393_admin' 
    //         AND TABLE_NAME = 'admins';";
    //         $records = $db->query($sql);
    //         $record = $records->fetch_assoc();
    //         $records->free_result();
    //         return $record;


    // }

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
        // echo $sql;
        



        // $db_record = select_records($sql);
        // $record = mysqli_fetch_assoc($db_record);
        // mysqli_free_result($db_record);
        // return $record;

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
        // echo $sql;
        $records = $db->query($sql);
        return $records;

        // return select_records($sql);
    }

?>