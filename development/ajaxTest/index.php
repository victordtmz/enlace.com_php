<?php 
    require_once('../private/initialize.php'); 
    $page_title = 'Ajax Test Page'; 
    include(SHARED_PATH . '/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="main">
        <div>
            <h2>THis is the ORiginal text when the page first loads.</h2>
        </div>
        <button id="ajax-button">Update content with Ajax</button>
    </div>
    
    
</body>
</html>