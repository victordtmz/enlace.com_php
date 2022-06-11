<section class="user-info">
	<div>
		<p>
			Usuario:
			<?php echo $_SESSION['user'];?>
			<a href="<?php echo url_for('/staff/logout.php');?>">Cerrar sesión</a>
		</p>
	</div>
</section>