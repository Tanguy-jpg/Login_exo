<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: index.php');
    }
    
require_once('html/1-start.html');
require_once('html/3-logged-page.html');