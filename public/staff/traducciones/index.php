
<?php 
    require_once('../../../private/initialize.php'); 
    $menu_items = $menu_staff;
    //page title will show on browser tab
    $page_title = 'Traducciones'; 
    include(SHARED_PATH . '/header.php');
    
    //create db connection
    $db = tdb_connect();
    $sql = "SELECT id,
      CONCAT(LPAD(folio,4,0), '/', YEAR(fecha)) as 'Folio', 
        titular AS  'Titular', 
        tipo AS  'Tipo', 
        fecha AS 'Fecha'
        FROM traducciones 
        WHERE YEAR(IFNULL(fecha, '')) = 2022 
        ORDER BY fecha DESC, folio DESC;";
    $trad_records = mysqli_query($db, $sql);
    confirm_result_set($trad_records);
?>
<section class="db-form">
  <div class="db-list">
    <table class="list">
        <tr>
          <!-- <th>ID</th> -->
          <th>Folio</th>
          <th>Titular</th>
          <th>Tipo</th>
          <th>Fecha</th>
          <th>id</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>

        <?php while($record = mysqli_fetch_assoc($trad_records)) { ?>
          <tr>
            <!-- <td><?php echo h($record['id']); ?></td> -->
            <!-- <td><?php echo h($record['No']); ?></td> -->
            <td><?php echo h($record['Folio']); ?></td>
            <td><?php echo h($record['Titular']); ?></td>
            <td><?php echo h($record['Tipo']); ?></td>
            <td><?php echo h($record['Fecha']); ?></td>
            <input type="submit" name="populate"/>
            <td><a class="action" target="form-details" href="<?php echo url_for('public/staff/traducciones/show.php?id=' . $record['id']); ?>">View</a></td>
            <!-- <td><a class="action" href="">Edit</a></td>
            <td><a class="action" href="">Delete</a></td> -->
          </tr>
        <?php } ?>
      </table>
      <?php mysqli_free_result($trad_records);?>
  </div>
  <form action="" class="db-details" method="post">
    <div class="form-row">
      <label for="txtId">Id: </label>
      <input type="text" name="txtId">
    </div>
    <div class="form-row">
      <label for="txtFolio">Folio: </label>
      <input type="text" name="txtFolio">
      
    </div>
    <button id="1973" onclick="replaceText('1973')">Ajax Text</button>
    <Button type="submit" name="populate"/>
    <!-- <?php 
      // if(isset($_POST['populate'])){
      //   echo "Button is working"; 
      //   echo $_POST['populate'];
      // }
    ?> -->
    <!-- <iframe name="form-details" frameborder="0" src="<?php echo url_for('public/staff/traducciones/show.php'); ?>"></iframe> -->
    </form>
</section>

<?php 

  include(SHARED_PATH . '/footer.php');

?>
    