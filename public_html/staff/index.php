<?php 
    require_once('../../private/initialize.php'); 
    require_login();
    $page_title = 'Staff | Traducciones'; 
    $menu_items = $menu_staff;
    include(SHARED_PATH . '/header_staff.php');
    // var_dump($_SESSION)
?>

<section class="sub-header">
    <div class="content_wrap">
        <h1>Enlace LLC</h1>
        <!-- <h2>Trámites y servicios para mexicanos en Estados Unidos</h2> -->
        <h2>Despacho de Servicios Internacionales</h2>
    </div>
    </section>
    <!--o! intro -->
<section class="intro">
    


<!-- Close content div before footer -->
</div>
<?php 
    include(SHARED_PATH . '/footer.php');
?>