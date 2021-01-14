<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    echo 'index<br>';
    var_dump($_SERVER['REQUEST_URI']);
    echo '<br>';
    var_dump($_GET['get']);