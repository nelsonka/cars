<?php
    $host = getenv('IP');
    $user = 'nelsonka';
    $pass = "";
    $db = "random";
    $port = 3306;

    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)
    or die(mysql_error());
?>