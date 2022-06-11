<?php
    function log_in_admin($admin){
        if(isset($_SESSION['admin_id'])){
            session_regenerate_id();
        }
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['last_login'] = time();
        $_SESSION['username'] = $admin['username'];
        $_SESSION['user'] = $admin['user'];
        return true;
    }

    function log_out_admin(){
        if(isset($_SESSION['admin_id'])){
            session_regenerate_id();
        }
        unset($_SESSION['admin_id']);
        unset($_SESSION['last_login']);
        unset($_SESSION['username']);
        unset($_SESSION['user']);
        return true;
    }

    function is_logged_in(){
        return isset($_SESSION['admin_id']);
    }

    function require_login(){
        if(!is_logged_in()){
            redirect_to(url_for('/staff/login.php'));
        }
    }
?>