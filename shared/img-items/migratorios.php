<?php 
    if ($language == 'es'){
        $h5 = 'Migratorios';
        $p = 'Asuntos migratorios de Estados Unidos.';
    }else{
        $h5 = 'Immigration';
        $p = 'US immigration services';
    }
?>
<a class="img-item" href="<?php echo set_url_for('/index.php?page=immigration/index&lan=' . $language) ?>">
    <img src="<?php echo url_for('private\images\ii\migratorios.jpg'); ?>" alt="">
    <div>
        <h5><?php echo $h5 ?></h5>
        <p><?php echo $p ?></p>
    </div>
</a>
