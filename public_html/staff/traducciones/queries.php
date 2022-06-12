<?php 
    require_once('../../../private/initialize.php'); 
    $db = new mysqli(DB_TRADUCCIONES[0],DB_TRADUCCIONES[1],DB_TRADUCCIONES[2],DB_TRADUCCIONES[3]);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    
    function select_Id($id){
        global $db;
        $sql = "SELECT *,
            CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) AS 'Folio',
            CONCAT(telPais, telNo) AS 'Telefono'
            from traducciones WHERE id ='" . db_escape($db, $id) . "'";
        // echo $sql;
        $records = $db -> query($sql);
        $record =  $records -> fetch_assoc();
        $records -> free_result();
        return $record;
    }

    
    function select_all(){
        // get filter values
        global $db;
        $filter_year = $_POST['trad-fyear'] ?? date('Y'); 
        $search = $_POST['trad-search'] ?? ""; 
        $search = "%" . $search . "%"; 

        $sql = "SELECT id, 
        CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) as 'Folio', 
        titular AS  'Titular', 
        tipo AS  'Tipo'
        FROM traducciones
        
        WHERE id LIKE '" . db_escape($db,$search) . "'
        AND YEAR(IFNULL(fecha, '')) LIKE '$filter_year'
        
        OR CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) LIKE '" . db_escape($db,$search) . "'
        AND YEAR(IFNULL(fecha, '')) LIKE '" . db_escape($db,$filter_year) . "'

        OR titular LIKE '" . db_escape($db,$search) . "'
        AND YEAR(IFNULL(fecha, '')) LIKE '" . db_escape($db,$filter_year) . "'

        OR Folio LIKE '" . db_escape($db,$search) . "'
        AND YEAR(IFNULL(fecha, '')) LIKE '" . db_escape($db,$filter_year) . "'
        
        ORDER BY fecha DESC, folio DESC
        
        ;";
        // echo $sql;
        $records = $db -> query($sql);
        return $records;
    }

?>