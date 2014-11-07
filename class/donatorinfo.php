<?php
    if ($_SERVER["REQUEST_METHOD"] != "GET")
        die();
    $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
    if($mysqli->connect_erron){
        die("服务器连接失败");
    }
    $query = "SELECT * FROM donator";
    $result = $mysqli->query($query);
    print_r($result);
