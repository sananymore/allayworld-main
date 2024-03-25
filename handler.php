<?php 
    require_once('configuration.php');
    session_unset();
    session_destroy();
    header('Location: index.php');
?>