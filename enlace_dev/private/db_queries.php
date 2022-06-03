<?php 
    $sql = "SELECT id, 
        folio AS 'No', 
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
        telPais AS 'Pais',
        telNo AS 'Telefono',
        notas AS 'Notas'
        FROM traducciones 
        WHERE YEAR(IFNULL(fecha, '')) = 2022 
        ORDER BY fecha DESC, folio DESC;";

    // WHERE IFNULL (pais, "") LIKE %s
    // AND IFNULL (estado, "") LIKE %s
    // AND IFNULL (ciudad, "") LIKE %s
    // AND IFNULL(tipo, "") LIKE %s
    // AND YEAR(IFNULL(fecha, "")) LIKE %s
    // ORDER BY fecha DESC, folio DESC
    // LIMIT 400;"
    // $sql = "SELECT * FROM traducciones LIMIT 50;";
   
?>