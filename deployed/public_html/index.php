<!-- <?php  phpinfo();?>  --> 
<?php 
    require_once('../private/initialize.php'); 
    $page_title = 'Inicio'; 
    // $menu_items = $menu_home;
    include(SHARED_PATH . '/header.php');
?>

<section class="inicio">
    <div class="content_wrap">
        <h1>Enlace LLC</h1>
        <!-- <h2>Trámites y servicios para mexicanos en Estados Unidos</h2> -->
        <h2>Despacho de Servicios Internacionales</h2>
    </div>
    </section>
    <!--o! intro -->
<section class="intro">
    <div class="overlay">
    <div class="content_wrap intro-content">
        <div class="sec-title">
        <H3>Tu enlace entre México y Estados Unidos</H3>
        <h6>Más de 15 años brindando servicios Internacionales a nuestra comunidad</h6>
        </div>
        <div class="sec-items">
        <div class="img-item">
            <img src="<?php echo url_for('private\images\trad.jpg'); ?>" alt="">
            <div>
            <h5>Traducciones Oficiales</h5>
            <p>Traduccion de tus documentos para trámites migratorios, academícos, judiciales y administrativos</p>
            </div>  
        </div>
        
        <div class="img-item">
            <img src="<?php echo url_for('private\images/liam-truong-htpU_wGEcW0-unsplash.jpg'); ?>" alt="">
            <div>
            <h5>Documentos Oficiales</h5>
            <p>Te ayudamos a tramitar tus documentos oficiales de México o Estados Unidos, como actas de nacimiento, certificados, entre otros.  También te podemos ayudar a corregirlos</p>
            </div>
        </div>

        <div class="img-item">
            <img src="<?php echo url_for('private\images/lewis-keegan-XQaqV5qYcXg-unsplash.jpg'); ?>" alt="">
            <div>
            <h5>Apostillas</h5>
            <p>Si necesitas un documento con válidez oficial en otro país, te ayudamos a tramitar tu apostilla.</p>
            </div>
        </div>

        <div class="img-item">
            <img src="<?php echo url_for('private\images/spencer-davis-0QcSnCM0aMc-unsplash.jpg'); ?>" alt="">
            <div>
            <h5>Viajes</h5>
            <p>Te orientamos si deseas viajar al extranjero y no saben que documentos necesitas para ingresar a otro país o para tu regreso.</p>
            </div>
        </div>
        
        <div class="img-item">
            <img src="<?php echo url_for('private\images/dual.png'); ?>" alt="">
            <div>
            <h5>Doble nacionalidad</h5>
            <p>Te ayudamos a ver si calificas y te decimos que documentos necesitas para obtener este doble beneficio.</p>
            </div>
        </div>

        <div class="img-item">
            <img src="<?php echo url_for('private\images/giammarco-OPzWvgL-upY-unsplash.jpg'); ?>" alt="">
            <div>
            <h5>Juicios en México</h5>
            <p>Llevamos juicios civiles en México, para cuestiones de herencias, corrección de documentos, divorcios, custodia, restitución internacional de menores, entre otros.</p>
            </div>
        </div>

        <div class="img-item">
            <img src="<?php echo url_for('private\images/stephen-goldberg-LBLc9M1YrwQ-unsplash.jpg'); ?>" alt="">
            <div>
            <h5>Servicios Notariales</h5>
            <p>Redacción de documentos y certificación notarial disponible (Estados Unidos).</p>
            </div>
        </div>
        
        </div>
    
    </div>
    </div>  
</section>


<!-- Close content div before footer -->
</div>
<?php 
    include(SHARED_PATH . '/footer.php');
?>