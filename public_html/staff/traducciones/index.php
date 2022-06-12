<?php 
    require_once('../../../private/initialize.php'); 
    require_once('queries.php');
    $page_title = 'Staff | Traducciones'; 
    $menu_items = $menu_staff;
    include(SHARED_PATH . '/header_staff.php');
	
	if(is_post_request()){
		$form_year = $_POST['trad-fyear'] ?? '';
		$form_search = $_POST['trad-search'] ?? '';
		
	  }else{
		$form_year = '';
		$form_search = '';
	  }
?>
  <section class="inicio sub-nav">
	<?php include('header_sub.php'); ?>
	<h4>Filtros:</h4>
    <form method="post" class="filters dark narrow">
      <div class="form-set">
        <label for="trad-fyear">Año:</label>
        <select name="trad-fyear" id="trad-fyear">
        	<?php for($y = date('Y'); $y > 2014; $y--){
                echo "<option value='$y'" . ($y == $form_year ? 'selected':'') . ">$y</option>";
              } 
			  
			  ?>
        </select>
      </div>
    
      <div class="form-set">
        <label for="trad-search">Busqueda:</label>
        <input type="search" name="trad-search" value="<?php echo h($form_search); ?>">
      </div>
        
      <div class="form-set">
        <input type="submit" name="trad-list-apply" value="Obtener Registros">
      </div>
        
    </form>
  </section>
	<section class="db-list">
		<?php 
			if(isset($_POST['trad-list-apply'])){
				requery();
			}else{
				requery();
			}
		?>
		<?php 
			function requery(){
		?>
		<table class="list">
		<tr>
			<th>Folio</th>
			<th>Titular</th>
			<th>Tipo</th>
			<!-- <th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th> -->
		</tr> 
		<?php
			$trad_records = select_all();
			while($record = mysqli_fetch_assoc($trad_records)) { ?>
			<tr>
				<td><a class="list-action" href="<?php echo url_for('staff/traducciones/show.php?id=' . $record['id']); ?>"><?php echo h($record['Folio']); ?></a></td>
				<td><?php echo h($record['Titular']); ?></td>
				<td><?php echo h($record['Tipo']); ?></td>
			</tr>
		<?php }
			
		} ?>
		
			
	</table>
	
	</section>
</div>
<?php
	include(SHARED_PATH . '/footer_staff.php');
	if(isset($trad_records)){
		mysqli_free_result($trad_records);
	}
?>
