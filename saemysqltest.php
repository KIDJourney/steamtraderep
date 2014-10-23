<?php
    $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
    if ($mysqli->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno , ")" . $mysqli->connect_error;            
    }
    echo $mysqli->host_info . "\n" ;

    $res = $mysqli->query("SELECT * FROM trickerlist WHERE tiebaid like '%KI%'");
    $row = $res->fetch_assoc();
    foreach($row as $keys=>$value){
        echo $keys .' ' . $value . "<br>";
    }

?>