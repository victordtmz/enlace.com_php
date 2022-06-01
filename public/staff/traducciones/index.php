
<?php 
    require_once('../../../private/initialize.php'); 
    //page title will show on browser tab
    $page_title = 'Subjects'; 
    include(SHARED_PATH . '/staff_header.php');
    
    //create db connection
    $db = tdb_connect();
    $sql = "SELECT id, folio AS 'No', CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) as 'Folio', titular AS  'Titular', tipo AS  'Tipo', fecha AS 'Fecha' FROM traducciones WHERE YEAR(IFNULL(fecha, '')) = 2022 ORDER BY fecha DESC, folio DESC;";
    // $sql .= "";
    // $sql .= " "
    
    
    // hojas AS "Hojas",
    // costo AS "Costo",
    // destino AS "Destino",
    // idioma AS "Idioma",
    // pais AS "Pais",
    // estado AS "Estado",
    // ciudad AS "Ciudad",
    // origen AS "Dependencia",
    // contacto AS "Solicitante",
    // email AS "Email",
    // telPais AS "Pais",
    // telNo AS "Telefono",
    // notas AS "Notas"
    // FROM traducciones
    // WHERE IFNULL (pais, "") LIKE %s
    // AND IFNULL (estado, "") LIKE %s
    // AND IFNULL (ciudad, "") LIKE %s
    // AND IFNULL(tipo, "") LIKE %s
    // AND YEAR(IFNULL(fecha, "")) LIKE %s
    // ORDER BY fecha DESC, folio DESC
    // LIMIT 400;"
    // $sql = "SELECT * FROM traducciones LIMIT 50;";
    $trad_records = mysqli_query($db, $sql);
    confirm_result_set($trad_records);
?>

<div id="content">
<div class="subjects listing">
    <h1>Subjects</h1>

    <div class="actions">
      <a class="action" href="">Create New Subject</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($record = mysqli_fetch_assoc($trad_records)) { ?>
        <tr>
          <td><?php echo h($record['id']); ?></td>
          <td><?php echo h($record['No']); ?></td>
          <td><?php echo h($record['Folio']); ?></td>
          <td><?php echo h($record['Titular']); ?></td>
          <td><?php echo h($record['Tipo']); ?></td>
          <td><?php echo h($record['Fecha']); ?></td>
          <td><a class="action" href="<?php echo url_for('public/staff/subjects/show.php?id=' . $subject['id']) ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    <?php mysqli_free_result($trad_records);?>

  </div>
    
    
</div>

<?php include(SHARED_PATH . '/staff_footer.php');?>
    