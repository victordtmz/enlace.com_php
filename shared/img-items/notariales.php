<?php 
    if ($language == 'es'){
        $h5 = 'Notario Publico';
        $p = 'Servicios de Notario para los Tri-Cities y sus alrededores';
    }else{
        $h5 = 'Notary Public';
        $p = 'Notary Services for the Tri-Cities and sorrounding areas';
    }
?>
<a class="img-item" href="<?php echo set_url_for('/index.php?page=notary/index&lan=' . $language) ?>">
    <img src="<?php echo url_for('private\images\ii\notary.jpg'); ?>" alt="">
    <div>
        <h5><?php echo $h5 ?></h5>
        <p><?php echo $p ?></p>
    </div>
</a>
