<?php
    // below is the non-secure practice that enables URL redirect
    $redirect_url = $_GET['url'];
    header("Location: " . $redirect_url);
    phpinfo() ; 
?> 
