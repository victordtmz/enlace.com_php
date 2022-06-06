<?php 
    require_once('../../../private/initialize.php'); 
    
    
    function select_records($sql){
        $db = tdb_connect();
        $records = mysqli_query($db, $sql);
        confirm_result_set($records);
        return $records;
    }
    

    function select_trad_list(){
        // get filter values
        $filter_year = $_POST['trad-fyear'] ?? date('Y'); 
        $search = $_POST['trad-search'] ?? ""; 
        $search = "%" . $search . "%"; 

        $sql = "SELECT id, 
        CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) as 'Folio', 
        titular AS  'Titular', 
        tipo AS  'Tipo'
        FROM traducciones
        
        WHERE id LIKE '$search'
        AND YEAR(IFNULL(fecha, '')) LIKE $filter_year
        
        OR CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) LIKE '$search' 
        AND YEAR(IFNULL(fecha, '')) LIKE $filter_year

        OR titular LIKE '$search'
        AND YEAR(IFNULL(fecha, '')) LIKE $filter_year

        OR Folio LIKE '$search'
        AND YEAR(IFNULL(fecha, '')) LIKE $filter_year
        
        ORDER BY fecha DESC, folio DESC
        
        ;";
        return select_records($sql);
    }

    function select_trad_view($id){
        // Returns the records that are going to be display as associative array
        $sql = "SELECT id, 
        CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) as 'Folio', 
        titular AS  'Titular', 
        tipo AS  'Tipo',
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
        CONCAT(telPais, telNo) AS 'Telefono',
        notas AS 'Notas'
        FROM traducciones
        WHERE id = $id;";

        $trad_records = select_records($sql);
        $record = mysqli_fetch_assoc($trad_records);
        mysqli_free_result($trad_records);
        $tel = $record['Telefono'];
        $email = $record['Email'];

        //give telefono and email htags
        if($email){
            $record['Email'] = "<a href='mailto:$email'>$email</a>";
        }
        if($tel){
            $record['Telefono'] = "<a href='tel:$tel'>$tel</a>";
            $whats = str_replace('+', '', $tel);
            $record['WhatsApp'] = "<a href='https://wa.me/$whats'>$tel</a>";
            // remove notes and then add to end
            $notes = $record['Notas'];
            unset($record['Notas']);
            $record['Notas'] = $notes;

        }
        return $record;
    }













    // DELETE IF NOT USED -- PLACED ABOVE

    $table = " FROM traducciones";

    

    $selectList = "SELECT id, 
        CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) as 'Folio', 
        titular AS  'Titular', 
        tipo AS  'Tipo',
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
        CONCAT(telPais, telNo) AS 'Telefono'
        telPais AS 'Pais Tel',
        telNo AS 'Telefono',
        notas AS 'Notas'
        FROM traducciones
        
        ";



    
    
    function select_trad_details($id){
        global $table;
        global $selectAll;
        $selectAll .= " $table WHERE id = $id;";
        $records = select_records($selectAll);
        return $records;
    }
    
    function select_trad_list1(){
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