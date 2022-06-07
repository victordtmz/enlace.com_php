<?php 
    require_once('../../../private/initialize.php'); 
    $db = traducciones_db_connect();
    
    function select_records($sql){
        // $db = traducciones_db_connect();
        global $db;
        $records = mysqli_query($db, $sql);
        confirm_result_set($records);
        return $records;
    }

    function select_Id($id){
        // returns an associate array with the record
        global $db;
        $sql = "SELECT *,
            CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) AS 'Folio',
            CONCAT(telPais, telNo) AS 'Telefono'
            from traducciones WHERE id ='" . db_escape($db, $id) . "'";
        // echo $sql;
        $db_record = select_records($sql);
        $record = mysqli_fetch_assoc($db_record);
        mysqli_free_result($db_record);
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
        return select_records($sql);
    }

?>