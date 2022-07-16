
<?php 
    if ($language == 'es'){
        $h5 = 'Matrimonios';
        $p = 'Asesoría para personas que desean contraer matrimonio en México..';
    }else{
        $h5 = 'Marriage';
        $p = 'Found the love of your life in Mexico and want to get married!';
    }
?>
<a class="img-item" href="<?php echo set_url_for('/index.php?page=trials/marriage&lan=' . $language) ?>">
    <img src="<?php echo url_for('private\images\ii\matrimonio.jpg'); ?>" alt="">
    <div>
        <h5><?php echo $h5 ?></h5>
        <p><?php echo $p ?></p>
    </div>
</a>