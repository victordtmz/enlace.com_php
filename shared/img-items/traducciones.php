
<?php 
    if ($language == 'es'){
        $h5 = 'Traducciones Oficiales';
        $p = 'Traduccion de tus documentos para trámites migratorios, academícos, judiciales y administrativos.';
    }else{
        $h5 = 'Certified Translations';
        $p = 'Translate your documents for immigration, judicial, academic or administrative procedures';
    }
?>
<a class="img-item" href="<?php echo set_url_for('/index.php?page=translations\index') ?>">
    <img src="<?php echo url_for('private\images\ii\traducciones.jpg'); ?>" alt="">
    <div>
        <h5><?php echo $h5 ?></h5>
        <p><?php echo $p ?></p>
    </div>
</a>