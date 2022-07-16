
<?php 
    if ($language == 'es'){
        $h5 = 'Apostillas';
        $p = 'Obten la apostilla de tus documentos oficiales para uso en tu país';
    }else{
        $h5 = 'Apostilles';
        $p = 'Get the Apostille of your official documents for use in your country';
    }
?>
<a class="img-item" href="<?php echo set_url_for('/index.php?page=apostille/index&lan=' . $language) ?>">
    <img src="<?php echo url_for('private\images\ii\apostille.jpg'); ?>" alt="">
    <div>
        <h5><?php echo $h5 ?></h5>
        <p><?php echo $p ?></p>
    </div>
</a>