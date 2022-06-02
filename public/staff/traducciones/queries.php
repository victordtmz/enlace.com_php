<?php 
    require_once('../../../private/initialize.php'); 
    
    $table = " FROM traducciones";
    $selectList = "SELECT id, 
        CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) as 'Folio', 
        titular AS  'Titular', 
        tipo AS  'Tipo'";

    $selectAll = "$selectList, 
        fecha AS 'Fecha',
        hojas AS 'Hojas',
        costo AS 'Costo',
        destino AS 'Destino',
        idioma AS 'Idioma',
        pais AS 'Pais',
        estado AS 'Estado',
        ciudad AS 'Ciudad',
        origen AS 'Dependencia',
        contacto AS 'Solicitante',
        email AS 'Email',
        telPais AS 'Pais',
        telNo AS 'Telefono',
        notas AS 'Notas'";

    function select_records($sql){
        $db = tdb_connect();
        $records = mysqli_query($db, $sql);
        confirm_result_set($records);
        return $records;
    }
    
    function select_trad_details($id){
        global $table;
        global $selectAll;
        $selectAll .= " $table WHERE id = $id;";
        $records = select_records($selectAll);
        return $records;
    }
    function select_trad_list(){
        $filter_year = $_POST['trad-fyear'] ?? date('Y'); 
        $search = $_POST['trad-search'] ?? ""; 
        $search = "%" . $search . "%"; 
        // echo $search;
        global $table;
        global $selectList;
        $selectList .= $table . " WHERE id LIKE '$search'";
        $selectList .= " AND YEAR(IFNULL(fecha, '')) LIKE $filter_year";

        $selectList .= " OR CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) LIKE '$search'";
        $selectList .= " AND YEAR(IFNULL(fecha, '')) LIKE $filter_year";

        $selectList .= " OR titular LIKE '$search'";
        $selectList .= " AND YEAR(IFNULL(fecha, '')) LIKE $filter_year";

        $selectList .= " OR Folio LIKE '$search'";
        $selectList .= " AND YEAR(IFNULL(fecha, '')) LIKE $filter_year";
        $selectList .= " ORDER BY fecha DESC, folio DESC;"; 
        // echo $selectList;
        $records = select_records($selectList);
        return $records;
    }
    
    
    
        
        // WHERE YEAR(IFNULL(fecha, '')) = 2022 
        // ORDER BY fecha DESC, folio DESC;";

    // WHERE IFNULL (pais, "") LIKE %s
    // AND IFNULL (estado, "") LIKE %s
    // AND IFNULL (ciudad, "") LIKE %s
    // AND IFNULL(tipo, "") LIKE %s
    // AND YEAR(IFNULL(fecha, "")) LIKE %s
    // ORDER BY fecha DESC, folio DESC
    // LIMIT 400;"
    // $sql = "SELECT * FROM traducciones LIMIT 50;";
   
?>