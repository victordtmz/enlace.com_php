<?php
require_once('../../private/initialize.php'); 
$logout = log_out_admin();
if($logout){
    redirect_to(url_for('/staff/login.php'));
}else{
    echo 'No se pudo cerrar cesión, contacte al administrador';
}

