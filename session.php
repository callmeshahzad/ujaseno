<?php 

// ini_set('session.cookie_lifetime', 60 * 60 * 24 * 100);
// ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 100);

    ob_start();
    if(!isset($_SESSION)) 
    { 
        session_start([
            'cookie_lifetime' => 86400,
        ]);
    } 
  

include 'config.php';
?>