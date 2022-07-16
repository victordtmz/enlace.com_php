<?php 
    if ($language == 'es'){
        $h5 = 'Divorcio';
        $p = 'Si te casaste en México, te ayudamos a finalizar tu divorico.';
    }else{
        $h5 = 'Divorce';
        $p = 'If you got married in Mexico and need a divorce, we can help.';
    }
?>
<a class="img-item" href="<?php echo set_url_for('/index.php?page=trials/divorce&lan=' . $language) ?>">
    <img src="<?php echo url_for('private\images\ii\divorcio.jpg'); ?>" alt="">
    <div>
        <h5><?php echo $h5 ?></h5>
        <p><?php echo $p ?></p>
    </div>
</a>