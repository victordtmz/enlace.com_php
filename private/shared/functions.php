<?php
    function set_url_for($url){
        if ($_SESSION['website'] == 'enlace'){
            return url_for($url);
        }elseif ($_SESSION['website'] == 'guanajuato'){
            return url_for_guanajuato($url);
        }elseif ($_SESSION['website'] == 'mexico'){
            return url_for_mexico($url);
            echo 'Mexico';
        }elseif ($_SESSION['website'] == 'tri-cities'){
            return url_for_tri_cities($url);
        }
    }
    
    function url_for($script_path) {  
        if($script_path[0] != '/'){
            $script_path = '/' . $script_path;
        }
        return WWW_ROOT . $script_path;
    }

    function url_for_tri_cities($path){
        if($path[0] != '/'){
            $path = '/' . $path;
        }
        if ($_SESSION['mode'] == 'live'){
            return 'tri-cities/' . WWW_ROOT . $path;
        }
        else{
            return WWW_ROOT . '/tri-cities' . $path;
        }
        
    }

    function url_for_guanajuato($path){
        if($path[0] != '/'){
            $path = '/' . $path;
        }
        if ($_SESSION['mode'] == 'live'){
            return 'guanajuato/' . WWW_ROOT . $path;
        }
        else{
            return WWW_ROOT . '/guanajuato' . $path;
        }
        // return 'guanajuato' . WWW_ROOT . $path;
    }

    function url_for_mexico($path){
        if($path[0] != '/'){
            $path = '/' . $path;
        }
        if ($_SESSION['mode'] == 'live'){
            return 'mexico/' . WWW_ROOT . $path;
        }
        else{
            return WWW_ROOT . '/mexico' . $path;
        }
        // return 'mexico' . WWW_ROOT . $path;
    }

    function u($string=""){
        return urlencode($string);
    }

    function raw_u($string=""){
        return rawurlencode($string);
    }

    function h($string=""){
        return htmlspecialchars($string);

    }
 
    function error_404(){
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not found");
        exit();
    }

    function error_500(){
        header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal server error");
        exit();
    }

    function redirect_to($location){
        header("Location: " . $location);
        exit();
    }

    function is_post_request(){
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    function is_get_request(){
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    function display_errors($errors=array()) {
        $output = '';
        if(!empty($errors)) {
          $output .= "<div class=\"errors\">";
          $output .= "Corrija los siguientes errores:";
          $output .= "<ul>";
          foreach($errors as $error) {
            $output .= "<li class='error'>" . h($error) . "</li>";
          }
          $output .= "</ul>";
          $output .= "</div>";
        }
        return $output;
      }

    function set_show_html($record){
        foreach($record as $key => $value){ 
            if ($value) {
                ?>
            
            <div class="form-row">
              <h5>
                <?php echo h($key);?>:
              </h5>
              <h6>
                <?php echo $value;?>
              </h6>
            </div>
          <?php }  
    }
}
?>