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
        // // 3 lines for testing
        $filter_year = $_POST['trad-fyear'];
        if($filter_year){
            echo $filter_year;
        }else{
            echo "False";
        }
        // echo "This is  some text";
        // echo $filter_year;


        global $table;
        global $selectList;
        $selectList .= $table . " WHERE YEAR(IFNULL(fecha, '')) LIKE $filter_year ORDER BY fecha DESC, folio DESC;";
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