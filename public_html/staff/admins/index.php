<?php 
    require_once('../../../private/initialize.php'); 
    $page_title = 'Staff | Traducciones'; 
    $menu_items = $menu_staff;
    include(SHARED_PATH . '/header_staff.php');

	
	
	if(is_post_request()){
		$form_search = $_POST['trad-search'] ?? '';
		
	  }else{
		$form_search = '';
	  }
?>
  <section class="inicio sub-nav">
	<!--  -->
	<!-- <section class="inicio sub-nav"> -->
	  <?php include('header_sub.php') ?>
	<!-- </section> -->
	<h4>Filtros:</h4>
    <form method="post" class="filters dark narrow">
      
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
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Email</th>
			<th>Edit</th>
			<!-- <th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th> -->
		</tr> 
		<?php
			$records = select_all();
			while($record = $records->fetch_assoc()) { ?>
				<!-- while($record = mysqli_fetch_assoc($records)) { ?> -->
			<tr>
				<td><a class="list-action" href="<?php echo url_for('staff/admins/show.php?id=' . $record['id']); ?>"><?php echo h($record['Nombre']); ?></a></td>
				<td><?php echo h($record['Apellidos']); ?></td>
				<td><?php echo h($record['Email']); ?></td>
				<td><a class="list-action" href="<?php echo url_for('staff/admins/edit.php?id=' . $record['id']); ?>">Editar</a></td>
			</tr>
		<?php }
			
		} ?>
		
			
	</table>
	
	</section>
</div>
<?php
	include(SHARED_PATH . '/footer_staff.php');
	if(isset($records)){
		$records->free_result();
	}
?>
