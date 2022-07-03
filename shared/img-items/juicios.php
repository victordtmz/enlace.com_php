<?php 
    if ($language == 'es'){
        $h5 = 'Juicios en México';
        $p = 'Llevamos juicios civiles en México, para cuestiones de herencias, corrección de documentos, divorcios, custodia, restitución internacional de menores, entre otros.';
    }else{
        $h5 = 'Trials in Mexico';
        $p = 'If you have any matters that must be heard in a court in Mexico, we han help.';
    }
?>
<a class="img-item" href="<?php echo set_url_for('/index.php?page=trials/index') ?>">
    <img src="<?php echo url_for('private\images\ii\juicios.jpg'); ?>" alt="">
    <div>
        <h5><?php echo $h5 ?></h5>
        <p><?php echo $p ?></p>
    </div>
</a>